<?php
namespace App\Core;

use App\Controller\MainController;

Class Main
{
    private $URI;
    private $param;
    private $ControllerInstance;
    private $Controller;
    private $method;
    public function Start()
    {
        $this->URI=$_SERVER['REQUEST_URI'];
        
       if(!empty($this->URI) && $this->URI[-1]==='/')
       {
        $this->URI=substr($this->URI,0,-1);
        http_response_code(301);
        header('location:'.$this->URI);
       }


        if(isset($_GET['p']))
        {
        $this->param=explode('/',$_GET['p']);
        array_shift($this->param);

                if($this->param[0] !='')
                {
                    $this->ControllerInstance='App\\Controller\\'.ucfirst(array_shift($this->param)) .'Controller';
                    $this->ControllerInstance = new $this->ControllerInstance();
                    $action= (isset($this->param[0])) ? array_shift($this->param) : 'Index';
                    if(method_exists($this->ControllerInstance, $action))
                    {
                        (isset($this->param[0])) ? call_user_func_array([$this->ControllerInstance, $action], $this->param) : $this->ControllerInstance->$action();   
                    }
                    else
                    {
                    http_response_code(404);
                    echo "n'existe pas";
                    }
                }
                else
                {
                    $this->ControllerInstance=new MainController();
                    $this->ControllerInstance->Index();
                }

            }
           
            else
            {
                $this->ControllerInstance=new MainController;
                    $this->ControllerInstance->Index();
            }
       
       
    }
}

?>