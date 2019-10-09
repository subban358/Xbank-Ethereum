<!DOCTYPE html>
<html>
<head>
<title>
        Transaction complete Interafce
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body style="text-align:center; font-size: 17px; font-family: Century Gothic;">
    <div id="form">
    <h3>Transaction complete<h3>
        <?php 
        $to = $_GET['toAddress'];
		$from = $_GET['fromAddress'];
        $amount = $_GET['amount'];
        
        echo $amount." amount is transfered to user ".$to." from user ".$from. "<br><br>";
        
        ?>
        <input type="button" style="font-size: 17px; font-family: Century Gothic;" onclick="location.href= 'http://127.0.0.1:1337/login/login.php' " value='Log out'>
        <input type="button" style="font-size: 17px; font-family: Century Gothic;" onclick="location.href= 'http://127.0.0.1:1337/login/middle.php' " value='Home'>

</div>
</body>
</html>