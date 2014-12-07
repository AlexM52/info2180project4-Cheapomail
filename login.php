<?php
session_start();
#Connect to db
mysql_connect(
"0.0.0.0",
"alexm52"
);
mysql_select_db("cheapomail");

#parameters
$USER = $_REQUEST['username'];
$PASS = $_REQUEST['password'];
#sanitize
$USER = mysql_real_escape_string($USER);
$PASS = mysql_real_escape_string($PASS);
//$FORMAT = $_REQUEST['format'];

# execute a SQL query on the database
$results = mysql_query("SELECT * FROM user WHERE username='$USER' AND password='$PASS';");
//print $results;
# loop through each country

//while ($row = mysql_fetch_array($results)) {
  //>
  //<li> <?php echo $row["username"]; >, <?php echo $row["first_name"]; > </li>
if ($row = mysql_fetch_array($results)) {
  session_unset();
  $_SESSION['user'] = $row['username'];
  $_SESSION['uid'] = $row['id'];
  $_SESSION['name'] = $row['first_name'];
  $_SESSION['timestamp'] = date_create();
  $_SESSION['timeout'] = 0;
  ?>
success
  <?php
}else{
  echo "Login Failed: Incorrect Username or Password.";
}

//echo "something here";
//echo $USER;
// >
// SERVER RESPONSE: Username-<?php echo $USER; >, Password-<?php echo $PASS; >
// <?php

?>
