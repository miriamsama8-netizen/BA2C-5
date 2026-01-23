<?php

// Prototype Class
class StudentProfile {
    public $name;
    public $class;
    public $age;

    public function __clone() {
        // Optional: customize behavior during cloning
    }
}

// Original object
$originalStudent = new StudentProfile();
$originalStudent->name = "Alice";
$originalStudent->class = "Form 5";
$originalStudent->age = 16;

// Clone object
$clonedStudent = clone $originalStudent;
$clonedStudent->name = "Brenda"; // Modify only what is needed

echo "Original: " . $originalStudent->name . "\n";
echo "Clone: " . $clonedStudent->name . "\n";

?>
