<?php
session_start();
#Connect to db
mysql_connect(
"0.0.0.0",
"alexm52"
);
mysql_select_db("cheapomail");

#parameters
// $UID = $_SESSION['uid'];
// $MID = $_REQUEST['msgid'];
// $PASS = $_REQUEST['password'];

#sanitize
// $USER = mysql_real_escape_string($USER);
// $PASS = mysql_real_escape_string($PASS);
// $UID = mysql_real_escape_string($UID);
// $MID = mysql_real_escape_string($MID);
//$FORMAT = $_REQUEST['format'];

# execute a SQL query on the database
// $results = mysql_query("SELECT * FROM message WHERE recipient_ids like '% $UID%';");
$results = mysql_query("SELECT id, username, first_name, last_name FROM user;");
//print $results;
# loop through each country

while ($row = mysql_fetch_array($results)) {
  ?>
    <div id="<?php echo $row["id"]; ?>" class="cmdash_userli">
        <span class="user_info"><?php echo $row["username"]; ?></span><span class="user_info"><?php echo $row["last_name"].', '.$row["first_name"]; ?></span>
        <!--<h3>?php echo $row["subject"]; ?></h3>-->
        <!--<h4>From: ?php echo $row["sender"]; ?></h4>-->
        <!--<p>-->
        <!--  ?php echo $row["body"]; ?>-->
        <!--</p>-->
    </div>
    <?php
//   <li> ?php echo $row["username"]; >, ?php echo $row["first_name"]; > </li>
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
}
?>
