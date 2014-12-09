<?php
session_start();

if (!isset($_SESSION['timestamp'])){
    ?>
<!--<html>-->
<!--    <head>-->
<!--        <title>CheapoMail</title>-->
<!--        <link rel="stylesheet" href="style.css" type="text/css" />-->
<!--        <script type="text/javascript" src="prototype.js"></script>-->
<!--        <script type="text/javascript" src="script.js"></script>-->
<!--    </head>-->
    
<!--    <body>-->
<!--        <div id="page_content">-->
            <div id="login_page">
                <div id="login_box">
                    <p>Welcome to CheapoMail! Please Login to access your messages.</p>
                    <table>
                    <tr>
                        <td><label>Username: </label></td><td><input id="tf_login_un" type="text" name="uname" autofocus="autofocus" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: </label></td><td><input id="tf_login_pw" type="password" name="pword"/></td>
                    </tr>
                    <tr>
                        <td><button id="btn_login">Login</button></td>
                    </tr>
                    </table>
                    <div id="login_status"></div>
                </div>
            </div>
<!--        </div>-->
<!--    </body>-->
<!--</html>-->
    <?php
}else{
    ?>
<html>
    <head>
        <title>CheapoMail</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript" src="prototype.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </head>
    
    <body>
        <div id="page_content">
            <div id="relogin_page">
                <div id="login_box">
                    <p>Your session timed out. Please enter your password to resume.</p>
                    <table>
                    <tr>
                        <td><label>Username: </label></td><td><input id="tf_login_un" type="text" value="<?php echo $_SESSION['user']; ?>" name="uname" /></td>
                    </tr>
                    <tr>
                        <td><label>Password: </label></td><td><input id="tf_login_pw" type="password" name="pword" autofocus="autofocus" /></td>
                    </tr>
                    <tr>
                        <td><button id="btn_login">Login</button></td><td><button id="btn_exit">EXIT</button></td>
                    </tr>
                    </table>
                    <div id="login_status"></div>
                </div>
            </div>
        </div>
    </body>
</html>
    <?php
}
    
?>