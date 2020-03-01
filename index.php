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
	<!-- карусель -->
<div class="container">
	<div class="row">
		<h1 class="mx-auto my-3 ">Список товаров</h1>
	</div>
</div>

<? 
	require 'libs/db.php';

	$sql = 'SELECT * FROM `goods`  ORDER BY id DESC';
	$check = $connection->prepare($sql);
	$check->execute();
?>


<div class="content cover-container my-4">
	<? 
	foreach ($check->fetchAll(PDO::FETCH_OBJ) as $product) { ?>
	
		<div>
		<div class="card mx-4" style="width: 18rem;">
  		<img src="https://cdn.website-editor.net/0cc9dba1223c460cb846a6d67186a41b/dms3rep/multi/mobile/human-1211467_1280.png" class="card-img-top" alt="...">
  		<div class="card-body">
    	<h5 class="card-title"><?=$product->name?></h5>
    	<p class="card-text"><?=$product->category?></p>
    	<p class="card-text"><?=$product->description?></p>
    	<a href="#" class="btn btn-primary">Переход куда-нибудь</a>
  		</div>
		</div>	
	</div>
<?}?>
	</div>	
	</div>
</div>
</body>
</html>

