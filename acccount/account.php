<?php
class Account
{
    public $accountNum;
    public $balance;

    public function __construct($accountNum)
    {
        $this->accountNum = $accountNum;
        $this->balance = 0;
    }
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited={$amount} in {$this->accountNum} account number and current balance={$this->balance}\n";
    }
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdraw={$amount} from {$this->accountNum} account number and current balance={$this->balance}\n";
        } else {
            echo "{$amount} Can't Withdraw. Insufficient Balance!!, Current balance={$this->balance} \n";
        }
    }
    public function getBalance()
    {
        return "Available Balance=" . $this->balance . PHP_EOL;
    }
}

// $rahim = new Account("Rahim-2456");
// $rahim->deposit(1000);
// $rahim->deposit(500);
// $rahim->withdraw(3000);

// echo $rahim->getBalance();
