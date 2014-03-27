<?php

	return Affinity\Action::create(['core'], function($app, $resolver) {
		$engine   = $app['engine'];
		$provider = $engine->fetch('response', '@providers.mapping.Inkwell\ResponseInterface');

		foreach ($engine->fetch('response', 'states', []) as $state => $info) {
			$provider::addState($state, $info['code'], $info['body']);
		}
	});