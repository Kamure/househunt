<?php
class Forms {

    private function submit_button($value) {
        echo "<input type='submit' value='$value' style='padding:8px 16px; background-color:#2e6c80; color:white; border:none; border-radius:4px; cursor:pointer;'>";
    }

    public function signup() {
        ?>
        <h2>Create Your Househunt Account</h2>
        <form action='signup.php' method='post'>
            <label for="name">Name:</label><br>
            <input type='text' id='name' name='name' required><br><br>

            <label for="email">Email:</label><br>
            <input type='email' id='email' name='email' required><br><br>

            <label for="password">Password:</label><br>
            <input type='password' id='password' name='password' required><br><br>

            <?php $this->submit_button('Create Account'); ?>
            <br><br>
            <a href='login.php'>Already registered? Log in to Househunt</a>
        </form><br>
        <?php
    }

    public function login() {
        ?>
        <h2>Access Your Househunt Dashboard</h2>
        <form action='submit_login.php' method='post'>
            <label for="username">Username:</label><br>
            <input type='text' id='username' name='username' required><br><br>

            <label for="password">Password:</label><br>
            <input type='password' id='password' name='password' required><br><br>

            <?php $this->submit_button('Log In'); ?>
            <br><br>
            <a href='index.php'>New here? Create your Househunt account</a>
        </form><br>
        <?php
    }
}
?>