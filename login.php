<!DOCTYPE html>
<html>
<head>
    <title>
        Login Interafce
    </title>
    <style>
    a.button {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        color: initial;
        padding: 3px;
        align-content: center;
    }
    #shadow1 {
        padding: 10px;
        box-shadow: 5px 10px 18px #888888;
        overflow: hidden;
        width: 100%;
        background: #ffffff;
    }
    #shift {
        float: right;
        padding: 50px;
        margin: 100px 150px 0px 0px;
        font-size: 17px;
        font-family: Century Gothic;
        border-radius: 25px;
        background: #ffffff;
        box-shadow: 0px 10px 10px 0px #888888;
        height: 300px;
    }
    </style>
</head>
<body style="background: #95dbe0">
    <div id="shadow1">
        <img src="xbank.png" alt="xbank logo" style="height:107.5px; width: 170px;">
    </div>
    <div id="shift">
        <form action="process3.php" method="POST">
            <table>
                <tr>
                    <td style="padding: 10px">Account Number :</td>
                    <td style="padding: 10px"><input type="text" id="uname" name="username" style="width: 220px; height: 19px;"/></td>
                </tr>
                <tr>
                    <td style="padding: 10px">Account Password :</td>
                    <td style="padding: 10px"><input type="password" id="pass" name="password" style="width: 220px; height: 19px;"></td>
                </tr>
            </table>
            <br><br><input type="submit"  name="add" value="submit" style="height: 40px; width: 100px; font-size: 20px; font-family: Century Gothic; float: right;"/>
        </form>
    </div>
    <div style="height: 700px; width: 1000px; margin: 50px;">
        <img src="hhhgy.png" alt="bank" style="height: 510px; width: 707px">
    </div>
</body>
</html>