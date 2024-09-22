
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

//-----------------------------------------------------------login--------------------------------------------------------------
            case '/admin':
                if (isset($_REQUEST['login'])) {
                    $admin_email = $_REQUEST['admin_email'];
                    $admin_p = $_REQUEST['admin_password'];
                    $admin_password = md5($_REQUEST['admin_password']); // password encrypt

                    $where = array("admin_email" => $admin_email, "admin_password" => $admin_password);

                    $res = $this->select_where('admin', $where);
                    $ans = $res->num_rows;  // row wise check condtion 
                    if ($ans == 1) // 1 means true
                    {

                        if (isset($_REQUEST['arem'])) {
                            setcookie('admin_email', $admin_email, time() + (24 * 60 * 60));
                            setcookie('admin_password', $admin_p, time() + (24 * 60 * 60));
                        }
                        $fetch = $res->fetch_object();


                        //create_session
                        $_SESSION['admin'] = $fetch->admin_email;
                        $_SESSION['admin_id'] = $fetch->admin_id;
                        echo "<script>
							alert('Login Success');
							window.location='index';
						</script>";
                    } else {
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
                unset($_SESSION['admin_id']);
                echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
                break;



//----------------------------------------------------profile-------------------------------------------------------------

            case '/admin_profile':
                $where = array("admin_id" => $_SESSION['admin']);
                $where = array("admin_email" => $_SESSION['admin']);
                $res = $this->select_where('admin', $where);
                $fetch = $res->fetch_object();
                include_once('admin_profile.php');
                break;
            case '/index':

                include_once('index.php');
                break;
//-----------------------------------------------------manage-----------------------------------------------------------------
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


//---------------------------------------------------------------add------------------------------------------------------
                case '/add_employee':
                    if (isset($_REQUEST['submit'])) {
                        $name = $_REQUEST['name'];
                        $email = $_REQUEST['email'];
                        $password = md5($_REQUEST['password']);
                        $status = $_REQUEST['status'];
    
                        $image=$_FILES['image']['name'];
					
    
                        $data = array("name" => $name, "email" => $email, "password" => $password, "status" => $status,"image" => $image);
    
                        $res = $this->insert('employee', $data);
                        if ($res) {
                            $path="/assets/img/restaurant/".$image;
						$tmp_image=$_FILES['image']['tmp_name'];
						move_uploaded_file($tmp_image,$path);
    
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
                        $restaurant_id = $_REQUEST['restaurant_id'];
                        $name = $_REQUEST['name'];
                        $description = $_REQUEST['description'];
                        $price = $_REQUEST['price'];
                        $image = $_FILES['image']['name'];
    
                        $data = array("restaurant_id" => $restaurant_id, "name" => $name, "description" => $description, "price" => $price, "image" => $image);
    
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
    
    
                            $path = "assets/img/restaurant/" . $image;
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
    
// ---------------------------------------------------------delete--------------------------------------------------------------
            case '/delete':

                if (isset($_REQUEST['del_user'])) {
                    $id = $_REQUEST['del_user'];
                    $where = array("id" => $id);
                    $res = $this->delete_where('customer', $where);
                    if ($res) {
                        echo "<script>
                                alert('User Data Delete Success');
                                window.location='manage_customer';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_shop'])) {
                    $id = $_REQUEST['del_shop'];
                    $where = array("restaurant_id" => $id);

                    // img delete
                    // $res_fetch=$this->select_where('restaurant',$where);
                    // $fetch=$res_fetch->fetch_object();
                    // $img=$fetch->img;


                    $res = $this->delete_where('restaurant', $where);
                    if ($res) {
                        // unlink('assets/img/restuarant/'.$img); // image delete from folder 
                        echo "<script>
                                alert('Restaurant Data Delete Success');
                                window.location='manage_Restaurant';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_emp'])) {
                    $id = $_REQUEST['del_emp'];
                    $where = array("employee_id" => $id);




                    $res = $this->delete_where('employee', $where);
                    if ($res) {
                        echo "<script>
                                alert('employee Data Delete Success');
                                window.location='manage_employee';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_food'])) {
                    $id = $_REQUEST['del_food'];
                    $where = array("food_id" => $id);

                    // img delete
                    // $res_fetch=$this->select_where('food',$where);
                    // $fetch=$res_fetch->fetch_object();
                    // $img=$fetch->img;


                    $res = $this->delete_where('food', $where);
                    if ($res) {
                        // unlink('assets/img/restuarant/'.$img); // image delete from folder 
                        echo "<script>
                                alert('food Data Delete Success');
                                window.location='manage_food';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_order'])) {
                    $id = $_REQUEST['del_order'];
                    $where = array("order_id" => $id);




                    $res = $this->delete_where('order_details', $where);
                    if ($res) {
                        echo "<script>
                                alert('order Data Delete Success');
                                window.location='manage_order';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_feedback'])) {
                    $id = $_REQUEST['del_feedback'];
                    $where = array("feedback_id" => $id);




                    $res = $this->delete_where('feedback', $where);
                    if ($res) {
                        echo "<script>
                                alert('feedback Data Delete Success');
                                window.location='manage_feedback';
                            </script>";
                    }
                }
                if (isset($_REQUEST['del_contact'])) {
                    $id = $_REQUEST['del_contact'];
                    $where = array("inquiry_id" => $id);




                    $res = $this->delete_where('inquiries', $where);
                    if ($res) {
                        echo "<script>
                                alert('contact Data Delete Success');
                                window.location='manage_contact';
                            </script>";
                    }
                }

                if (isset($_REQUEST['del_city'])) {
                    $id = $_REQUEST['del_city'];
                    $where = array("city_id" => $id);




                    $res = $this->delete_where('city', $where);
                    if ($res) {
                        echo "<script>
                                alert('city Data Delete Success');
                                window.location='manage_city';
                            </script>";
                    }
                }
                if (isset($_REQUEST['del_cart'])) {
                    $id = $_REQUEST['del_cart'];
                    $where = array("cart_id" => $id);




                    $res = $this->delete_where('cart', $where);
                    if ($res) {
                        echo "<script>
                                alert('cart Data Delete Success');
                                window.location='manage_cart';
                            </script>";
                    }
                }

                break;
                // ---------------------------------------delete end---------------------------------------------------------

// ---------------------------------------------------  edit button code---------------------------------------------
case '/edit_restaurant':
    $loca_arr=$this->select("city");
    if(isset($_REQUEST['restaurant_id']))
    {
        $restaurant_id=$_REQUEST['restaurant_id'];
       
        $where=array("restaurant_id"=>$restaurant_id);
        $res=$this->select_where('restaurant',$where);
        $fetch=$res->fetch_object();
    }
  
    include_once('edit_restaurant.php');
break;
//-----------------------------------------------------edit end-------------------------------------------------------

                 }
    }
}


$obj = new control
?>