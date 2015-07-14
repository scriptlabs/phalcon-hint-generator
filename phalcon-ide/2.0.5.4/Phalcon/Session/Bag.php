<?php

namespace Phalcon\Session;

use Phalcon\Di;
use Phalcon\DiInterface;
use Phalcon\Di\InjectionAwareInterface;


class Bag implements InjectionAwareInterface, BagInterface, \IteratorAggregate, \ArrayAccess, \Countable
{

	protected $_dependencyInjector;

	protected $_name = null;

	protected $_data;

	protected $_initialized = false;

	protected $_session;



	/**
	 * Phalcon\Session\Bag constructor
	 * 
	 * @param string $name
	 */
	public function __construct($name) {}

	/**
	 * Sets the DependencyInjector container
	 * 
	 * @param DiInterface $dependencyInjector
	 *
	 * @return void
	 */
	public function setDI(DiInterface $dependencyInjector) {}

	/**
	 * Returns the DependencyInjector container
	 *
	 * @return DiInterface
	 */
	public function getDI() {}

	/**
	 * Initializes the session bag. This method must not be called directly, the class calls it when its internal data is accesed
	 *
	 * @return void
	 */
	public function initialize() {}

	/**
	 * Destroyes the session bag
	 *
	 *<code>
	 * $user->destroy();
	 *</code>
	 *
	 * @return void
	 */
	public function destroy() {}

	/**
	 * Sets a value in the session bag
	 *
	 *<code>
	 * $user->set('name', 'Kimbra');
	 *</code>
	 * 
	 * @param string $property
	 * @param string $value
	 *
	 *
	 * @return void
	 */
	public function set($property, $value) {}

	/**
	 * Magic setter to assign values to the session bag
	 *
	 *<code>
	 * $user->name = "Kimbra";
	 *</code>
	 * 
	 * @param string $property
	 * @param string $value
	 *
	 *
	 * @return void
	 */
	public function __set($property, $value) {}

	/**
	 * Obtains a value from the session bag optionally setting a default value
	 *
	 *<code>
	 * echo $user->get('name', 'Kimbra');
	 *</code>
	 *
	 * @param string $property
	 * @param string $defaultValue
	 * 
	 * @return mixed
	 */
	public function get($property, $defaultValue=null) {}

	/**
		 * Check first if the bag is initialized
	 * 
	 * @param string $property
		 *
	 * @return mixed
	 */
	public function __get($property) {}

	/**
	 * Check whether a property is defined in the internal bag
	 *
	 *<code>
	 * var_dump($user->has('name'));
	 *</code>
	 * 
	 * @param string $property
	 *
	 * @return boolean
	 */
	public function has($property) {}

	/**
	 * Magic isset to check whether a property is defined in the bag
	 *
	 *<code>
	 * var_dump(isset($user['name']));
	 *</code>
	 * 
	 * @param string $property
	 *
	 * @return boolean
	 */
	public function __isset($property) {}

	/**
	 * Removes a property from the internal bag
	 *
	 *<code>
	 * $user->remove('name');
	 *</code>
	 * 
	 * @param string $property
	 *
	 * @return boolean
	 */
	public function remove($property) {}

	/**
	 * Magic unset to remove items using the array syntax
	 *
	 *<code>
	 * unset($user['name']);
	 *</code>
	 * 
	 * @param string $property
	 *
	 * @return boolean
	 */
	public function __unset($property) {}

	/**
	 * Return length of bag
	 *
	 *<code>
	 * echo $user->count();
	 *</code>
	 *
	 * @return int
	 */
	public final function count() {}

	/**
	 * Returns the bag iterator
	 *
	 * @return mixed
	 */
	public final function getIterator() {}

	/**
	 * 
	 * @param string $property
	 * @param mixed $value
	 *
	 * @return mixed
	 */
	public final function offsetSet($property, $value) {}

	/**
	 * 
	 * @param string $property
	 *
	 * @return mixed
	 */
	public final function offsetExists($property) {}

	/**
	 * 
	 * @param string $property
	 *
	 * @return mixed
	 */
	public final function offsetUnset($property) {}

	/**
	 * 
	 * @param string $property
	 *
	 * @return mixed
	 */
	public final function offsetGet($property) {}

}