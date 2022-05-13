<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>ร่าเริง ที่สุด22</title>
 <meta content="poohktt@homestudio" name="author">
 <link type="text/css" rel="stylesheet" href="nnnewway10.css">
 <link type="text/css" rel="stylesheet" href="layout.css">
<link type="text/css" rel="stylesheet" href="component.css">
 <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1" >

 
</head>


<?php
if ($_POST[mes] <>"")
{
$hostname="localhost";
$user="";
$password="";
$dbname="datatest";
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="INSERT INTO chatroom ( mes)VALUES ('$_POST[mes]');";
$dbquery=mysql_db_query($dbname,$sql);
}
?>


<body>
<table width="70%" border="0" cellspacing="0" cellpadding="0">
<tr>
<th bgcolor="f2f2f2" scope="row"><form name="form2" method="post" action="<?=$PHP_SELF;?>">
<label>
<span>
<?php
$hostname="localhost";
$user="";
$password="";
$dbname="datatest";//ชื่อฐานข้อมูล
$connect=mysql_connect($hostname,$user,$password) or die("cannot connect");
$db=mysql_select_db($dbname)or die("cannot connect database!");
$sql="select * from chatroom order by id DESC limit 0,10";//เรียกข้อมูล
$dbquery=mysql_db_query($dbname,$sql);
$row=mysql_num_rows($dbquery);
while($result=mysql_fetch_array($dbquery)) {
$a[] = $result[mes]; //เก็บช้อความ 10 อันดับล่าสุดลงตัวแปร
}

for($i=count($a)-1;$i>=0;$i--) {
echo $a[$i]."<br>";
}
?>
</span>
</label>
</form> </th>
</tr>
<tr>
<th scope="row"><form name="form1" method="post" action="">
<table width="88%" border="1" cellspacing="0" cellpadding="0">
<tr>
<th scope="row"><font size="2">พิมพ์ข้อความที่นี่</font></th>
<td><label>
<span >
<input name="mes" type="text" id="mes" size="60">
</span>
</label></td>
<td><label>
<input name="Submit" type="submit" id="Submit" value="Send">
</label></td>
</tr>
</table>
</form> </th>
</tr>
</table>
</body>
</html>
/* https://www.thaicreate.com/php/forum/027855.html */


