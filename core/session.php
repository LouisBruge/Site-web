<?php
namespace griselangue\Login;

class session
{
    private $_login,
        $_password;

    public function __construct ()
    {
        $this->setLogin($login);
        $this->setPassword($password);
    }

    private function setLogin($login)
    {
        $this->_login = htmlspecialchars($login);
    }

    private function setPassword($password)
    {
        $this->_password = htmlspecialchars($password);
    }

    private function setSession()
    {
        $_SESSION['login'] = $this->_login;
        $_SESSION['password'] = $this->_password;
    }


    public function destroy()
    {
        session_destroy();
    } 
}

?>
