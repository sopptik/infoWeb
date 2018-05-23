<?php
namespace Src\Core;

trait Singleton
{
    protected static $abort__construct;
    
    private static $instances = array();
    
    public static function instance() {
        return self::get_instance();

    }
    
    public static function getInstance( $args = array() ) {
        $class = get_called_class();
        if (! isset( self::$instances[ $class ] )) {
            $instance = new $class( $args );
            if (static::$abort__construct) {
                static::$abort__construct = false;
            } else {
                self::$instances[ $class ] = $instance;
            }
        }

        return ( isset( self::$instances[ $class ] ) ) ? self::$instances[ $class ] : null;

    }
    
    private function __clone() {
 
    }

    private function __sleep() {
 
    }

    private function __wakeup() {
 
    }

}
