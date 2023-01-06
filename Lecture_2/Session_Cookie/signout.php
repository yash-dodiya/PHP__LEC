<?PHP

session_start();
session_destroy();
header("location:home.php");

echo "you have been loged out:"

?>