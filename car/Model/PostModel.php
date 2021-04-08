<?php  
	class PostModel extends Database
	{
		protected $db;
		function __construct()
		{
			$this->db = new Database();
			$this->db->connect();
		}
		public function Post($type, $color, $title, $price, $city, $address, $descript, $img, $iduser)
		{
			$sql="INSERT INTO news(idcategory,idcolor,title,price,city,address,descript,img, iduser) values($type,$color,'$title',$price,'$city','$address','$descript','$img',$iduser)";
			$this->db->conn->query($sql);
			$sql = "UPDATE user SET coin = coin - 15000 WHERE id = $iduser ";
			$this->db->conn->query($sql);
		}
		public function getTypes()
		{
			$sql="SELECT * FROM category";
			$result = $this->db->conn->query($sql);
			while($data = $result->fetch_array()){
				$list[] = $data;
			}
			return $list;
		}
		public function getType($id)
		{
			$sql="SELECT * FROM category WHERE id = $id";
			$result = $this->db->conn->query($sql);
			return $result->fetch_array();
		}
		public function getColor()
		{
			$sql="SELECT * FROM color";
			$result = $this->db->conn->query($sql);
			while($data = $result->fetch_array()){
				$list[] = $data;
			}
			return $list;
		}
		public function all()
		{
			$sql="SELECT * FROM news";
			$result = $this->db->conn->query($sql);
			while($data = $result->fetch_array()){
				$list[] = $data;
			}
			return $list;
		}
		public function listBytype($id)
		{
			$sql="SELECT * FROM news WHERE id = $id";
			$result = $this->db->conn->query($sql);
			while($data = $result->fetch_array()){
				$list[] = $data;
			}
			return $list;
		}
		public function listByUser($id)
		{
			$sql="SELECT * FROM news WHERE id = $id";
			$result = $this->db->conn->query($sql);
			while($data = $result->fetch_array()){
				$list[] = $data;
			}
			return $list;
		}

	}
?>