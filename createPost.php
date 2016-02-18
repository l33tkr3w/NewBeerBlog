<?php

if (isset($_POST['textContent'])) {
    

    //create sql statement
    $sql_stmt = "INSERT INTO tbl_Articles "
            . "(email, "
            . "title, "
            . "textContent, "
            . "image, "
            . "removable) "
            . "VALUES "
            . "(:email, "
            . ":title, "
            . ":textContent, "
            . ":image, "
            . ":removable)";

    //prepare the sql statement
    $sqlh = $pdo->prepare($sql_stmt);

    //sanitize the input
    $in_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $in_title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $in_textContent = filter_var($_POST['textContent'], FILTER_SANITIZE_STRING);
    $in_image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
    $in_removable = filter_var($_POST['removable'], FILTER_SANITIZE_STRING);

    //bind the parameters
    $sqlh->bindparam(":email", $in_email);
    $sqlh->bindparam(":title", $in_title);
    $sqlh->bindparam(":textContent", $in_textContent);
    $sqlh->bindparam(":image", $in_image);
    $sqlh->bindparam(":removable", $in_removable);
    $in_email = $User;

    //excecute the sqlstatement
    $sqlh->execute();
}
     else{
         
     }

?>