<?php
	

	if ( isset( $_POST['post-submit'])) {
	$title = pg_escape_string($con, $_POST['post-title']);
	$category = pg_escape_string($con, $_POST['post-category']);
	$content = pg_escape_string($con, $_POST['post-content']);
	$image = $_FILES['post-image']['name'];
	//$author = $_SESSION['username'];
	$dateTime = strftime('%Y-%m-%d',$time);
	$title_length = strlen($title);
	$content_lenght = strlen($content);
	$imageDirectory = "Upload/Image/" . basename($_FILES['post-image']['name']);
	if ( empty($title)) {
		$_SESSION['errorMessage'] = "Title Is Emtpy";
		Redirect_To('blog-add.php');
	}else if ( $title_length > 50) {
		$_SESSION['errorMessage'] = "Title Is Too Long";
		Redirect_To('blog-add.php');
	}else if ( empty($content)) {
		$_SESSION['errorMessage'] = "Content Is Empty";
		Redirect_To('blog-add.php');
	}else if ( $content_lenght > 4000) {
		$_SESSION['errorMessage'] = "Content Is Too Long";
		Redirect_To('blog-add.php');
	}else {
		$query = "INSERT INTO profile (post_date_time, title, category, image, post) 
		VALUES ('$dateTime', '$title', '$category', '$image', '$content')";
		$exec = pg_query($query);
		if ($exec) {
			move_uploaded_file($_FILES['post-image']['tmp_name'], $imageDirectory);
			$_SESSION['successMessage'] = "Post Added Successfully";
		}else {
			$_SESSION['errorMessage'] = "Something Went Wrong Please Try Again";

		}

	}
}












 ini_set('error_reporting', 'E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR');


?>