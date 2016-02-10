Hey this is some content above the code
<?php
<<<<<<< HEAD
//declare a variable and assign a name
$name = 'Shrinivas';
$fullName = $name . 'Ramanath';

//Can create class
=======
$name = 'Dave';
$fullName = $name . 'Stearns';

>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
class Person {
    protected $name;
    
    public function __construct($n) {
        $this->name = $n;
    }
    
    public function getName() {
        return $this->name;
    }
}

function foo($bar) {
    echo "Hey this is the foo fighting function\n";
}

<<<<<<< HEAD
//Single quotes sends the string literally, isn't interpreted, while double strings are interpreted
//Curly braces allow you to explicitly state what part is the variable
echo "Hello {$name}s\n";
//Can also pass NULL
foo('bar');
?>
And this is some content below
=======
echo "Hello {$name}s\n";
foo(NULL);
?>
And this is some content below
>>>>>>> dd127347d12c8bb16a0f6d7fa4d2cd6133701c08
