<?php
require 'account.php';
class SavingAccount extends Account
{
    public $accountNum;
    private $accountName;
    public function __construct($accountNum, $accountName)
    {
        parent::__construct($accountNum);
        $this->accountName = $accountName;
    }
    public function savingAccountInfo()
    {
        echo "Saving Account Name:{$this->accountName}" . PHP_EOL;
        echo "Saving Account Number:{$this->accountNum}" . PHP_EOL;
    }
}
$savingRahim = new SavingAccount("rahim-2456", "Rahim Miah");
$savingRahim->savingAccountInfo();
$savingRahim->deposit(1000);
$savingRahim->withdraw(200);
echo $savingRahim->getBalance();
$savingRahim = new SavingAccount("karim-14257", "Karim Uddin");
$savingRahim->savingAccountInfo();
$savingRahim->deposit(2000);
$savingRahim->withdraw(2500);
echo $savingRahim->getBalance();
