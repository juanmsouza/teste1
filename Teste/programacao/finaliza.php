<?PHP
@session_unset();
@session_destroy();
@setcookie('Nome_usuario');
@setcookie('Login');
@setcookie('Senha');
Header("Location: ./login.php");
?>