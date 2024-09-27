<?php

include_once('model.php');
class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();
        $path=$_SERVER['PATH_INFO'];
        switch($path)
        {
            case '/index':
                include_once('index.php');
            break;
            case '/order':
                include_once('order.php');
            break;
            case '/about':
                include_once('about.php');
            break;
            case '/contact':
                if(isset($_REQUEST['submit']))
                    {
                        $Name=$_REQUEST['Name'];
                        $Email=$_REQUEST['Email'];
                        $Comment=$_REQUEST['Comment'];
                        $complaint=$_REQUEST['complaint'];

                        $data=array("Name"=>$Name,"Email"=>$Email,"Comment"=>$Comment,"complaint"=>$complaint);
                        $res=$this->insert('inquiries',$data);

                        if($res)
                        {

                        
                            echo "<script>
                            alert('Submit Suceess');
                            window.location='contact';
                            </script>";
                        }
                    }
                include_once('contact.php');
            break;
            case '/login':
                
                if(isset($_REQUEST['login']))
				{
					$email=$_REQUEST['email'];
                    $spassword=$_REQUEST['password'];
					$password=md5($_REQUEST['password']); // pass encrypt
					
					$where=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_where('customer',$where);
					$ans=$res->num_rows;  // row wise check condtion 
					if($ans==1) // 1 means true
					{
                        
						$fetch=$res->fetch_object();
						
						
						
						if($fetch->status=="unblocked")
						{
                            if(isset($_REQUEST['rem']))
							{
								setcookie('un_cookie',$email,time()+15);
								setcookie('pass_cookie',$spassword,time()+15);
							}
                            //create_session
						$_SESSION['user']=$fetch->email;
                        //create_session
							$_SESSION['customer_id']=$fetch->customer_id;
							// $_SESSION['user']=$fetch->user_name;
							
							echo "<script>
								alert('Login Success');
								window.location='index';
							</script>";
						}
						// else
						// {
						// 	echo "<script>
						// 	alert('Login Failed due to Blocked Account');
						// 	window.location='login';
						// 	</script>";
						// }
                        echo"<script>
                        alert('Login Suceess');
                        window.location='index';
                        </script>";
					}
					else
					{
                        echo"<script>
                        alert('Login Failed');
                        window.location='login';
                        </script>";
					}	
				}

              

                if(isset($_REQUEST['signup']))
                {
                    $name=$_REQUEST['name'];
                    $contact_number=$_REQUEST['contact_number'];
                    $email=$_REQUEST['email'];
                    $password=md5($_REQUEST['password']);

                    $data=array("name"=>$name,"contact_number"=>$contact_number,"email"=>$email,"password"=>$password);
                   echo $res=$this->insert('customer',$data);

                    if($res)
                    {
                        echo"<script>
                        alert('Submit Suceess');
                        window.location='login';
                        </script>";
                    }                
                }
                
                include_once('login.php');
            break;
            case '/userlogout':
				unset($_SESSION['user']);
                unset($_SESSION['customer_id']);
				echo "<script>
				alert('Logout Succes');
				window.location='login';
				</script>";
			break;
            case '/user_profile':
                $where=array("customer_id"=>$_SESSION['customer_id']);
                $res=$this->select_where('customer',$where);
                $fetch=$res->fetch_object();
                include_once('user_profile.php');
            break;
            
            case '/userprofile_edit':
				if(isset($_REQUEST['user_id']))
				{
					$customer_id=$_REQUEST['user_id'];
					$where=array("customer_id"=>$customer_id);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();

                    if(isset($_REQUEST['update']))
					{
                        $name=$_REQUEST['name'];
                        $contact_number=$_REQUEST['contact_number'];
                        $email=$_REQUEST['email'];
                        $data=array("name"=>$name,"contact_number"=>$contact_number,"email"=>$email);
                        $res=$this->update('customer',$data,$where);
                       
                    
                    
							if($res)
							{					
								echo "<script>
						      alert ('Update Success');
									window.location='user_profile';
								</script>";
							}
						
					}
                }
	
				include_once('userprofile_edit.php');
			break;
			
			
            case '/station':
                include_once('station.php');
            break;
            case '/restaurants':
                include_once('restaurants.php');
            break;
            case '/foodmenu':
                include_once('foodmenu.php');
            break;
            case '/cart':
                include_once('cart.php');
            break;
            case '/about':
                include_once('about.php');
            break;
        }
    }
}
$obj=new control;
?>