<?php
namespace Routeur;
use Exception\RootNotFoundException;
use Controlers\homeCtr;
class Rooter
{
	private array $rootes;

	public function register( string $path, callable|array $action)
	{
		$this->rootes[$path]=$action;
	}

	public function run(string $uri):mixed
	{
		$path= explode('?', $uri)[0];
		$action= $this->rootes[$path] ?? null;

		if(is_callable($action)){
			return $action();
		}

		if(is_array($action)){
			[$className, $method]=$action;

			if(class_exists($className) && method_exists($className, $method)){
				$class= new $className;

				return call_user_func_array([$class, $method], []);
			}
		}

		throw new RootNotFoundException();
	}
}