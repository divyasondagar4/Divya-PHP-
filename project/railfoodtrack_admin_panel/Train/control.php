<?php

class control
{
    function __construct()
    {
        $path=$_SERVER['PATH_INFO'];

        switch($path)
        {
               case '/index':
                include_once('index.php');
                break;

                case '/manage_cart':
                    include_once('manage_cart.php');
                    break;
    


                    case '/manage_city':
                        include_once('manage_city.php');
                        break;
    
                        case '/manage_contact':
                            include_once('manage_contact.php');
                            break;
    
                            case '/manage_emplyee':
                                include_once('manage_emplyee.php');
                                break;
    
                                case '/manage_customer':
                                    include_once('manage_customer.php');
                                    break;
    
                                    case '/manage_employee':
                                        include_once('manage_employee.php');
                                        break;
    
                                        case '/manage_feedback':
                                            include_once('manage_feedback.php');
                                            break;
    
                                            case '/manage_food':
                                                include_once('manage_food.php');
                                                break;
    
                                                case '/manage_order':
                                                    include_once('manage_order.php');
                                                    break;

                                                    case '/manage_Restaurant':
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
       
   
$obj=new control;
?>