<?php



include_once('../Admin_train/model.php'); // 1 step load model page 

 
class control extends model // 2 step extend model 
{

    function __construct()
    {
        
        model::__construct(); // 3 call model contruct so database connectivity

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
					
					
					$data=array("Name"=>$Name,"Email"=>$Email,
                    "Comment"=>$Comment,"complaint"=>$complaint,);
					
					$res=$this->insert('contact',$data);
					if($res)
					{					
						
						echo "<script>
							alert('Submit Success');
							window.location='contact';
						</script>";
					}
				}
				include_once('contact.php');
                            
                            break;

                            case '/login':
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
     
   
$obj=new control;
?>