<?php

return Affinity\Config::create(['providers'], [
	'@providers' => [
		'map' => [
			'Inkwell\RouterInterface' => 'Inkwell\Routing\Engine'
		]
	]
]);