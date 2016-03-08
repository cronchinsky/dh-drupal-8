<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleController.
 */
namespace Drupal\integrarte_glue\Controller;
use Drupal\Core\Controller\ControllerBase;

class IntegrarteGlueStartController {
	public function startAction() {
		return [
			'#markup' => '<h2>Welcome to the start page</h2>',
		];
	}
}
