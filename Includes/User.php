<?php
class User {
    public $name;
    public $email;

    public function __construct($nameInput, $emailInput) {
        $this->name = $nameInput;
        $this->email = $emailInput;
    }
}
?>