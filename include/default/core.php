<?php

use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;

return Affinity\Action::create(function($app, $resolver) {

	//
	// Setup execution mode and debugging
	//

	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);

	$engine            = $app['engine'];
	$server_admin      = $app->getEnvironment('SERVER_ADMIN', 'root');
	$debugging         = $engine->fetch('core', 'debugging', []);
	$execution_mode    = $engine->fetch('core', 'execution_mode', IW\EXEC_MODE\PRODUCTION);

	if (!isset($debugging['destination'])) {
		$debugging['destination'] = $execution_mode != IW\EXEC_MODE\PRODUCTION
			? IW\ERROR\DESTINATION_RESPONSE
			: IW\ERROR\DESTINATION_NULL;
	}

	if ($debugging['destination'] != IW\ERROR\DESTINATION_NULL) {
		$debug_manager = new Whoops\Run;

		switch ($debugging['destination']) {
			case IW\ERROR\DESTINATION_RESPONSE:
				$debug_handler = new PrettyPageHandler();
				$debug_handler->setPageTitle("Whoops! There was a problem.");
				$debug_manager->pushHandler($debug_handler);
				break;

			default:
				$debug_manager->pushHandler(function($exception, $inspector, $manager){
					//
					// @todo E-mail
					//
				});
				break;
		}

		$debug_manager->register();
	}

	$app->setExecutionMode($execution_mode);
	$app->setWriteDirectory($engine->fetch('core', 'write_directory', 'writable'));
});