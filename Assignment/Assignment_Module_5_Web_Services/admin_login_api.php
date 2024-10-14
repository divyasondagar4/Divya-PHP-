

<?php

include_once('model.php');  


class control extends model   
{
	function __construct()
	{
		
		session_start();
		
		model::__construct();   
		
		$url=$_SERVER['PATH_INFO']; 
		
		switch($url)
		{
//-----------------------------------------------------edit end-------------------------------------------------------
//-----------------------------------------------------Api login--------------------------------------------------

case '/login_api':	
    $data_arr = json_decode(file_get_contents("php://input"), true);
    
    $admin_email = $data_arr["admin_email"];
    $admin_p = $data_arr['admin_password'];
    $admin_password = md5($data_arr['admin_password']); // password encrypt

    $where=array("admin_email"=>$admin_email,"admin_password"=>$admin_password);
    
    $res=$this->select_where('admin',$where);
    
    $fetch=$res->fetch_object();
    
    $chk=$res->num_rows;
    if($chk==1)
    {	
        
            echo json_encode(array("message" => "Login Successfully"));	
        }
       
    
    else
    {	
        echo json_encode(array("message" => "Login Failed due to wrong credencial"));	
    }
break;
                 }
    }
}
      

$obj=new control;

?>