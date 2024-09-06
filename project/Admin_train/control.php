
<?php

include_once('model.php'); // 1 step load model page 

 
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

                case '/manage_cart':
                    $cart_arr=$this->select('cart');
                    include_once('manage_cart.php');
                    break;
    


                    case '/manage_city':
                        $city_arr=$this->select('city');
                        include_once('manage_city.php');
                        break;
    
                        case '/manage_contact':
                            $inquiries_arr=$this->select('inquiries');

                            include_once('manage_contact.php');
                            break;
    
                            case '/manage_employee':
                                $employee_arr=$this->select('employee');
                                include_once('manage_employee.php');
                                break;
    
                                case '/manage_customer':
                                    $customer_arr=$this->select('customer');
                                    include_once('manage_customer.php');
                                    break;
    

                                       case '/manage_feedback':
                                        $feedback_arr=$this->select('feedback');
                                            include_once('manage_feedback.php');
                                            break;
    
                                            case '/manage_food':
                                                $food_arr=$this->select('food');

                                                include_once('manage_food.php');
                                                break;
    
                                                case '/manage_order':
                                                    $order_details_arr=$this->select('order_details');
                                                    include_once('manage_order.php');
                                                    break;

                                                    case '/manage_Restaurant':
                                                        $restaurant_arr=$this->select('restaurant');

                                                        include_once('manage_Restaurant.php');
                                                        break;
                                    
                                                        case '/add_employee':
                                                            include_once('add_employee.php');
                                                            break;
                                    
                                                            case '/add_food.php':
                                                                include_once('add_food.php');
                                                                break;
                                    
                                                                case '/add_Restaurant':
                                                                    include_once('add_Restaurant.php');
                                                                    break;
                                                    
                                    
                                                                }
                                                            }
            }
        
   
$obj=new control
?>