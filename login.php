<?php

if (isset($_POST['email'])) {
    echo "Login true <br><br>";

    $sql_li_stmt = "Select email, password "
            . "From tbl_blog "
            . "where email=:email";
    $sqlh_li = $pdo->prepare($sql_li_stmt);

    $x_usrName = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $sqlh_li->bindParam(":email", $x_usrName);
    $sqlh_li->execute();


    $li_result = $sqlh_li->fetch();

    print_r($li_result['password'] . "<br><br>");

    $hash = $li_result['password'];


    if (password_verify($_POST['password'], $hash)) {
        echo 'Password is valid!';
		
		$_SESSION['LoginStatus'] = true;
    } else {
        echo 'Invalid password.';
    }

}
?>