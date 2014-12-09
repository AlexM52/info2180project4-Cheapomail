<?php
// Start session
session_start();
?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <title>session tester</title>-->
<!--    </head>-->
<!--    <body>-->
        <?php
        if (!isset($_SESSION['timestamp'])){
            //$_SESSION['timestamp'] = date_create();
            ?>
<script type="text/javascript"> window.location="index.html"; </script>
            <?php
        }else{
            // $oldtime = $_SESSION['timestamp'];
            // $_SESSION['timestamp'] = date_create();
            // echo "\n";
            // print_r($_SESSION);
            // //$DATE1 = date_create('2014-11-12');
            // echo "\n" . date_format($oldtime, 'Y-m-d');
            // //$DATE2 = date_create('2590-11-12');
            // echo "\n" . date_format($_SESSION['timestamp'], 'Y-m-d ');
            // //if ($DATE2 > $DATE1){ echo 'true'; } else { echo 'false'; }
            // $diff['days'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%a');
            // $diff['hours'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%H');
            // $diff['mins'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%I');
            // //if ('1' < '15') { echo 'true'; } else { echo 'false'; };
            // //echo $diff['days']; echo $diff['hours']; echo $diff['mins'];
            // //echo date_diff($DATE1, $DATE2)->format('%a');
            // if ($diff['days']<'1') {
            //     if ($diff['hours']<'1') {
            //         if ($diff['mins']>'15') {
            //             $_SESSION['timeout']=1;
            //         }
            //     } else { $_SESSION['timeout']=1; }
            // } else { $_SESSION['timeout']=1; }
            // if ($_SESSION['timeout']==1){
            //     ?https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/userlogin.php<?php
            // }else{
            //     ?https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php<?php
            // }
            
            session_unset();
            session_destroy();
            
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
            <div id="logout_page">
                <div id="logout_box">
                    <h1>Bye!</h1>
                    <p>You've been logged out. Closing your browser helps to ensure your account stays secure.</p>
                    <p>Redirecting back to CheapoMail home in 10 seconds...</p>
                    <!--<script type="text/javascript">setTimeout(function() { window.location="index.html"; }, 10000);</script>-->
                    <!--<table>-->
                    <!--<tr>-->
                    <!--    <td><label>Username: </label></td><td><input id="tf_login_un" type="text" name="uname" autofocus="autofocus" /></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--    <td><label>Password: </label></td><td><input id="tf_login_pw" type="text" name="pword"/></td>-->
                    <!--</tr>-->
                    <!--<tr>-->
                    <!--    <td><button id="btn_login">Login</button></td>-->
                    <!--</tr>-->
                    <!--</table>-->
                </div>
            </div>
<!--        </div>-->
<!--    </body>-->
<!--</html>-->
            <?php
            print_r($_SESSION);
        }
        
        // echo "session_id: " . session_id() . "\n";
        // //print_r($_COOKIE);
        // echo "cookie[PHPSESSID]: " . $_COOKIE['PHPSESSID'] . "\n";
        // print_r($_SESSION);
        // $_SESSION['myvar'] = "Sess1";
        // //$_SESSION['timestamp'] = date_create();
        // $_SESSION['timeout']=0;
        // if (!isset($_SESSION['timestamp'])){
        //     $_SESSION['timestamp'] = date_create();
        // }
        // $oldtime = $_SESSION['timestamp'];
        // $_SESSION['timestamp'] = date_create();
        // echo "\n";
        // print_r($_SESSION);
        // $DATE1 = date_create('2014-11-12');
        // echo "\n" . date_format($oldtime, 'Y-m-d');
        // $DATE2 = date_create('2590-11-12');
        // echo "\n" . date_format($_SESSION['timestamp'], 'Y-m-d ');
        // //if ($DATE2 > $DATE1){ echo 'true'; } else { echo 'false'; }
        // $diff['days'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%a');
        // $diff['hours'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%H');
        // $diff['mins'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%I');
        // //if ('1' < '15') { echo 'true'; } else { echo 'false'; };
        // //echo $diff['days']; echo $diff['hours']; echo $diff['mins'];
        // //echo date_diff($DATE1, $DATE2)->format('%a');
        // if ($diff['days']<'1') {
        //     if ($diff['hours']<'1') {
        //         if ($diff['mins']>'15') {
        //             $_SESSION['timeout']=1;
        //         }
        //     } else { $_SESSION['timeout']=1; }
        // } else { $_SESSION['timeout']=1; }
        // echo "\n" . $_SESSION['timeout'];
        
        
        // //session_unset();
        // //session_destroy();
        ?>
<!--    </body>-->
<!--</html>-->