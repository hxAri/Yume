<?php

namespace Yume\Util\Himei;

trait Countable
{
    
    /*
     * Return Return the total value of data.
     *
     * @access Public
     *
     * @return Int
     */
    public function count(): Int
    {
        return( count( $this->data ) );
    }
    
}

?>