<?php
//------------------------------------------------------
//help类名必须以help_开头,同时需要继承help
//每个help都会有一个核心对象codeant,
//可以通过$this->codeant来调用该变量,以及codeant所包含的方法
//----------------------------------------------------------------

class help_session extends help
{
  static public function login($user)
  {
   # $rememberToken = self::rememberToken($user);
    $_SESSION["user"] = $user;
   # $_SESSION["rememberToken"] = $rememberToken;
   # cookie::rawSet("rememberToken", $rememberToken, 3600*24, "/", _ROOT_DOMAIN);
  }

  static public function isLogin()
  {
    return !empty($_SESSION["user"]);
  }

  static public function logout()
  {
    session_destroy();
   # setcookie("rememberToken", "", time()-3600, "/", _ROOT_DOMAIN);
  }

#  static private function rememberToken($user)
#  {
#    return base64_encode(json_encode($user));
#  }
}
?>
