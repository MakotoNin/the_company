<?php

    include "../classes/User.php";

    # Create an object
    $user = new User;

    # Call the store function
    $user->login($_POST);
   

?>