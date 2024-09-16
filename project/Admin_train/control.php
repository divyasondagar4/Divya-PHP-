
<?php

include_once('model.php'); // 1 step load model page 


class control extends model // 2 step extend model 
{
    function __construct()
    {

        session_start();
        model::__construct(); // 3 call model contruct so database connectivity


        $path = $_SERVER['PATH_INFO'];

        switch ($path) {


            case '/admin':
				if(isset($_REQUEST['login']))
				{
					$admin_email=$_REQUEST['admin_email'];
                    $admin_p=$_REQUEST['admin_password'];
					$admin_password=md5($_REQUEST['admin_password']); // password encrypt
					
					$where=array("admin_email"=>$admin_email,"admin_password"=>$admin_password);
					
					$res=$this->select_where('admin',$where);
					$ans=$res->num_rows;  // row wise check condtion 
					if($ans==1) // 1 means true
					{
						
						if(isset($_REQUEST['arem']))
						{
							setcookie('admin_email',$admin_email,time()+(24*60*60));
							setcookie('admin_password',$admin_p,time()+(24*60*60));
						}
						$fetch=$res->fetch_object();
						
					
						//create_session
						$_SESSION['admin']=$fetch->admin_email;
						echo "<script>
							alert('Login Success');
							window.location='index';
						</script>";
					}
					else
					{
						echo "<script>
							alert('Login Failed');
							window.location='admin';
						</script>";
					}
					
					
				}
				include_once('login.php');
			break;
			case '/admin_logout':
				unset($_SESSION['admin']);
				echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
			break;
            
            // case '/admin':
            //     if (isset($_REQUEST['login'])) {
            //         $admin_email=$_REQUEST['admin_email'];
            //         $admin_password=md5($_REQUEST['admin_password']); // pass encrypt
            //         $where = array("admin_email"=>$admin_email,"admin_password"=>$admin_password);
            //         $res = $this->select_where('admin',$where);
            //         $ans = $res->num_rows;  // row wise check condtion 
            //         if ($ans == 1) // 1 means true
            //         {
            //            echo "<script>
            //            alert('Login succes');
            //            window.location='/Admin_train/index';
            //            </script>";
            //         } else {
            //             echo "<script>
            //            alert('Login Failed');
            //            window.location='/admin';
            //            </script>";
            //         }
            //     }
            //     include_once('login.php');
            //     break;

            case '/index':
                include_once('index.php');
                break;

            case '/manage_cart':
                $cart_arr = $this->select('cart');
                include_once('manage_cart.php');
                break;



            case '/manage_city':
                $city_arr = $this->select('city');
                include_once('manage_city.php');
                break;

            case '/manage_contact':
                $inquiries_arr = $this->select('inquiries');

                include_once('manage_contact.php');
                break;

            case '/manage_employee':
                $employee_arr = $this->select('employee');
                include_once('manage_employee.php');
                break;

            case '/manage_customer':
                $customer_arr = $this->select('customer');
                include_once('manage_customer.php');
                break;


            case '/manage_feedback':
                $feedback_arr = $this->select('feedback');
                include_once('manage_feedback.php');
                break;

            case '/manage_food':
                $food_arr = $this->select('food');

                include_once('manage_food.php');
                break;

            case '/manage_order':
                $order_details_arr = $this->select('order_details');
                include_once('manage_order.php');
                break;

            case '/manage_Restaurant':

                $restaurant_arr = $this->select('restaurant');

                include_once('manage_Restaurant.php');
                break;

            case '/add_employee':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password=md5($_REQUEST['password']);
                        $status = $_REQUEST['status'];



                    $data = array("name" => $name, "email" => $email, "password" => $password, "status" => $status);

                    $res = $this->insert('employee', $data);
                    if ($res) {

                        echo "<script>
							alert('Data Add Success');
							window.location='add_employee';
						</script>";
                    }
                }
                

                include_once('add_employee.php');
                break;


            case '/add_food':
                $restaurant_arr = $this->select("restaurant");
                if (isset($_REQUEST['submit'])) {
                    $restaurant_id=$_REQUEST['restaurant_id'];
                    $name = $_REQUEST['name'];
                    $description = $_REQUEST['description'];
                    $price = $_REQUEST['price'];
                    $image= $_FILES['image']['name'];

                    $data = array("restaurant_id" => $restaurant_id,"name" => $name, "description" => $description, "price" => $price, "image" => $image);

                    $res = $this->insert('food', $data);
                    if ($res) {
                        // $path = "assets/img/restuarant" . $img;
                        // $tmp_image = $_FILES['image']['tmp_name'];
                        // move_uploaded_file($tmp_image, $path);


                        echo "<script>
                        alert('Data Add Success');
                           window.location='add_food';
                           </script>";
                    }
                }

                include_once('add_food.php');
                break;

            case '/add_Restaurant':
                $loca_arr = $this->select("city");
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $address = $_REQUEST['address'];
                    $image = $_FILES['image']['name'];
                    $city_id = $_REQUEST['city_id'];
                    $Google_Profile = $_REQUEST['Google_Profile'];



                    $data = array("name" => $name, "address" => $address, "image" => $image, "city_id" => $city_id, "Google_Profile" => $Google_Profile);

                    $res = $this->insert('restaurant', $data);
                    if ($res) {

                      
                        $path = "assets/img/restaurant" . $image;
                        $tmp_image = $_FILES['image']['tmp_name'];
                        move_uploaded_file($tmp_image, $path);

                        echo "<script>
							alert('Data Add Success');
							window.location='add_Restaurant';
						</script>";
                    }
                }
                include_once('add_Restaurant.php');
                break;
        }
    }
}


$obj = new control
?>