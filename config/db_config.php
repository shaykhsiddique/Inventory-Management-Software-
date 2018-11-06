<!-- ratul motors batabase configuration -->

<?php
define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "ratulmotors_db");
?>



<?php
Class Database{
	public $host   = DB_HOST;
	public $user   = DB_USER;
	public $pass   = DB_PASS;
	public $dbname = DB_NAME;
	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
 }
	
	// Select or Read data
	
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	}
	
	// Insert data
	public function insert($query){
	$result = $this->link->query($query) or die($this->link->error.__LINE__);
	if($result){
		//header("Location: /index.php?msg=".urlencode('Data Inserted successfully.'));
		// return true;
		exit();
	} else {
		// return false;
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  
    // Update data
  	public function update($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
		//header("Location: /index.php?msg=".urlencode('Data Updated successfully.'));
		exit();
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  public function update_rec($query){
	$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($update_row){
		header("Location: /index.php?msg=".urlencode('Data Updated successfully.'));
		exit();
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  
  // Delete data
   public function delete($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
		//header("Location: /index.php?msg=".urlencode('Data Deleted successfully.'));
		exit();
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }
  public function delete_rec($query){
	$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($delete_row){
		header("Location: /index.php?msg=".urlencode('Data Deleted successfully.'));
		exit();
	} else {
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }

  //insert for search_product 
  public function insert_src($query){
	$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
	if($insert_row){
		header("Location: /index.php?msg=".urlencode('Data Inserted successfully.'));
		// return true;
		exit();
	} else {
		// return false;
		die("Error :(".$this->link->errno.")".$this->link->error);
	}
  }

 
 
}
