<?php
//echo "Today is " . date("l,F j,Y. ") . "<br>";

//create databse connection
//$servername="localhost";
//$username="root";
//$password="1234";
//$dbname="kamz";

//$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
//if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";



class MyClass {
    public function heading() {
        echo "Welcome to BBIT DevOps!";
    }
    public function MyMethod() {
        echo "<p>This is a new Semester.</p>";
    }
    public function footer () {
        echo "<footer> Contact us at <a href='mailto:info@bbit.edu'>info@bbit.edu</a></footer>";
    }
}

//create an instance of MyClass
$instance = new MyClass();

//call the method MyMethod 
$instance->heading();
$instance->MyMethod();
$instance->footer();
?>