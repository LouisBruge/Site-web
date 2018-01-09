<?php
namespace griselangue\core;

class session
{
    private $_login,
        $_password;

    /*
     * Constructeur
     *
     */
    public function __construct (string $login, string $password)
    {
        	$this->setLogin($login);
		$this->setPassword($password);
    }

    /*
     *
     * Setter
     *
     */
    public function setLogin(string $login)
    {
        $this->_login = htmlspecialchars($login);
    }

    public function setPassword(string $password)
    {
        $this->_password = htmlspecialchars($password);
    }

    /*
     *
     *  Getter
     *
     */
    public function login()
    {
	    return $this->_login;
    }

    public function password()
    {
	    return $this->_password;
    }
 
    /*
     *
     * Destructor
     *
     */
    public function destroy()
    {
        session_destroy();
    } 

    /*
     *
     * Initialisaton de la session PHP
     *
     */
 
    public function setSession()
    {
        $_SESSION['login'] = $this->login();
        $_SESSION['password'] = $this->password();
    }
  
}

?>
