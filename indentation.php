<?php

/**
 * Class BanlAccounts
 */
class BankAccounts
{

  protected $accounts;

  public function __construct($accounts)
  {
    $this->accounts = $accounts;
  }

  public function filterBy($accountType)
  {
    $filtered = [];

    foreach ($this->accounts as $account)
    {
      // If the account is of the type that was requested
      if ($this->isOfType($accountType, $account))
      {
        $filtered[] = $account;
      }
    }

    return $filtered;
  }

  private function isOfType($accountType, $account)
  {
    return $account->type() == $accountType && $account->isActive();
  }

}

/**
 * Class Account
 */
class Account
{

  protected $type;

  private function __construct($type)
  {
    $this->type = $type;
  }

  public static function open($type)
  {
    return new static($type);
  }

  public function type()
  {
    return $this->type;
  }

  public function isActive()
  {
    return true;
  }

}

$accounts = [
  Account::open('checking'),
  Account::open('savings'),
  Account::open('checking'),
  Account::open('savings')
];

$bankAccounts = new BankAccounts($accounts);

$savings = $bankAccounts->filterBy('checking');

var_dump($savings);

 ?>
