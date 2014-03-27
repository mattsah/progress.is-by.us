<?php

	return Affinity\Config::create(['providers'], [

		'execution_mode'  => IW\EXEC_MODE\DEVELOPMENT,

		//
		// Debugging information to use.  Keeping the debugging destination to NULL will
		// change the default depending on the execution mode.  If the execution mode
		// is IW\EXEC_MODE\DEVELOPMENT, it will dump errors to the screen.  Otherwise it will
		// use the configured $_SERVER['SERVER_ADMIN'] e-mail address.
		//

		'debugging' => [
			'destination' => NULL,
			'error_level' => E_ALL,
		],

		//
		// The write directory provides a base directory to which the system and services can write
		// files to.  If some of these files need to be public, it is suggested you create relative
		// symbolic links in the "public" folder.
		//

		'write_directory' => 'writable',

		//
		// @providers allows you to wire together dependencies
		//

		'@providers' => [

			//
			// The provider mapping lists concrete class providers for given interfaces, the
			// interface is the key, while the class is the value.
			//

			'mapping' => [
				'Inkwell\Event\ManagerInterface' => 'Inkwell\Event\Manager',
				'Inkwell\ResponseInterface'      => 'Inkwell\Response',
				'Inkwell\RequestInterface'       => 'Inkwell\Request'
			],

			//
			// The provider params gives parameters for concrete class instantiation, the class is
			// the key, while the value is an array of params.  Parameters should begin with ':'
			// per Auryn docs.
			//

			'params' => [

			]
		]
	]);