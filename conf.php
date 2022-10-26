/* CONNECTION */
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "database_juragan_beras";
$con = mysqli_connect($host, $user, $pass, $dbname);
if(!$con) {
echo "Tidak terhubung ke database!";
}
?>

Struktur Tabel Admin
table_admin
id -> int(11) > primary > auto_increment
name -> varchar(30)
email -> varchar(50)
password -> varchar(255)
profile -> varchar(100)
level -> varchar(10)
register -> date