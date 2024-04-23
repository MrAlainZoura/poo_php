<?php

namespace Source;

class Render
{
	public function __construct(private string $viewPath, private ?array $params){}

	public function view()
	{
		ob_start();

		extract($this->params);

		require BASE_VIEW_PATH . $this->viewPath . '.php';

		return ob_get_clean();
	}

	public static function viewRender(string $viewPath, ?array $params):static
	{
		return new static($viewPath, $params) ;
	}

	public function __tostring()
	{
		return $this->view();
	}
}