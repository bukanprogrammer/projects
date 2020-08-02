<?php
// $conn = new mysqli("sql210.epizy.com","epiz_26389799","FvMlMh8j7Qfd","epiz_26389799_absensi");
$conn = new mysqli("localhost","root","","absensi");
if (!$conn) {
 die("connection failed".$conn->connect_error());
}
?>