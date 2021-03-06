<?php

namespace Yume\Kama\Obi\AoE;

use Yume\Kama\Obi\HTTP;

final class Runtime
{
    
    /*
     * Application class instance.
     *
     * @access Public Static
     *
     * @values Yume\Kama\Obi\AoE\App
     */
    public static ? App $app = Null;
    
    /*
     * Router class instance.
     *
     * @access Public Protected
     *
     * @values Yume\Kama\Obi\HTTP\Routing\Router
     */
    protected static HTTP\Routing\Router $router;
    
    public static function start(): Void
    {
        
        // Check if the application already exists.
        if( self::$app Instanceof App )
        {
            throw new Trouble\RuntimeError( "Application initialization found, application cannot be duplicated." );
        }
        
        // Initialize app.
        self::$app = new App;
        
        // Run application services.
        self::$app->service();
        
        // {}
        
        if( CLI )
        {
            /*
             * Handle command line arguments.
             *
             * It will serve just as it would build controllers,
             * Components, models, and so on. If no command is sent,
             * The program will be terminated.
             */
            
        } else {
            
            // ...
            self::$router = new HTTP\Routing\Router;
            
            // ...
            self::$router->create();
            
            // ...
            self::$router->dispatch();
            
            echo "<pre>"; var_dump( $_ENV );
        }
    }
    /*
    function class_uses_deep($class, $autoload = true)
    {
        $traits = [];
    
        // Get traits of all parent classes
        do {
            $traits = array_merge(class_uses($class, $autoload), $traits);
        } while ($class = get_parent_class($class));
    
        // Get traits of all parent traits
        $traitsToSearch = $traits;
        while (!empty($traitsToSearch)) {
            $newTraits = class_uses(array_pop($traitsToSearch), $autoload);
            $traits = array_merge($newTraits, $traits);
            $traitsToSearch = array_merge($newTraits, $traitsToSearch);
        };
    
        foreach ($traits as $trait => $same) {
            $traits = array_merge(class_uses($trait, $autoload), $traits);
        }
    
        return array_unique($traits);
    }
    */
}

?>