<?php 
Class Post{
	public function __construct(){
		require 'Model/PostModel.php';
		$PostModel = new PostModel();
		$typecar = $PostModel->getTypes();
		$colorcar = $PostModel->getColor();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$iduser = $_SESSION['user']['id'];
			$title = $_POST['title'];
			$color = $_POST['color'];
			$price = $_POST['price'];
			$type = $_POST['type'];
			$city = $_POST['city'];
			$img = $_FILES['img']['name'];
			$descript = $_POST['descript'];
			$address = $_POST['address'];
			if (file_exists("..\..\Public\client\img".basename($img))) 
				$PostModel->Post($type, $color, $title, $price, $city, $address, $descript, $img,$iduser);
			else if(move_uploaded_file($_FILES["img"]["tmp_name"], "'..\..\Public\client\img\'".basename($img)))
				$PostModel->Post($type, $color, $title, $price, $city, $address, $descript, $img,$iduser);
		}
		require 'View/client/pages/post.php';

	}
}
?>