<?php

namespace Yume\Func;

use Yume\Kama\Obi\AoE;
use Yume\Kama\Obi\HTTP;
use Yume\Kama\Obi\IO;
use Yume\Kama\Obi\Sasayaki;

/*
 * Displays the contents of the view or component.
 *
 * @params String <path>
 * @params Array, Yume\Kama\Obi\AoE\Hairetsu <data>
 *
 * @return String
 */
function view( String $path, Array | AoE\Hairetsu $data = [] ): String
{
    
    /*
     * Added Sasayaki extension if not exists.
     *
     * @extension Sasayaki\.php
     */
    $view = str_replace( [ "views.", "components." ], [ "/assets/views/", "/assets/views/components/" ], $path .= substr( $path, -10 ) !== "saimin.php" ? ".saimin.php" : "" );
    
    /*
     * Opening file.
     *
     * @instance IO\Fairu
     */
    $file = IO\File\File::read( $view );
    
    /*
     * Rendering template.
     *
     */
    return( new Sasayaki\SasayakiProvider( $file, $data ) );
}

?>