<?php

namespace notification\notification;


class Cnotify{

use \Anax\DI\TInjectable;



public function insertMessage($message, $color){
	 $_SESSION['notificationMessage'] =  "<div style='background-color:". $color . "'>". $message." </div>";


	
}

public function showMessage()
    {
        if(!is_null($_SESSION['notificationMessage'])) {
            echo $_SESSION['notificationMessage'];
                    $_SESSION['notificationMessage'] = null;
        }
        else{
        	
        }
        
    }






}

