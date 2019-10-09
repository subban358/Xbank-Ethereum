<!DOCTYPE html>
<html>
    <head>
        <title>
            Transaction Type
        </title>
        |<style>
            .center-div
{
  position: absolute;
  margin: auto;
  padding: 60px;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 200px;
  height: 150px;
  background-color: #ccc;
  border-radius: 3px;
}
#shadow1 {
        padding: 10px;
        box-shadow: 5px 10px 18px #888888;
        overflow: hidden;
        width: 100%;
        background: #ffffff;
    }
        </style>
    </head>
    <body>
            <div id="shadow1">
                    <img src="xbank.png" alt="xbank logo" style="height:107.5px; width: 170px;">
                </div>
        <div class="center-div">
        <form action="process2.php" method ="POST" style="font-family: Century Gothic;">
            <input type="radio" name="tn" value="T"> Normal Transactions<br><br>
            <input type="radio" name="tn" value="L"> Loan from Bank<br><br>
            <br><input type = "submit" value = " Submit " style="height: 40px; width: 100px; font-size: 20px; font-family: Century Gothic; float: middle;"/>
          </form> 
          
    </div>
        
    </body>
</html>