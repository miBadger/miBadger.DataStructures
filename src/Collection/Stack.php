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
class Stack extends AbstractGenerics implements \IteratorAggregate, CollectionInterface
{
	/** @var array the data */
	private $stack = array();

	/**
	 * Construct initiates the data variable.
	 */
	public function __construct(string $type = null){
		$this->stack = array();
		if(!is_null($type)){
			if($this->isValidType($type)){
				$this->setType($type);
			}else{
				throw new \Exception('Unsupported variable type');
			}
		}
	}

	/**
	 * Pushes an item onto the top of this stack
	 *
	 * @param mixed $item item to be pushed on the stack
	 * @throws Exception if var does not match the Generics of the dataobject
	 * @return void
	 */
	public function push($item){
		if($this->checkGenerics($item)){
			array_push($this->stack, $item);
		}else{
			throw new \Exception("Type mismatch");
		}
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
	 * {@inheritdoc}
	 */
	public function isEmpty(){
		return $this->stack.isEmpty();
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(){
		return $this->stack;
	}

	/**
	 * {@inheritdoc}
	 */
	public function copy(){
		$stackToReturn = new Stack($this->type);
		foreach($this->stack as $item){
			$stackToReturn->push($item);
		}
		return $stackToReturn;
	}

	/**
	 * {@inheritdoc}
	 */
	public function size(){
		return size($this->stack);
	}

	/**
	 * {@inheritdoc}
	 */
	public function clear(){
		unset($this->stack);
		$this->stack = array();
	}

	/**
	 * {@inheritdoc}
	 */
	public function count(){
		return count($this->stack);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getIterator(){
		return new \ArrayIterator($this->stack);
	}
}