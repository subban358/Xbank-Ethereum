<!DOCTYPE html>
<html>
<head>
<title>
    Loan Request Form
</title>
<style>
#shadow1 {
        padding: 10px;
        box-shadow: 5px 10px 18px #888888;
        overflow: hidden;
        width: 100%;
        background: #ffffff;
    }
</style>
    <title>
        Loan Interafce
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="./node_modules/web3/dist/web3.min.js"></script>
    </head>
<body style="font-size: 17px; font-family: Century Gothic;">
<div id="shadow1">
        <img src="xbank.png" alt="xbank logo" style="height:107.5px; width: 170px;">
    </div>
    <div id="form">
        <form action="complete-page.php" method="GET">
            <p>
                <label>Transfer to: </label>
                <input type="text" id="toAddress" name="toAddress"/>
            </p>
            <p>
                <label>Transfer from: X Bank</label>
            </p> 
            <p>
                <label>Loan Type</label>
            <select>
  <option value="-select-">-select-</option>
  <option value="homeLoan">Home Loan</option>
  <option value="carLoan">Car Loan</option>
  <option value="bussinessLoan">Bussiness Loan</option>
</select>
            </p>
            <p>
                <label>Transfer Amount: </label>
                <input type="" id="amount" name="amount"/>
            </p>
            <p>
                <input type="submit" id="btn3" value="submit" style="height: 40px; width: 100px; font-size: 20px; font-family: Century Gothic; float: middle;"/>
            </p>      

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script>

                if (typeof web3 !== 'undefined') 
                {
                    web3 = new Web3(web3.currentProvider);
                }
                 else 
                {
                    // set the provider you want from Web3.providers
                    web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
                }
                web3.eth.defaultAccount = web3.eth.accounts[0];
                var Contract = web3.eth.contract([
	{
		"constant": false,
		"inputs": [
			{
				"name": "bal",
				"type": "int256"
			},
			{
				"name": "to",
				"type": "int256"
			}
		],
		"name": "loan",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "bal",
				"type": "int256"
			},
			{
				"name": "to",
				"type": "int256"
			},
			{
				"name": "frm",
				"type": "int256"
			}
		],
		"name": "transaction",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "to",
				"type": "int256"
			}
		],
		"name": "get",
		"outputs": [
			{
				"name": "",
				"type": "int256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "validate",
		"outputs": [
			{
				"name": "",
				"type": "int256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]);
                    var Con = Contract.at('0x42b8186D09388f36F7864bE5b86746BC0F6031a1');
                    console.log(Con);        

                    $("#btn3").click(function() {
                    Con.loan(parseInt($("#amount").val()),parseInt($("#toAddress").val()));
                     });


            </script>     
        </form>
    </div>
</body>