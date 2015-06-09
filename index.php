<?php
require_once'form.lib.php';
require_once'url.lib.php';
require_once'upload.lib.php';


#2logic



	#if any files are uploaded
	if($_FILES){
	$tmp = $_FILES['file']['tmp_name'][0];
	$filename = $_FILES['file']['name'][0];
	#move any files into uploads to uploads folder
	move_uploaded_file($tmp,'uploads/'.$filename);
	URL::redirect('uploads/'.$filename);
	}


	#3load views
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>upload files with php </h1>
		<?=form::open_upload()?>
	<div class="form-group">
		<?=form::label('file','File')?>
		<?=form::file()?>

</div>

	<?=form::submit()?>
	<?=form::close()?>
</body>
</html>