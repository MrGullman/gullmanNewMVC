<?php

class Input {

    public static function sanitize($dirty){
        return htmlspecialchars($dirty, ENT_COMPAT, 'UTF-8');
    }

    public static function get($input){
        if(isset($_POST[$input])){
            return self::sanitize($_POST[$input]);
        }else if($_GET[$input]){
            return self::sanitize($_GET[$input]);
        }
    }
}


?>