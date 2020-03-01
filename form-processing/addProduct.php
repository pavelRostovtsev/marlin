<?
require_once'../libs/db.php';
$errors = [];

// Показываю пример своей валидации
if (isset($_POST['name']) and isset($_POST['category']) and isset($_POST['description']) and isset($_POST['img'])) {

	$name = trim(htmlspecialchars($_POST['name']));
	$category = trim(htmlspecialchars($_POST['category']));
	$description = trim(htmlspecialchars($_POST['description']));
	$img = trim(htmlspecialchars($_POST['img']));

//не заморачиваться с проверкой
	if($name==""){
	 	$errors[]="Введите ваше имя!";
	}

	if (empty($errors)){
	
	$sql = 'INSERT INTO `goods` (`name`,`category`, `description`) VALUES(?, ?, ?)';
  	$query = $connection->prepare($sql);
	$query->bindParam(1, $name, PDO::PARAM_STR);
	$query->bindParam(2, $category, PDO::PARAM_STR);
	$query->bindParam(3, $description, PDO::PARAM_STR);
	$query->execute();
	
	echo "Готово";
	
	}else{
	echo array_shift($errors);
	} 
}