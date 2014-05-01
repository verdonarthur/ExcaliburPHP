<?php

/**
 * @author 
 * @copyright (c) 2014, Arthur Verdon
 * 
 * 
 */

/**
 * the core class of the framework. If this class not init all the framework
 * won't work
 */
class excalibur {
    /**
     * Load the class
     * @param string $class name of the class who gonna be load
     */
    private static function autoload_path($class){
        if(file_exists(MODULESPATH. $class . '.php'))
            require MODULESPATH. $class . '.php';
        else if(file_exists(COREPATH. $class . '.php'))
            require COREPATH. $class . '.php';
        else if(file_exists(MODELPATH. $class . '.php'))
            require MODELPATH. $class . '.php';
        else if(file_exists(CONTROLLERPATH. $class . '.php'))
            require CONTROLLERPATH. $class . '.php';
    }
    
    /**
     * this function init the autoloading of class
     */
    public static function init_autoload() {
        spl_autoload_register(function ($class) {
            self::autoload_path($class);
        });
    }
    /**
     * Load the configuration of the app
     * @param array $app_conf
     */
    public static function load_app_conf() {
        $app_config = include(CONFIGPATH.'app.conf.php');
        return $app_config;
    }
    /**
     * Load the configuration of the routes
     * @param array $routes_conf
     */
    public static function load_routes_conf() {
        $routes_config = include(CONFIGPATH.'routes.conf.php');
        return $routes_config;
    }
    /**
     * Load the configuration of the db
     * @return array $db_config
     */
    public static function load_db_conf(){
        $db_config = include(CONFIGPATH.'db.conf.php');
        return $db_config;
    }
}
