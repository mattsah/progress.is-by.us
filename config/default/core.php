<?php

return Affinity\Config::create([

	'execution_mode'  => IW\EXEC_MODE\DEVELOPMENT,

	'debugging' => [
		'destination' => NULL,
		'error_level' => E_ALL,
	],

	'write_directory' => 'writable'
]);