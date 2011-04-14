<?php
declare(ENCODING = 'utf-8');
namespace F3\TYPO3CR\Tests\Fixtures;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3CR".                    *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Fixture class
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @entity
 */
class AnEntity implements \F3\FLOW3\AOP\ProxyInterface {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var array
	 */
	protected $members;

	/**
	 * @var \SplObjectStorage
	 */
	public $objects;

	/**
	 * @var boolean
	 */
	public $clone = FALSE;

	/**
	 * @var \F3\TYPO3CR\Tests\Fixtures\AValue
	 */
	protected $value;

	/**
	 * @param string $name
	 */
	public function __construct($name) {
		$this->name = $name;
		$this->objects = new \SplObjectStorage();
	}

	/**
	 * @param object $object
	 * @return void
	 */
	public function add($object) {
		$this->members[] = $object;
	}

	/**
	 * @param object $object
	 * @return void
	 */
	public function addObject($object, $data = NULL) {
		if ($data === NULL) {
			$this->objects->attach($object);
		} else {
			$this->objects[$object] = $data;
		}
	}

	/**
	 * @param \F3\TYPO3CR\Tests\Fixtures\AValue $value
	 * @return void
	 */
	public function setValue(\F3\TYPO3CR\Tests\Fixtures\AValue $value) {
		$this->value = $value;
	}

	public function __clone() {
		return $this->clone;
	}

	/**
	 * Initializes the proxy and calls the (parent) constructor with the orginial given arguments.
	 * @return void
	 */
	public function FLOW3_AOP_Proxy_construct() {

	}

	/**
	 * Invokes the joinpoint - calls the target methods.
	 *
	 * @param \F3\FLOW3\AOP\JoinPointInterface: The join point
	 * @return mixed Result of the target (ie. original) method
	 */
	public function FLOW3_AOP_Proxy_invokeJoinPoint(\F3\FLOW3\AOP\JoinPointInterface $joinPoint) {

	}

}

?>