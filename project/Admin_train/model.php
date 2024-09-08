<?php

class model
{
	public $conn="";
	function __construct()
	{						//hostname,username,pass,database name 
		$this->conn=new Mysqli('localhost','root','','food_train');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
        
		$run=$this->conn->query($sel);  // query run on db

		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}

	function insert($tbl,$arr)
	{
		$column_arr=array_keys($arr);
		$column=implode(",",$column_arr);
		
		$values_arr=array_values($arr);
		$values=implode("','",$values_arr); 
		
	echo	$sel="insert into $tbl ($column) value ('$values')";  // query
		$run=$this->conn->query($sel);  // query run on db
		return $run;
	}


	
}
$obj=new model

?>