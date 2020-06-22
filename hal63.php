<html>
<head>
<title>.:: Konversi Type Data::.</title>
</head>
<body>
<font face=tahoma size=2>
<?php
$bayar="500.77 Rupiah";
print ("Tipe Data String: $bayar <br> \n");
settype($bayar,"double");
print ("Tipe Data Double: $bayar <br> \n");
settype($bayar,"integer");
print ("Tipe Data Integer: $bayar <br> \n");
?>
</body>
</html>