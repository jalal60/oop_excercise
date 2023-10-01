<?php
//Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". 
//Implement methods to deposit and withdraw money from the account.
class BankAccount
{
    private $accountNum;
    private $accountName;
    private $balance;
    public function __construct($accountNum, $accountName, $balance)
    {
        $this->accountNum = $accountNum;
        $this->accountName = $accountName;
        $this->balance = $balance;
    }
    public function getAccountNum()
    {
        return $this->accountNum;
    }
    public function getAccounName()
    {
        return $this->accountName;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited $amount to Account $this->accountNum , $this->accountName\n";
        echo "New Balance: $this->balance\n";
    }
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNum. New balance: $this->balance\n";
        } else {
            echo "Want to withdrawn $amount?\n";
            echo "Insufficient balance in account $this->accountNum. Current balance: $this->balance\n";
        }
    }
}

$rahim = new BankAccount("SB-1234", "Rahim", 0);
echo "Account Number:" . $rahim->getAccountNum() . PHP_EOL;
echo "Account Name:" . $rahim->getAccounName() . PHP_EOL;
echo "Account Balance:" . $rahim->getBalance() . PHP_EOL;
$rahim->deposit(1000);
$rahim->withdraw(300);
echo PHP_EOL;

$Karim = new BankAccount("SB-55145", "Karim", 0);
echo "Account Number:" . $Karim->getAccountNum() . PHP_EOL;
echo "Account Name:" . $Karim->getAccounName() . PHP_EOL;
echo "Account Balance:" . $Karim->getBalance() . PHP_EOL;
$Karim->deposit(2000);
$Karim->withdraw(3500);
