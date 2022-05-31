<?php

namespace Yume\Util\Database\Driver\PDO;

use Yume\Util\Himei;

use PDO;
use PDOStatement As Statement;

/*
 * Database Driver Statement utility class.
 *
 * @package Yume\Util\Database\Driver
 */
final class PDOStatement extends Statement
{
    
    public function count(): Int
    {
        return( $this->rowCount() );
    }
    
    /*
     * PDO Fetch Assoc.
     *
     * @access Public
     *
     * @return Array
     */
    public function fetchAssoc()
    {
        return( $this->fetchAll( PDO::FETCH_ASSOC ) );
    }
    
    /*
     * PDO Fetch Assoc.
     *
     * @access Public
     *
     * @return Yume\Util\Himei\Data
     */
    public function fetchResult()
    {
        return( new Himei\Data( $this->fetchAssoc() ) );
        
    }
    
}

?>