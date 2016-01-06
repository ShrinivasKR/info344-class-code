Hey this is some content above the code
<?php
//declare a variable and assign a name
$name = 'Shrinivas';
$fullName = $name . 'Ramanath';

//Can create class
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

//Single quotes sends the string literally, isn't interpreted, while double strings are interpreted
//Curly braces allow you to explicitly state what part is the variable
echo "Hello {$name}s\n";
//Can also pass NULL
foo('bar');
?>
And this is some content below