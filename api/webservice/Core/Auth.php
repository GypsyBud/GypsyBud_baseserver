<?php
/**
 * API Authorization file.
 *
 * @package API
 *
 * @copyright YetiForce S.A.
 * @license YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace Api\Core;

/**
 * API Authorization class.
 */
class Auth
{
	/**
	 * Realm.
	 *
	 * @var string
	 */
	protected static $realm = 'YetiForceApi';

	/**
	 * Init.
	 *
	 * @param \Api\Controller $controller
	 *
	 * @return array
	 */
	public static function init(\Api\Controller $controller): array
	{
		$method = \App\Config::api('AUTH_METHOD');
		$class = "Api\\Core\\Auth\\$method";
		$self = new $class();
		$self->setApi($controller);
		$self->authenticate(static::$realm);
		return $self->getCurrentServer();
	}
}
