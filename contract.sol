pragma solidity ^0.4.25;
contract Mycontract
{
    int firstStakeholderBalance;
    int secondStakeholderBalance;
    int thirdStakeholderBalance;
    int bankBalance;
    int Govt;
    int Bank;
    int investor1;
    int investor2;
    
    constructor () public
    {
        firstStakeholderBalance = 0; // 1
        secondStakeholderBalance = 0;// 2 
        thirdStakeholderBalance = 0;// 3 
        Govt = 1;
        Bank = 1;
        investor1 = 1;
        investor2 = 1;
        bankBalance = 90000000;
    }
    
    function get(int to) public view returns(int)
    {
        if (to == 1)
            return firstStakeholderBalance;
        else if (to == 2)
            return secondStakeholderBalance;   
        else
            return thirdStakeholderBalance;
    }
    
    
    function validate() public view returns(int)
    {
        if(Govt == 0 || Bank == 0 || investor1 == 0 || investor2 == 0)
            return 0;
        else
            return 1;
    }
        
    
    function transaction(int bal,int to,int frm) public
    {
        
        if (to==1 && frm==2)
        {
            firstStakeholderBalance += bal;
            secondStakeholderBalance -= bal;
        }
        else if (to == 1 && frm == 3)
        {
            firstStakeholderBalance += bal;
            thirdStakeholderBalance -= bal;
            
        }
        else if (to == 2 && frm == 1)
        {
            secondStakeholderBalance += bal;
            firstStakeholderBalance -= bal;
            
        }
        else if (to == 2 && frm == 3)
        {
            secondStakeholderBalance+= bal;
            thirdStakeholderBalance -= bal;
            
        }
        else if (to == 3 && frm == 1)
        {
            thirdStakeholderBalance+= bal;
            firstStakeholderBalance -= bal;
            
        }
        else if (to == 3 && frm == 2)
        {
            thirdStakeholderBalance+= bal;
            secondStakeholderBalance -= bal;
            
        }
            
    }
    
     function loan (int bal,int to) public
    {
        if(to == 1)
        {
            if(this.validate()==1)
            {
                bankBalance -= bal;
                firstStakeholderBalance += bal;
            }
        }
        if(to == 2)
        {
            if(this.validate()==1)
            {
                bankBalance -= bal;
                secondStakeholderBalance += bal;
                
            }
        }
        if(to == 3)
        {
            if(this.validate()==1)
            {
                bankBalance -= bal;
                thirdStakeholderBalance += bal;
            }
        }
    }
    
}