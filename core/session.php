<?php
namespace griselangue\core;

class session
{
    private $_login,
        $_password;

    public function __construct ($login, $password)
    {
        	$this->setLogin($login);
		$this->setPassword($password);
    }

    public function setLogin($login)
    {
        $this->_login = htmlspecialchars($login);
    }

    public function setPassword($password)
    {
        $this->_password = htmlspecialchars($password);
    }

    public function destroy()
    {
        session_destroy();
    } 

    public function setSession()
    {
        $_SESSION['login'] = $this->login();
        $_SESSION['password'] = $this->password();
    }

    public function login()
    {
	    return $this->_login;
    }

    public function password()
    {
	    return $this->_password;
    }
}

?>
