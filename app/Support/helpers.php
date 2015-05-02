<?php

if (!function_exists('set_active')) {
	/**
	 * Return active class if current route matches.
	 *
	 * @param  array  $array
	 * @return array
	 */
	function set_active($route, $class = 'active') {
		return (Route::currentRouteName() == $route) ? $class : '';
	}
}