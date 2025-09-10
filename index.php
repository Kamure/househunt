<?php
require_once 'classes.php';//making all the code in classes.phop avalable.
require_once 'forms.php';//making all the code in forms.phop avalable.

//create an instance of MyClass
$instance = new MyClass();

//create an instance of user_forms
$formInstance = new user_forms();

//call the method MyMethod 
$instance->heading();
$instance->MyMethod();

//call the method signup_form
$formInstance->signup_form();
$instance->footer();
