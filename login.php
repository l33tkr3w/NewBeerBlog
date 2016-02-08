<?php


print_r($_SESSION['LoginStatus']);

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


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form method="POST" action="index.php">
            <table border="1">
                <thead>
                    <tr>
                        <th colspan="2">Login</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="email" value="" size="25" /></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="text" name="password" value="" size="25" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Enter" name="Enter" /></td>
                    </tr>
                </tbody>
            </table>
        </form>
		<p><a href="index.php">Home Page</a></p>
<?php
// put your code here
?>
    </body>
</html>

