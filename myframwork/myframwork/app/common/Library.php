<?php

namespace app\common;
class Library{

    public function __construct()
    {

    }

    // controller -> redirct url
    public static function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);

        exit();
    }

    public static function validate($data)
    {
        foreach($data as $value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
        }
        return $data;
    }


    public static function format_flash_message($message): string
    {
        if(isset($_SESSION['flash_message'])) {
            $message = $_SESSION['flash_message'];
            unset($_SESSION['flash_message']);
            echo $message;
        }
    }

}