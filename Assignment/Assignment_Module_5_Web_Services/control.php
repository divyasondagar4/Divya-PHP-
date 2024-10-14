
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
			case '/inquiry_get':	
				$res=$this->select('inquiries');
				if($res)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Inquiry Found.", "status" => false));
				}
			break;
			
			case '/inquiry_single_get':	
				
				$id = $_GET['id'];
				$where=array("inquiry_id"=>$id);
				$chk=$this->select_where('inquiries',$where);
				$res=$chk->fetch_object();
				if($res)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Inquiry Found.", "status" => false));
				}
			break;
			
			case '/inquiry_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$Name = $data_arr["Name"]; 
				$Email = $data_arr["Email"];
				$Comment = $data_arr["Comment"];
				$complaint = $data_arr["complaint"];
				
				$arr=array("Name"=>$Name,"Email"=>$Email,"Comment"=>$Comment,"complaint"=>$complaint);
				
				$res=$this->insert('inquiries',$arr);
				if($res)
				{
					echo json_encode(array("message" => "Inquiry Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Failed Inquiry Not Inserted ", "status" => false));	
				}
			break;
			
			case '/inquiry_delete':	
				$id = $_GET['id'];
				$where=array("inquiry_id"=>$id);
				$res=$this->delete('inquiries',$where);
				if($res)
				{	
					echo json_encode(array("message" => "Inquiry Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Inquiry Not Deleted", "status" => false));	
				}
			break;
			
			case '/inquiry_patch':	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $_GET["id"];
				$Name = $data_arr["Name"]; 
				$Email = $data_arr["Email"];
				$Comment = $data_arr["Comment"];
				$complaint = $data_arr["complaint"];
				
				$arr=array("Name"=>$Name,"Email"=>$Email,"Comment"=>$Comment,"complaint"=>$complaint);
				$where=array("inquiry_id"=>$id);
				
				$res=$this->update_where('inquiries',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Inquiry Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Inquiry Not Update", "status" => false));	
				}
			break;
			
			
			case '/login_customer':	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$email = $data_arr["email"];
				$password = $data_arr["password"];
				$enr_password =md5( $data_arr["password"]);
				
				$where=array("email"=>$email,"password"=>$enr_password);
				
				$res=$this->select_where('customer',$where);
				
				$fetch=$res->fetch_object();
				
				$chk=$res->num_rows;
				if($chk==1)
				{	
					if($fetch->status=="Unblock")
					{
						echo json_encode(array("message" => "Login Successfully", "status" => true));	
					}
					else
					{
						echo json_encode(array("message" => "Login Failed due Blocked Account", "status" => false));	
					}
				}
				else
				{	
					echo json_encode(array("message" => "Login Failed due to Wrong Credentials", "status" => false));	
				}
			break;
			
			
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>