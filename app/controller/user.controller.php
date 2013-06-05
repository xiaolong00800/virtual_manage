<?php

class controller_user extends controller
{
  public function __construct()
  {
    session_start();
  }
  
  public function action_index()
  {
  
  }

  public function action_new()
  {
    
  }
 
  public function action_create()
  {
  
  }
 
  public function action_show()
  {
    $this->codeant->tpl->assign_by_ref('user', $_SESSION["user"]);
    $this->codeant->display(); 
  }

  public function action_edit()
  {
  
  }

  public function action_update()
  {
  
  }

  public function action_destroy()
  {
  
  }

}
?>
