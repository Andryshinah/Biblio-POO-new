<?php
namespace App\Core;

class SessionManager
{
  

   public function DebutSession()
   {
       session_start();
   }
    
  
    public function setSessionVariable($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getSessionVariable($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function FinSession()
    {
        session_destroy();
    }
}





?>