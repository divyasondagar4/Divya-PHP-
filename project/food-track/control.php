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
