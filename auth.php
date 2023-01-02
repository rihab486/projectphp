<?php

class Auth{
static function isLogged(){
    if(isset($_SESSION['auth']) && isset($_SESSION['auth']['email']) && isset($_SESSION['auth']['password'])){
        return true;
    }else{
        return false;
    }
}
}
?>