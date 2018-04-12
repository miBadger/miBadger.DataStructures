<?php

/**
 * This file is part of the miBadger package.
 *
 * @author miWebb <info@miwebb.com>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\DataStructures\Collection;

/**
 * The Stack Datatype
 *
 * @since 1.0.0
 */
class Stack implements \IteratorAggregate, CollectionInterface
{

	private $stack = array();

	public function __construct(){
		$this->stack = array();
	}

	/**
	 * Replaces the stack with a custom array
	 *
	 * @return Stack returns itself
	 */
	public function replaceData($array){
		$this->stack = $array;
		return $this;
	}

	/**
	 * Pushes an item onto the top of this stack
	 *
	 * @return void
	 */
	public function push($item){
		array_push($this->stack, $item);
	}

	/**
	 * Removes the object at the top of the stack and returns that object
	 *
	 * @return mixed the object on top of the stack
	 */
	public function pop(){
		return array_pop($this->stack);
	}

	/**
	 * Looks at the object at the top of this stack without removing it from the stack
	 *
	 * @return mixed the object at the top of this stack
	 */
	public function peek(){
		return end($this->stack);
	}

	/**
	 * @inherit
	 */
	public function isEmpty(){
		return $this->stack.isEmpty();
	}

	/**
	 * @inherit
	 */
	public function toArray(){
		return $this->stack;
	}

	/**
	 * @inherit
	 */
	public function copy(){
		return (new Stack())->replaceData($this->stack);
	}

	/**
	 * @inherit
	 */
	public function size(){
		return size($this->stack);
	}

	/**
	 * @inherit
	 */
	public function clear(){
		unset($this->stack);
		$this->stack = array();
	}

	/**
	 * @inherit
	 */
	public function count(){
		return count($this->stack);
	}

	/**
	 * @inherit
	 */
	public function getIterator(){
		return new \ArrayIterator($this->stack);
	}
}