<?php

/**
 * This file is part of the miBadger package.
 *
 * @author miWebb <info@miwebb.com>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\DataStructures\Collection;

/**
 * The Collection Interface
 *
 * @since 1.0.0
 */
interface Collection extends \Traversable, \Countable
{
	/**
    * Returns whether the collectable is empty
    *
    * @return bool
    */
	public function isEmpty();

	/**
    * Returns array representation of the collectable
    *
    * @return array
    */
	public function toArray();

	/**
    * Returns a copy of the collectable
    *
    * @return collectable
    */
	public function copy();

	/**
    * Returns the number of elements in this collection
    *
    * @return integer
    */
	public function size();

	/**
    * Removes all the elements in the collectable
    *
    * @return void
    */
	public function clear();
}