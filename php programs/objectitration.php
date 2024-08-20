
<?php
class MyClass {
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    protected $protected = 'protected var';
    private $private = 'private var';

    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}

$class = new MyClass();

// Iterate through visible properties
foreach ($class as $key => $value) {
    print "$key => $value\n";
}

// Call custom method for visible properties
$class->iterateVisible();
?>
<?php 

class democlass {
	const PI = 3.14;
}

echo democlass::PI;

?>

<?php
class democlass
{
    const PI = 3.14;
}
echo democlass::PI;
?>