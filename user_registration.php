<?php

if (isset($_POST['firstname'])) {
    print_r($_POST);
    $pwd = $_POST['password'];
    
    //$loginStatus used only for button label
  
    $loginStatus = 'Logoff &nbsp;' . $_POST['email'];


    //create sql statement
    $sql_stmt = "INSERT INTO tbl_blog "
            . "(firstname, "
            . "lastname, "
            . "email, "
            . "address, "
            . "city, "
            . "state, "
            . "zip, "
            . "password) "
            . "VALUES "
            . "(:firstname, "
            . ":lastname, "
            . ":email, "
            . ":address, "
            . ":city, "
            . ":state, "
            . ":zip, "
            . ":password)";

    //prepare the sql statement
    $sqlh = $pdo->prepare($sql_stmt);

    //sanitize the input
    $in_firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $in_lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $in_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $in_address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $in_city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $in_state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $in_zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);
    $in_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    //hash the password
    /*
     * NOTE THAT password_hash should go into a field that
     * is 255 in length.  It also includes a builtin random salt 
     * and it currently uses BCrypt.
     */
    $in_password = password_hash($in_password, PASSWORD_DEFAULT);

    //bind the parameters
    $sqlh->bindparam(":firstname", $in_firstname);
    $sqlh->bindparam(":lastname", $in_lastname);
    $sqlh->bindparam(":email", $in_email);
    $sqlh->bindparam(":address", $in_address);
    $sqlh->bindparam(":city", $in_city);
    $sqlh->bindparam(":state", $in_state);
    $sqlh->bindparam(":zip", $in_zip);
    $sqlh->bindparam(":password", $in_password);

    //excecute the sqlstatement
    $sqlh->execute();
}
     else{
         //$loginStatus used only for button label
         $loginStatus = 'Register';
     }

?>