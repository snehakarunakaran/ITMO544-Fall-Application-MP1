<?php
$link = new mysqli("mp1.czvcgopvu8oo.us-east-1.rds.amazonaws.com","Snehamp1db","Snehamp1db","MiniProjectData",3306) or die("Error " . mysqli_error($link)); 

$link->query("CREATE TABLE MiniProject1 
(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(20),
email VARCHAR(20),
phoneforsms VARCHAR(20),
raws3url VARCHAR(256),
finisheds3url VARCHAR(256),
jpegfilename VARCHAR(256),
state tinyint(3) CHECK(state IN(0,1,2)),
datetime timestamp
)");

shell_exec("chmod 600 setup.php");

?>