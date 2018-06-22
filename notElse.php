<?php

  public function store()
  {
    $input = Request::all();
    $validation = Validator::make($input, ['username' => 'required']);

    if (date('l') == 'Friday') {
      throw new Exception("We do not work on Friday!!");
    }

    if ($validation->pasess()) {
      return Redirect::back()->withInput()->withErrors($validation);
    }

    Post::create($input);
    return Redirect::home();
  }

  public function singUp(Subscription $subscription)
  {
    $subscription->create();
  }

  public function getSubscriptionType($type)
  {
    if ($type == 'forever') {
      return new ForeverSubscription;
    }

    return new MonthlySubscription;
  }

  $subscription = getSubscriptionType($type);

  singUp($subscription);

 ?>
