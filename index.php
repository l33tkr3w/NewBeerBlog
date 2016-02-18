<?php
require('host.php');
require('login.php');
require('user_registration.php');
require('createPost.php');

?>



<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <title>Blog Your Beer</title>

        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- CSS STYLES -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <style type="text/css">
        body { 
            background: #384452 !important; 
        } 

        .dropdown-menu {
            width: 300px !important;     
        }
    </style>

    <script>
        setTimeout(removeVideo, 40000);
        function removeVideo() {
            document.getElementById('videoContain').innerHTML = '<br>';

        }
    </script>

    <body>
        
        

        <!-- NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Blog Your Beer.</a>
                </div>

                <div class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <ul class="nav navbar-nav">

                            <li class="dropdown">
                                <a href="" class="dropdown-toggle " data-toggle="dropdown">Support <b class="caret"></b></a>
                                <ul class="dropdown-menu" id="supportButtonDD">
                                    <li>   

                                        <script>
                                            function displayAbout() {
                                                document.getElementById('aboutPlaceholder').innerHTML = '<div class="well"> what more can I say? <br>I like beer.</div>';
                                                document.getElementById('contactPlaceholder').innerHTML = "";
                                            }

                                            function displayContact() {
                                                document.getElementById('contactPlaceholder').innerHTML = '<form  action="" method="POST">' +
                                                        '<input name="name" class="form-control" type="text" placeholder="Name"/>' +
                                                        '<input name="email" class="form-control" type="text" placeholder="Email Address" value="""/>' +
                                                        '<textarea name="message" class="form-control" cols="36" rows="7" placeholder="Please enter your message here"></textarea>' +
                                                        '<button type="submit" class="btn btn-theme btn-block">Send</button>' +
                                                        '</form>';
                                                document.getElementById('aboutPlaceholder').innerHTML = "";
                                            }
                                        </script>

                                        <button onclick="displayAbout()"  id="aboutButton" class="btn btn-theme btn-block">About</button>
                                        <p id="aboutPlaceholder" class="text-primary"></p>
                                        <button onclick="displayContact()" type="" id="contactButton" class="btn btn-theme btn-block ">Contact</button>
                                        <p id="contactPlaceholder" class="text-primary"></p>

                                    </li> 
                                </ul>
                            </li>
                        </ul>  

                        <?php
                        if (isset($_POST['email'])) {
                            echo('<ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">New Post <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>   
                                <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required />
                                    <textarea class="FormElement" name="textContent" name="textContent "id="textContent" cols="36" rows="7" placeholder="Article Text"></textarea>
                                    <input type="text" class="form-control" name="image" id="image" placeholder="Enter an Image URL">
                                    <button type="submit" class="btn btn-theme btn-block">Post</button>
                                    <input type="hidden" class="form-control" name="email" id="image" value="' . $_POST['email'] . '">
                                    <input type="hidden" class="form-control" name="removable" id="image" value="' . $_POST['email'] . '">
                                    </form>
                                </li>                                  
                            </ul>
                        </li>
                        </ul>  
                    </ul>');
                        }
                        
                        ?>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <?php
                                if (!isset($_POST['email'])) {
                                    echo('<ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>   
                                <form class="form" role="form" method="post" action="" accept-charset="UTF-8" id="login-nav">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" required />
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Password">                                  
                                    <button type="submit" class="btn btn-theme btn-block">Login</button>
                                    <input type="hidden" class="form-control" name="email" id="email" value="">
                                    </form>
                                </li>                                  
                            </ul>
                        </li>
                        </ul>  
                    </ul>');
                                }
                                
                                ?>

                            </li>

                            <!-- USER REGISTRATION DROPDOWN, Shows user registration drop down menu. -->
                            <li class="dropdown">

                                
                                <!--SET STATUS OF USER, SIGNED IN OR OUT-->
                                <?php
                                if (!isset($_POST['email'])) {
                                    echo('<a href="" class="dropdown-toggle" id="registerBttn" data-toggle="dropdown">Register<span class="caret"></span></a>');
                                }else{
                                    echo('<a href="index.php" class="btn btn-success" role="button">Logoff</a>');
                                    echo('');
                                }
                                ?>
                                
                                <!--HIDE REGISTER BUTTON AND FORM ONCE LOGGED IN-->
                                <?php
                                if (!isset($_POST['email'])) {
                                    echo('<ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">                                      
                                            <form action=""  method="POST" >
                                                <div class="form-group">
                                                    <div id="data">

                                                        <table width="350px">
                                                            <tr> 
                                                                <td valign="top"> 
                                                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                                                </td>
                                                            </tr>

                                                            <tr>   
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                                                </td>
                                                            </tr>

                                                            <tr>  
                                                                <td valign="top">
                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                                                </td>
                                                            <tr>  
                                                                <td valign="top">
                                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                                
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Street Address" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                              
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                                
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                                                                </td>
                                                            </tr>

                                                            <tr>                                                               
                                                                <td valign="top">
                                                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zipcode" required>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2" style="text-align:center">
                                                                    <div class="form-group">                                                                           
                                                                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                                                                    </div>   
                                                                </td>
                                                            </tr>
                                                        </table>                                  
                                                        </form>
                                                    </div> 
                                                </div>
                                        </div>
                                </li>
                            </ul>');
                                }else{
                                    echo('');
                                    
                                }
                                ?>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container" >
        <div class="video" id="videoContain">
            <div class="responsive-video">
                <video id="player" autoplay loop src="beer.mp4" height="100%" ></video>
            </div>
        </div>

        <hr>

        <div class="well">

            <h4 class="media-heading">Title</h4>

            <div class="media">             
                <a>
                    <img class="img-responsive" src="assets/img/beer-color-spectrum.jpg" width="100%">
                    <br>
                </a>
                <div class="media-body">               
                    <p class="text-right">Username</p>
                    <p>Random blog post</p>
                    <ul class="list-inline list-unstyled">                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="well">
            <h4 class="media-heading">Title</h4>
            <div class="media">
                <a>
                    <img class="media-object" src="assets/img/beer2.jpg">
                </a>
                <div class="media-body">

                    <p class="text-right">Username</p>
                    <p>Random blog post</p>
                    <ul class="list-inline list-unstyled">

                    </ul>
                </div>
            </div>
        </div>

<?php
include('post.php');
?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript"></script>

</body>
</html>
