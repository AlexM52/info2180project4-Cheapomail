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
            ?>https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/userlogin.php<?php
        }else{
            $oldtime = $_SESSION['timestamp'];
            $_SESSION['timestamp'] = date_create();
            echo "\n";
            print_r($_SESSION);
            //$DATE1 = date_create('2014-11-12');
            echo "\n" . date_format($oldtime, 'Y-m-d');
            //$DATE2 = date_create('2590-11-12');
            echo "\n" . date_format($_SESSION['timestamp'], 'Y-m-d ');
            //if ($DATE2 > $DATE1){ echo 'true'; } else { echo 'false'; }
            $diff['days'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%a');
            $diff['hours'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%H');
            $diff['mins'] = date_diff($oldtime, $_SESSION['timestamp'])->format('%I');
            //if ('1' < '15') { echo 'true'; } else { echo 'false'; };
            //echo $diff['days']; echo $diff['hours']; echo $diff['mins'];
            //echo date_diff($DATE1, $DATE2)->format('%a');
            if ($diff['days']<'1') {
                if ($diff['hours']<'1') {
                    if ($diff['mins']>'15') {
                        $_SESSION['timeout']=1;
                    }
                } else { $_SESSION['timeout']=1; }
            } else { $_SESSION['timeout']=1; }
            if ($_SESSION['timeout']==1){
                ?>https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/userlogin.php<?php
            }else{
                ?>https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php<?php
            }
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