notification
============


#### Step 1. Add this code to your CDIFactoryDefault.php   
            $this->setShared('notification', function() {    
            $notify = new \notification\notification\Cnotify($this);    
            return $notify;     
        });
         
#### Step 2. Add this in your controller or where ever you want your notification    

            
            $app->notification->insertMessage("Your message", "#color");     
        
#### Step 3. Add this where you want the message to show    


 	$app->notification->showMessage();
 	

## Good luck!
        
        
        
        
        
        
