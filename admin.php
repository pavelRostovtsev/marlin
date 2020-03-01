<?
  if($_COOKIE['login'] == '') {
    header('Location: /authorization.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?
	$website_title = 'Магазин';
	require_once 'blocks/head.php';
	?>
</head>
<body>
	<?
		require_once 'blocks/header.php';
	?>

	    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header">Добавить товар</div>

                            <div class="card-body">
                                <form  action="form-processing/addProduct.php" method="post" >

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Название товара</label>

                                        <div class="col-md-6">
                                            <input type="text"  name="name" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  for="category" class="col-md-4 col-form-label text-md-right">Категория товара</label>

                                        <div class="col-md-6" name="category">
											<select name="category" required >
												<option value="Еда">Еда</option>
												<option value="Информация">Информация</option>
												<option value="Кино">Кино</option>
											</select>
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label text-md-right">Описание товара</label>

                                        <div class="col-md-6">
                                            <input type="text"  name="description" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="img" class="col-md-4 col-form-label text-md-right">Добавить изображение с товаром</label>

                                        <div class="col-md-6">
                                            <input type="file"  name="img" class="form-control" required>
                                        </div>
                                    </div>                                    

                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-success">
                                                Добавить товар 
                                            </button>


								    </form>
                                	<form  action="form-processing/exit.php" method="post" class="my-5" >
                                	    <button class='btn btn-danger'>
                                        	Выйти из панели администратора
                                        </button>	
                                	</form>								    
                                            
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

