<?php

/**
 * Example Behavior
 *
 * PHP version 5
 *
 * @category Behavior
 * @package  Croogo
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class AcceleratorBehavior extends ModelBehavior {

/**
 * Setup
 *
 * @param Model $model
 * @param array $config
 * @return void
 */
// 	public function setup(Model $model, $config = array()) {
// 		if (is_string($config)) {
// 			$config = array($config);
// 		}

// 		$this->settings[$model->alias] = $config;
// 	}

// /**
//  * afterFind callback
//  *
//  * @param Model $model
//  * @param array $results
//  * @param boolean $primary
//  * @return array
//  */
// 	public function afterFind(Model $model, $results = array(), $primary = false) {
// 		if ($primary && isset($results[0][$model->alias])) {
// 			foreach ($results as $i => $result) {
// 				if (isset($results[$i][$model->alias]['body'])) {
// 					$results[$i][$model->alias]['body'] .= '<p>[Modified by AcceleratorBehavior]</p>';
// 				}
// 			}
// 		} elseif (isset($results[$model->alias])) {
// 			if (isset($results[$model->alias]['body'])) {
// 				$results[$model->alias]['body'] .= '<p>[Modified by AcceleratorBehavior]</p>';
// 			}
// 		}

// 		return $results;
// 	}

}
