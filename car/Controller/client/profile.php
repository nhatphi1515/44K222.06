<?php /**
 * 
 */
class Profile
{
	
	function __construct()
	{
		require 'Model/BankModel.php';
		require 'Model/UserModel.php';
		require 'Model/PostModel.php';
		$UserModel = new UserModel();
		$BankModel = new BankModel();
		$PostModel = new PostModel();
		$id = $_SESSION['user']['id'];
		$user = $UserModel->getUser($id);
		$news = $PostModel->listByUser($id);
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$seri = $_POST['seri'];
			$code = $_POST['code'];
			$checkcard = $BankModel->check($seri, $code);
			if ($checkcard->num_rows > 0) {
				$card = $checkcard->fetch_array();
				if($card['status']=='valid'){
					$BankModel->topup($card['id'],$card['price'],$id);
				}
				else echo "thẻ đã được sử dụng";
			}
			else echo "số seri hoặc mã thẻ bị sai";
		}
		require 'View/client/pages/profile.php';
	}
} ?>