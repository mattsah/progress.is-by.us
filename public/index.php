<?php namespace Inkwell
{
	use Exception;
	use Closure;
	use IW;

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	try {

		call_user_func(function() {

			//
			// Track backwards until we discover our includes directory.  The only file required
			// to be in place for this is includes/init.php which should return our application
			// instance.
			//

			for (

				//
				// Initial assignment
				//

				$init_path = 'init.php';

				//
				// While Condition
				//

				!is_file($init_path);

				//
				// Modifier
				//

				$init_path = realpath('..' . DIRECTORY_SEPARATOR . $init_path)
			);

			$app = include($init_path);

			$app['engine']->exec(function($app, $resolver) {
				$request  = $resolver->make('Inkwell\HTTP\Resource\Request');
				$gateway  = $resolver->make('Inkwell\HTTP\Gateway\Server');

				$gateway->populate($request);

				$response = $app['router']->run($request, function($action) use ($resolver) {
					if ($action instanceof Closure) {
						$class      = 'Inkwell\Controller';
						$controller = $resolver->make($class);
						$action     = $action->bindTo($controller, $controller);
						$reference  = [$controller, '{closure}'];

					} elseif (is_array($action)) {
						$class      = $action[0];
						$controller = $resolver->make($class);
						$action     = $action[1];
						$reference  = [$controller, $action];

					} else {
						$reference  = [$action];
					}

					if (isset($controller)) {
						$controller->prepare($action, [
							'router'   => $this,
							'request'  => $this->request,
							'response' => $this->response
						]);
					}

					return $reference;
				});

				$gateway->transport($response);
			});

		});

	} catch (Exception $e) {

		//
		// Panic here, attempt to determine what state we're in, see if some errors handlers are
		// callable or if we're totally fucked.  In the end, throw the exception and be damned.
		//

		throw $e;

		exit(0);
	}
}
