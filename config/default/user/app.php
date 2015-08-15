<?php

	use IW\HTTP;

	return Affinity\Config::create(['routes'], [
		'@routes' => [
			'links' => [
				'/' => 'HomeController::main'
			]
		]
	]);
