<?php
if ($_POST["tn"] == "T"){
    header("Location: http://127.0.0.1:1337/login/transaction.php");

}
else{
    header("Location: http://127.0.0.1:1337/login/loan.php");
}
?>
