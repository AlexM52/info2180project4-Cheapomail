<?php
session_start();
#Connect to db
mysql_connect(
"0.0.0.0",
"alexm52"
);
mysql_select_db("cheapomail");

#parameters
// $USER = $_REQUEST['username'];
// $PASS = $_REQUEST['password'];
$UID = $_SESSION['uid'];
$OFFSET = $_POST['offset'];
if ($OFFSET<0){
    $OFFSET = 0;
}
#sanitize
// $USER = mysql_real_escape_string($USER);
// $PASS = mysql_real_escape_string($PASS);
$UID = mysql_real_escape_string($UID);
//$FORMAT = $_REQUEST['format'];

# execute a SQL query on the database
// $results = mysql_query("SELECT * FROM message WHERE recipient_ids like '% $UID%';");
$results = mysql_query("select b.id, a.username as sender, b.subject, b.recipient_ids from user a, message b where recipient_ids like '% $UID%' and b.user_id = a.id order by b.id desc LIMIT $OFFSET, 10;");
//print $results;
# loop through each country
while ($row = mysql_fetch_array($results)) {
    $x1 = "cmdash_listitem";
    $results2 = mysql_query("select message_id from message_read where message_id=".$row['id'].";");
    if ($row2 = mysql_fetch_array($results2)){
        $x1 = "cmdash_listitem_read";
    }
  ?>
    <div id="<?php echo $row["id"]; ?>" class=<?php echo $x1;?>>
        <span class="mli_sender"><?php echo $row["sender"]; ?></span><span class="mli_subject"><?php echo $row["subject"]; ?></span>
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
    <div id="offset_bar"><span id="prevoffset"><< </span><span id="msgs_offset"><?php echo $OFFSET; ?></span><span id="nextoffset"> >></span></div>