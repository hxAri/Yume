<?php

namespace Yume\Kama\Obi\IO\Path;

use Yume\Kama\Obi\IO;

/*
 * PathError
 *
 * DirectoryError will only be thrown
 * if there is an error in the directory.
 *
 * @extends Yume\Kama\Obi\IO\IOError
 *
 * @package Yume\Kama\Obi\IO\Path
 */
class PathError extends IO\IOError
{
    /*
     * If the directory is not executeable.
     *
     * @access Public Static
     *
     * @values Int
     */
    public const NOT_EXECUTEABLE = 9876;
    
    /*
     * If the directory is not directory.
     *
     * @access Public Static
     *
     * @values Int
     */
    public const NOT_DIRECTORY = 9877;
    
    /*
     * If the directory is not found.
     *
     * @access Public Static
     *
     * @values Int
     */
    public const NOT_FOUND = 9878;
    
    /*
     * If the directory is not readable.
     *
     * @access Public Static
     *
     * @values Int
     */
    public const NOT_READABLE = 9879;
    
    /*
     * If the directory is not writeable.
     *
     * @access Public Static
     *
     * @values Int
     */
    public const NOT_WRITEABLE = 9880;
    
    /*
     * @inherit Yume\Kama\Obi\Trouble\TroubleError
     *
     */
    protected Array $flags = [
        self::NOT_EXECUTEABLE => "{}",
        self::NOT_DIRECTORY => "{}",
        self::NOT_FOUND => "{}",
        self::NOT_READABLE => "{}",
        self::NOT_WRITEABLE => "{}",
    ];
    
}

?>