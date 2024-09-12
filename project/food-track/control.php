<?php



include_once('model.php'); // 1 step load model page 


class control extends model // 2 step extend model 
{

    function __construct()
    {

        model::__construct(); // 3 call model contruct so database connectivity

        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/index':
              
                include_once('index.php');
                break;

            case '/order':
                if (isset($_REQUEST['submit'])) {

                    $order_date = $_REQUEST['order_date'];
                    $train_no = $_REQUEST['train_no'];
              
                    $data = array(
                        "order_date" => $order_date,
                        "train_no" => $train_no,
                       
                    );

                    $res = $this->insert('order_details', $data);
                    if ($res) {

                        echo "<script>
							alert('Submit Success');
							window.location='order';
						</script>";
                    }
                }
                if (isset($_REQUEST['send'])) {

                    $pnr_no = $_REQUEST['pnr_no'];
                   
                    $data = array(
                        "pnr_no" => $pnr_no,
                       
                    );

                    $res = $this->insert('order_details', $data);
                    if ($res) {

                        echo "<script>
							alert('Submit Success');
							window.location='order';
						</script>";
                    }
                }
                include_once('order.php');
                break;

            case '/about':
                include_once('about.php');
                break;

            case '/contact':
                if (isset($_REQUEST['submit'])) {

                    $Name = $_REQUEST['Name'];
                    $Email = $_REQUEST['Email'];
                    $Comment = $_REQUEST['Comment'];
                    $complaint = $_REQUEST['complaint'];


                    $data = array(
                        "Name" => $Name,
                        "Email" => $Email,
                        "Comment" => $Comment,
                        "complaint" => $complaint
                    );

                    $res = $this->insert('inquiries', $data);
                    if ($res) {

                        echo "<script>
							alert('Submit Success');
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
                        $password=md5($_REQUEST['password']); // pass encrypt
                        
                        $where=array("email"=>$email,"password"=>$password);
                        
                        $res=$this->select_where('customer',$where);
                        $ans=$res->num_rows;  // row wise check condtion 
                        if($ans==1) // 1 means true
                        {
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
                        $res=$this->insert('customer',$data);
    
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
    
            case '/restaurants':
                include_once('restaurants.php');
                break;

            case '/booking':
                include_once('booking.php');
                break;

            case '/foodmenu':
                include_once('foodmenu.php');
                break;
            case '/station':
                include_once('station.php');
                break;
            case '/cart':
                include_once('cart.php');
                break;

            case '/header.php':
                include_once('header.php');
                break;
        }
    }
}


$obj = new control;
