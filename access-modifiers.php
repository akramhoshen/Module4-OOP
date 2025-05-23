<?php 

class BankAccount {

    //public $balance = 0; accessable
    //private $balance = 0; //only access in this class
    protected $balance = 0; //only access in this class and child class

    public function deposit($amount){  //setter
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function getBalance(){ //getter
        return $this->balance;
    }
}

class subAccount extends BankAccount{  //only access protected and public file in child class
    public function WithDraw($amount){
        $this->balance -= $amount;
    }
}

$account = new BankAccount();
$account->deposit(500);
//$account->balance = 500; //not access directly if private and protected
echo $account->getBalance();

echo "\n";

//child instance
$subaccount = new subAccount();
$subaccount->deposit(100); //deposite blance assign
$subaccount->WithDraw(50);
echo $subaccount->getBalance(); //now showing withdraw adjust update balance