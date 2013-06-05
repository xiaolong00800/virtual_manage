<?php

class module_user extends module
{

  public function __construct()
  {
    parent::__construct();
  }

  static public function authenticate($email, $password)
  {
    $user = self::getUserInfoByEmail($email);
    if(empty($user))
    {
      return null;
    }
    if($user["password"] == $password)
    {
      return $user;
    }
  }
  
  static private function getUserInfoByEmail($email)
  {
    $whereParams = Array('email'=>$email);
    return self::getUserInfo($whereParams)[0];
  }

  static private function getUserInfoById($id)
  {
    $whereParams = Array('id'=>$id);
    return self::getUserInfo($whereParams)[0];
  }

  static private function getUserInfo($whereParams)
  {
    return parent::codeAnt()->db->select('user', '', $whereParams);
  }

}
?>
