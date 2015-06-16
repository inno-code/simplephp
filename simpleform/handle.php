
<?php 

    // Below catches the posted form data with ['name'] attribute
    echo $_POST["name"]; 

    echo "</br>";

    // Below gets the email value from the form.
    echo $_POST["email"]; 

    echo "</br>";

    // Prints every element from the form.
    print_r ($_POST);

?>
