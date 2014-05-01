<?php

/**
 * @author 
 * @copyright (c) 2014, Arthur Verdon
 * 
 * 
 */

/**
 * 
 *
 */
class model_connection {
    /**
     * 
     * @param string $login_user
     * @param string $password_user
     * @return boolean
     */
    private static function can_connect($login_user,$password_user)
    {
        $can_connect = false;
        
        if(users::is_user_login_exist($password_user)){
            if(users::is_password_correct($login_user, $password_user)){
                $can_connect = true;
            }
        }
        
        return $can_connect;
    }	    
    /**
     * 
     * @param string $login_user
     */
    private static function create_session($login_user) {        
        $user = users::find_by_login($login_user);
        $right = users::get_right($user->id_user);
        
        session::set('username',$login_user);
        session::set('userright',$right);
    }
    /**
     * 
     * @param string $login_user
     * @param string $password_user
     * @return boolean
     */
    public static function do_connection($login_user, $password_user) {
        $result_connection = false;
        
        if(self::can_connect($login_user, $password_user)) {
            self::create_session($login_user);
            $result_connection = true;
        }
        
        return $result_connection;
    }
}
