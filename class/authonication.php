<?php
	include_once("config.php");
	class Authonication {
		public $userEmail;
		public $password;
	    public function setdata($email,$password) {
	    	$this->userEmail = $email;
	    	$this->password = $password;
	    }
	    public function testconnection(){
	    	if ($erza->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $erza->connect_errno . ") " . $erza->connect_error;
			}
	    }
	    public function pull_db(){
	    	$sql = "INSERT INTO user (userEmail, userPassword) VALUES ('$userEmail', '$password')";
	    }
	}

?>