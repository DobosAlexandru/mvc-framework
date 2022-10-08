<?php

namespace app\core;

class Session
{
    /******
     * Array key for flash messages
     */

    protected const FLASH_KEY = 'flash_messages';

    /******
     * Session class constructor
     */

    public function __construct()
    {
        session_start();
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach($flashMessages as $key => &$flashMessage){

            //Mark to be removed
            $flashMessage['remove'] = true; 

        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;

    }

    /******
     * Set flash message
     */

    public function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'remove' => false,
            'value' => $message
        ];
    }

    /******
     * Get flash message from session
     */

    public function getFlash($key)
    {
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }

    /******
     * Set flash message
     */

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /******
     * Get session key
     */

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }

    /******
     * Remove session key
     */

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public function __destruct()
    {
        //Iterate over marked 
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        foreach($flashMessages as $key => &$flashMessage){

            if($flashMessage['remove']){
                unset($flashMessages[$key]);
            }

        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}