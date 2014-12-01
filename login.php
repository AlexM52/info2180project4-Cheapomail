<?php
#Connect to db
mysql_connect(
"0.0.0.0",
"alexm52"
);
mysql_select_db("cheapomail");

#parameters
$USER = $_REQUEST['username'];
$PASS = $_REQUEST['password'];
//$FORMAT = $_REQUEST['format'];

# execute a SQL query on the database
$results = mysql_query("SELECT * FROM user WHERE username='$USER' AND password='$PASS';");
print $results;
# loop through each country

while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["username"]; ?>, <?php echo $row["first_name"]; ?> </li>
  <?php
}

//echo "something here";
//echo $USER;
?>
SERVER RESPONSE: Username-<?php echo $USER; ?>, Password-<?php echo $PASS; ?>
<?php

?>
