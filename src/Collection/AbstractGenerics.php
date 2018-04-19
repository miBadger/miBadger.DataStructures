<?php  

/**
 * This file is part of the miBadger package.
 *
 * @author miWebb <info@miwebb.com>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\DataStructures\Collection;
/**
 * The Generics Abstract class, used to give datatypes tools to be generic.
 *
 * @since 1.0.0
 */
abstract class AbstractGenerics  
{  
	protected $type;

    /**
     * @return string type of current dataobject
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type the type of the current dataobject
     *
     * @return self
     */
    protected function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $type the type you want to check
     *
     * @return bool wether the datatype is supported
     */
    protected function isValidType(string $type)
    {
        if(strcmp($type, "boolean") === 0 || strcmp($type, "integer") === 0 || strcmp($type, "double") === 0 || strcmp($type, "string") === 0 || strcmp($type, "array") === 0 || strcmp($type, "object") === 0){
            return true;
        }
        return false;
    }

    /**
     * @param mixed $item item to add to check type
     * 
     * @return bool check wether the item is valid to add
     */
    protected function checkGenerics($item)
    {
        if(!is_null($this->type)){
            if(strcmp(gettype($item), $this->type) === 0){
                return true;
            }else{
                return false;
            }
        }
        return true;
    }
}