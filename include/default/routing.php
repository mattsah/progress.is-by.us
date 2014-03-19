<?php

	return Affinity\Action::create(['core'], function($app, $resolver) {

		$app['router'] = $resolver->make('Inkwell\RouterInterface');

		foreach ($app['engine']->fetch('@routing', 'base_url') as $id => $base_url) {

			$links     = $app['engine']->fetch($id, '@routing.links',     []);
			$handlers  = $app['engine']->fetch($id, '@routing.handlers',  []);
			$redirects = $app['engine']->fetch($id, '@routing.redirects', []);

			//
			// Anchors
			//

			foreach ($links as $route => $action) {
				$app['router']->link($base_url, $route, $action);
			}

			//
			// Handlers
			//

			foreach ($handlers as $status => $action) {
				$app['router']->handle($base_url, $status, $action);
			}

			//
			// Redirects
			//

			foreach ($redirects as $type => $redirects) {
				foreach ($redirects as $route => $redirect) {
					$app['router']->redirect($base_url, $route, $redirect, $type);
				}
			}
		}
	});