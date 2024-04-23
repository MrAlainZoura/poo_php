<?php
namespace Source;
use Exception\rootNotFoundException;
use Routeur\rooter;

class App
{
	public function __construct(private Rooter $rooter,private string $requestUri){}

	public function resolve()
	{
		try{
		    echo $this->rooter->run($this->requestUri);
		    }catch(rootNotFoundException $e){
		    echo $e->getMessage();
		}
	}
}