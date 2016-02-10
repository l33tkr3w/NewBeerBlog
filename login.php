<?php
if (isset($_POST['email'])) {
    
    $sql_li_stmt = "Select email, password "
            . "From tbl_blog "
            . "where email=:email";
    $sqlh_li = $pdo->prepare($sql_li_stmt);

    $x_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

    $sqlh_li->bindParam(":email", $x_email);
    $sqlh_li->execute();

    $li_result = $sqlh_li->fetch();
    $hash = $li_result['password'];
    $test = "<h3>TEST!</h3>";

    if (password_verify($_POST['password'], $hash)) {
        echo 'Password is valid!';
		
		$_SESSION['LoginStatus'] = true;
                   $test = $_SESSION['LoginStatus'];
                
    } else {
        echo 'Invalid password.';
    }

}
?>


//<?php
//
//$email = $_POST["email"];
//
//$query = mysql_query("SELECT * FROM users WHERE username='$email'");
//
//if(mysql_num_rows($query) != 0)
//{
//echo "Username already exists";
//}
//else
//{
////proceed with code here
//}

