<?php
session_start();
#Connect to db
mysql_connect(
"0.0.0.0",
"alexm52"
);
mysql_select_db("cheapomail");

#parameters
$UID = $_SESSION['uid'];
$SUBJECT = $_REQUEST['subject'];
$recipients = $_REQUEST['recipients'];
$BODY = $_REQUEST['body'];
#sanitize
$SUBJECT = mysql_real_escape_string($SUBJECT);
$recipients = mysql_real_escape_string($recipients);
//$FORMAT = $_REQUEST['format'];
$results = mysql_query("select id from user where username regexp '".$recipients."';");
$rstring = "";
while ($row = mysql_fetch_array($results)){
    $rstring = $rstring.' '.(string)$row['id'].',';
}
# execute a SQL query on the database
$results = mysql_query("insert into message values (null, '".$BODY."', '".$SUBJECT."', ".$UID.", '".$rstring."');");
//print $results;
# loop through each country

//while ($row = mysql_fetch_array($results)) {
  //>
  //<li> <?php echo $row["username"]; >, <?php echo $row["first_name"]; > </li>
// if ($row = mysql_fetch_array($results)) {
//   session_unset();
//   $_SESSION['user'] = $row['username'];
//   $_SESSION['uid'] = $row['id'];
//   $_SESSION['name'] = $row['first_name'];
//   $_SESSION['timestamp'] = date_create();
//   $_SESSION['timeout'] = 0;
//   >https://2180dev-alexm52.c9.io/webgit/AlexM52.github.io/info2180project4/cmdash.php<?php
// }else{
//   //echo "Login Failed: Incorrect Username or Password.";
//   echo "ERR: 11";
// }

//echo "something here";
//echo $USER;
// >
// SERVER RESPONSE: Username-<?php echo $USER; >, Password-<?php echo $PASS; >
// <?php

?>