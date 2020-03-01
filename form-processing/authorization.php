<?
ob_start();
require_once'../libs/db.php';

$login = trim(htmlspecialchars($_POST['login']));
$password = trim(htmlspecialchars($_POST['password']));

$error = '';
if(strlen($login) <= 3)
$error = 'Введите логин';
else if(strlen($password) <= 3)
$error = 'Введите пароль';

if($error != '') {
echo $error;
exit();
}

$sql_loginCheck = 'SELECT `id` FROM `users` WHERE `login` = ? && `password` = ?';
$loginCheck = $connection->prepare($sql_loginCheck);
$loginCheck->bindParam(1, $login, PDO::PARAM_STR);
$loginCheck->bindParam(2, $password, PDO::PARAM_STR);
$loginCheck->execute();

$user = $loginCheck->fetch(PDO::FETCH_OBJ);
 if($user->id == 0)
   echo 'Такого пользователя не существует';
 else {
   setcookie('login', $login, time() + 3600 * 24 * 30, "/");
   echo 'Готово';
   header('Location: /admin.php');
   ob_end_flush();
  }



