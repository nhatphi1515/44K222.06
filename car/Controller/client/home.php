<?php /**
 * 
 */
class Home
{
	
	function __construct()
	{
		require 'Model/PostModel.php';
		$PostModel = new PostModel();
		$news =  $PostModel->all();
		if (isset($_GET['type'])) {
			$id = $_GET['type'];	
			$news =  $PostModel->listByType($id);
			$type =  $PostModel->getType($id);
			$color =  $PostModel->getColor();
		}
		require 'View/client/pages/home.php';
	}
} ?>