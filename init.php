<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
-->

<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Creating all database table</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php

$sqlTable="DROP TABLE IF EXISTS register,public_issue,missing_cases,other_issue,admin";
if ($mysqli->query($sqlTable)) {
    echo "Table dropped successfully! <br>";
}

echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
create table IF NOT EXISTS register ( 
username varchar(50), 
email varchar(50) primary key, 
passwd varchar(50)) DEFAULT CHARSET=utf8;

";

if ($mysqli->query($sqlTable)) {
    echo " register Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table register. "  . mysqli_error($mysqli);
	die();
}
echo "<br/><br/>";

$sqlTable="
create table IF NOT EXISTS public_issue(
ID int PRIMARY KEY AUTO_INCREMENT,
issuetype varchar(100),
complainername varchar(50),
contact integer(10),
email varchar(50) REFERENCES register(email),
address varchar(200),
title varchar(100),
description varchar(250),
otherdetails varchar(250),
status varchar(10),
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARSET=utf8;
";

if ($mysqli->query($sqlTable)) {
    echo " register Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table public_issue. "  . mysqli_error($mysqli);
	die();
}

$sqlTable="
create table IF NOT EXISTS missing_cases(
ID int PRIMARY KEY AUTO_INCREMENT,
complainer varchar(50),
contact integer(10),
email varchar(50) REFERENCES register(email),
address varchar(200),
missingperson varchar(50),
age integer(2),
height integer,
weight integer,
language varchar(30),
place varchar(50),
aboutmissing varchar(300),
otherdetails varchar(300),
status varchar(10),
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP 
) DEFAULT CHARSET=utf8;
";

if ($mysqli->query($sqlTable)) {
    echo " register Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table missing_cases. "  . mysqli_error($mysqli);
	die();
}
$sqlTable="
create table IF NOT EXISTS other_issue(
ID int PRIMARY KEY AUTO_INCREMENT,
issuetype varchar(100),
complainername varchar(50),
contact integer(10),
email varchar(50) REFERENCES register(email),
address varchar(200),
description varchar(250),
otherdetails varchar(250),
status varchar(10),
`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP 
) DEFAULT CHARSET=utf8;
";

if ($mysqli->query($sqlTable)) {
    echo " register Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table other_issue. "  . mysqli_error($mysqli);
	die();
}

$sqlTable="
create table IF NOT EXISTS admin ( 
username varchar(50), 
email varchar(50) primary key, 
passwd varchar(50)) DEFAULT CHARSET=utf8;
";

if ($mysqli->query($sqlTable)) {
    echo " register Table created successfully!<br>";
} else {
	echo "ERROR: Cannot create table admin. "  . mysqli_error($mysqli);
	die();
}

$sqlquery = "INSERT\n"
    . "INTO\n"
    . " `admin`(`username`,\n"
    . " `email`,\n"
    . " `passwd`)\n"
    . "VALUES(\n"
    . " \"admin\",\n"
    . " \"admin@complaintbox.com\",\n"
    . " \"admin\"\n"
    . ")";

	if ($mysqli->query($sqlquery)) {
    echo " admin login details are </br> username: admin@complaintbox.com <br/> password: admin<br>";
} else {
	echo "ERROR: Cannot insert admin login details. "  . mysqli_error($mysqli);
	die();
}
?>


<button class = "mybutton" onclick="window.location = '/';">Back</button>

</html>