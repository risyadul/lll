<?
require "conn.php";
$id = $_GET['id'];

$query1 = mysqli_query($conn, "DELETE FROM users WHERE id ='$id'");
if ($query1) {
    echo "Success";
}else {
    echo "Error deleting record: " . mysqli_error($conn);
}
