<?php

return Affinity\Config::create(['providers'], [
	'@providers' => [
		'Inkwell\RouterInterface' => 'Inkwell\Routing\Engine'
	]
]);