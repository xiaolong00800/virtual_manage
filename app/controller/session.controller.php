<?php
//------------------------------------------------------
//控制器类名必须以controller_开头,同时需要继承controller
//方法名必须以action_开头
//每个控制器都会有一个核心对象codeant,
//可以通过$this->codeant来调用该变量,以及codeant所包含的方法
//----------------------------------------------------------------

class controller_session extends controller
{

  public function __construct()
  {
    session_start();
  }

  public function action_new()
  {
    if(help_session::isLogin())
    {
      header("Location: /user/show");
    }
    else
    {
      $this->codeant->display();
    }
  }
  
  public function action_create()
  {
    $email = $this->codeAnt->input->post("email");
    $password = $this->codeAnt->input->post("password");
    $user = module_user::authenticate($email, $password);
    if(empty($user))
    {
      header("Location: /");
    }
    else
    {
      help_session::login($user);
      header("Location: /user/show");
    }
  }
  
  public function action_destroy()
  {
    help_session::logout();
    header("Location: /");
  }
	
}
?>
