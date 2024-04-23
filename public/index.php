  <?php
  require'../vendor/autoload.php';
  //maj de autoload avec un new namespace cmd : composer dump-autoload
  //php -S localhost:8000 -d display_errors=1 -t public/

  use Routeur\rooter;
  use Source\App;

  define('BASE_VIEW_PATH', dirname(__DIR__). DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
  $rooter= new Rooter();

  $rooter->register('/', ['Controlers\homeCtr','index']);

     /*/ $rooter->register('/contact', function (){
        // 	return 'Contact Page';
         // });

        //try{
        //    echo $rooter->run($_SERVER['REQUEST_URI']);
        // }catch(rootNotFoundException $e){
        //    echo $e->getMessage();
        / }
    */ 

  (new App($rooter, $_SERVER['REQUEST_URI']))->resolve();