<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include ("baglan.php");
$tablo_oku="Select*from uyeler";
$sorgu=mysql_query($tablo_oku);
print"<table align=\"center\"border=\"1\">
<tr>
<td><center><b>Sıra no</center></td>

<td><center><b>Kulanıcı Adı</center></td>
<td><center><b>Şifre 1</center></td>
<td><center><b>Şifre 2</center></td>
</tr>";

while($degisken=mysql_fetch_row($sorgu)):
print "<tr>
<td>$degisken[0]</td>
<td>$degisken[1]</td>
<td>$degisken[2]</td>
<td>$degisken[3]</td>
</tr>";
endwhile;

print"</table>";
?>
</body>
</html>