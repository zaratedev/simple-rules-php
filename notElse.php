<?php

  public function store()
  {
    $input = Request::all();
    $validation = Validator::make($input, ['username' => 'required']);

    if (date('l') !== 'Friday') {
      if ($validation->passes()) {
        Post::create($input);
        return Redirect::home();
      } else {
        return Redirect::back()->withInput()->withErrors($validation);
      }
    } else {
      throw new Exception("We do not work on Friday!!");
    }
  }

 ?>
