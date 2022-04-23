<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
include("baglan.php");
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];

if($b==$c)
{
$veri=mysql_query("insert into uyeler(kad,sifre1,sifre2) VALUES ('$a','$b','$c')");


print "Veriler MySQL'e kaydedildi";
}
else
{
		print "BAĞLANTI HATASI";
	
	}

		
	
		
		
		
	
?>
</body>
</html>