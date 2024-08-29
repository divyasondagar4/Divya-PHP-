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

                case '/order':
                    include_once('order.php');
                    break;

                    case '/about':
                        include_once('about.php');
                        break;

                        case '/contact':
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