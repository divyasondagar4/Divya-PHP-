<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

class model 
{
	public $conn="";
	function __construct()
	{						//hostname,username,pass,database name 
		$this->conn=new mysqli('localhost','root','','railfood');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // query run on data base
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	function insert($tbl, $arr)
	{
		$column_arr=array_keys($arr);
		$column=implode(",",$column_arr);
		
		$values_arr=array_values($arr);
		$values=implode("','",$values_arr);

		 $sel="insert into $tbl ($column) value ('$values')"; // Query
		$run=$this->conn->query($sel); //Query Run on Data Base
		return $run;

	}
	function select_where($tbl,$arr)
	{
		$column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$sel="select * from $tbl where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($arr as $w)
		{
			 $sel.=" and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run on db
		return $run;
	}

	function update($tbl,$arr,$where)
	{
		$column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$upd="update $tbl set ";
		$j=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count==$j+1)
			{
				$upd.= "$column_arr[$j]='$values_arr[$j]'";
			}
			else
			{
				$upd.= "$column_arr[$j]='$values_arr[$j]',";
				$j++;
			}
		}
		$wcolumn_arr=array_keys($where);
		$wvalues_arr=array_values($where);
		$upd.=" where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($where as $w)
		{
			echo $upd.=" and $wcolumn_arr[$i]='$wvalues_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);  // query run on db
		return $run;
	}
	function select_join4($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3)
	{
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3";  // 1=1 means query continue
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_orderby($tbl1,$col)
	{
		$sel="select * from $tbl1 order by $col";  // 1=1 means query continue
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	function selectSerach($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$col,$value)
	{
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where $col LIKE '%$value%' ; ";  // query
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}

	
}
$obj=new model;

?>