<?php

namespace notification\notification;


class Cnotify{

use \Anax\DI\TInjectable;

public function __construct($di){
        $this->di = $di;
    }

public function insertMessage($message){
    
    $content = "<div class='alert alert-success' role='alert'>". $message." </div>";
    $this->session->set('notificationMessage', $content);
    
}

public function showMessage()
    {
        $ok = $this->session->has('notificationMessage');
        if($ok){
            echo $this->session->get("notificationMessage");
            $this->clearSession();
        }
        else{

        }
        
        
    }

    public function clearSession(){
        $this->session->set('notificationMessage', null);
    }






}



