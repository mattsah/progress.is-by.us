<?php

use Inkwell\Controller\BaseController;
use Inkwell\View;

class HomeController extends BaseController
{
	/**
	 *
	 */
	public function __construct(View $view)
	{
		$this->view = $view;
	}


	/**
	 *
	 */
	public function main()
	{
		return $this->view->load('home/main.html');
	}
}
