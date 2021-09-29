
<?php 

class Database
{
	private $host = "localhost";
	private $name = "root";
	private $pass = "";
	private $data = "demo";

	protected $conn = NULL;

	public function Connect()
	{
		$this->conn = mysqli_connect($this->host,$this->name,$this->pass,$this->data);
		if (!$this->conn) {
			echo "loi ket noi !";
		}
		else
		{
			mysqli_set_charset($this->conn,'utf8');
			//echo "ket noi thanh cong";
		}
		return $this->conn;
	}

}
 ?>