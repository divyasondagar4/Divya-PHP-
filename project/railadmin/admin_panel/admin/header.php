<?php
function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active-menu'; //class name in css 
    } 
  }
?>

<?php
if(isset($_SESSION['admin']))
  {
   
  }	  
  else
  {
	  echo "<script>
			alert('Login First');
			window.location='admin';
		</script>";
  }
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />    
 
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><i class="fa fa-train" aria-hidden="true"></i>   Food-Track</a>
            </div>
           
    	
       
</a>
            <div style="color: black;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="admin_logout" class="btn btn-danger square-btn-adjust">Logout
    	
      	
</a><a href="admin_profile" class="btn btn-warning square-btn-adjust" style="margin:0px 10px; ">profile </a>
            </div>
        </nav>

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
                    <li class="text-center" style="color:black; background-color:white; margin:10px;">
                        <!-- <h4>Divya Sondagar </h> -->
                        
                            <?php
								echo $_SESSION['admin'];
								?>	
                    </li>

                    <li>
                        <a class="<?php active("index")?>" href="index"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa-solid fa-shop fa-3x , <?php active("Restaurant")?>" ></i>Restaurant</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_Restaurant">Add Restaurant</a>
                            </li>
                            <li>
                                <a href="manage_Restaurant">Manage Restaurant</a>
                            </li>
                        </ul> 
                    </li>
                    <li>
                       <a href="#"><i class="fa-solid fa-utensils fa-3x"></i> Food</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_food">Add Food</a>
                            </li>
                            <li>
                                <a href="manage_food">Manage Food</a>
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-first-order-alt fa-3x"></i>Order </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage_order">Manage Order</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-desktop fa-3x"></i> Employee</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_employee">Add Employee</a>
                            </li>
                            <li>
                                <a href="manage_employee">Manage Employee</a>
                            </li>
                        </ul> 
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa-solid fa-user fa-3x"></i>Customer </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage_customer">Manage Customer</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-address-book fa-3x"></i>Contact </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage_contact">Manage Contact</a>
                            </li>
                        </ul>
                    </li> 
                    <li>
                        <a href="#"><i class="fa-solid fa-cart-shopping fa-3x"></i>Cart </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage_cart">Manage Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-regular fa-comment fa-3x"></i>Feedback </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manage_feedback">Manage Feedback</a>
                            </li>
                        </ul>
                    </li> 
                 
                    <li>
                        <a href="#"><i class="fa-solid fa-city fa-3x"></i>City </a>
                        <ul class="nav nav-second-level">
                        <li>
                                <a href="add_city">Add City</a>
                            </li>
                            <li>
                                <a href="manage_city">Manage City</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>