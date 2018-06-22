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

 ?>
