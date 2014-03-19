<?php

	return Affinity\Action::create(['core'], function($app, $resolver) {
		$app['response'] = $resolver->make('Inkwell\ResponseInterface');
	});