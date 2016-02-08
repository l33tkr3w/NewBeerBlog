<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<div id="registration">
        <a href="user_registration.php">Beer Registration Form</a><br>
        &nbsp;<hr>

        <form action="user_registration.php"  method="POST" >
            <div id="data">
                <table width="450px">
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="firstname">First Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="firstname" value="" maxlength="50" size="30">
                        </td>
                    </tr>

                    <tr>
                        <td valign="top">
                            <label for="lastname">Last Name *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="lastname" value="" maxlength="50" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="email">Email Address *</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="email" value="" maxlength="80" size="30">
                        </td>
                    <tr>
                        <td valign="top">
                            <label for="email">Password *</label>
                        </td>
                        <td valign="top">
                            <input  type="password" name="password" value="" maxlength="80" size="30">
                        </td>

                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">Address</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="address" value="" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">City</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="city" value="" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">State</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="state" value="" maxlength="30" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label for="telephone">Zip</label>
                        </td>
                        <td valign="top">
                            <input  type="text" name="zip" value="" maxlength="30" size="30">
                        </td>
                    </tr>

                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input type="submit" value="Submit">   
                        </td>
                    </tr>
                </table>
            </div>

        </form>

</div>
    </body>
</html>
