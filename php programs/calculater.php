<html>
<head>
<title></title>
</head>
<style>
   p{
    text-align: center;

    }
</style>
<body>
<form action="" method="post" enctype="multipart/form-data">
	
	<p>

    <p>Enter Hindi marks: <input type="number" name="num1" required /></p>
    <p>Enter science marks: <input type="number" name="num2" required /></p>
    <p>Enter maths marks: <input type="number" name="num3" required /></p>
    <p>Enter history marks: <input type="number" name="num4" required /></p>
    <p>Enter geo marks: <input type="number" name="num5" required /></p>

    <input type="submit"name="total" value="submit"/>

</form>
</body>
</html>
<?php
if(isset($_REQUEST['total']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];

	echo "Your total : ".$total=$num1+$num2+$num3+$num4+$num5;
}
if(isset($_REQUEST['total']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];

	echo "<br> Your percentage is : " .
 $total = ($total / 500.0) * 100;
    
}
if(isset($_REQUEST['total']))
{
	$num1=$_REQUEST['num1'];
	$num2=$_REQUEST['num2'];
    $num3=$_REQUEST['num3'];
    $num4=$_REQUEST['num4'];
    $num5=$_REQUEST['num5'];

    if ($total >= 90) 
    {
        $grade = "A+";
    } 
    elseif ($total >= 90 )
     {
        $grade = "A";
    }
     elseif ($total >= 80 && $total < 90) 
     {
        $grade = "B+";
    } 
    elseif ($total >= 70 && $total < 80)
     {
        $grade = "B";
    }
        elseif ($total >= 70 && $total < 60) 
        {
            $grade = "C";
        }
        elseif ($total >= 60 && $total < 50) 
        {
            $grade = "D";
        }
     else {
        $grade = "fail ";
    }

	echo "<br> Your grade is : ". $grade;
 
    
    
}
?>