<?php

return Affinity\Action::create(['core'], function($app, $resolver) {
	foreach ($app->fetch('@providers') as $config => $providers) {
		foreach ($providers as $interface => $provider) {
			$resolver->alias($interface, $provider);
		}
	}
});