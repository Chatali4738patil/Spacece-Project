<?php
include('constants.php');

/**
 * 
 */
class Database
{
	private $con;
	public function connect(){
		$this->con = new mysqli( 'localhost', 'root', 'Csp@1312', 'libforsmall');
		return $this->con;
	}
}

?>