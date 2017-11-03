<?php 
class Connection{
	public static function make(){
		try{
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','12345678');
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}