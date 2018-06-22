<?php

/**
 * Class UsersController
 */
class UsersController
{

  //Variables
  protected $userService;

  protected $stripe;

  protected $mailer;

  protected $logger;

  function __construct(
    UserService $userService,
    Stripe $stripe,
    Mailer $mailer,
    Logger $logger
  )
  {
    # code...
  }
}

/**
 * AuthController
 */
class AuthController
{

  protected $registrationService;

  function __construct(RegistrationService $registrationService)
  {
    $this->registrationService = $registrationService;
  }
}


/**
 * Class UserService
 */
class UserService
{

  protected $userRepository;

  protected $userEventRepository;

  function __construct(UserRepository $userRepository, UserEventRepository $userEventRepository)
  {
    $this->userRepository = $userRepository;
    $this->userEventRepository = $userEventRepository;
  }
}



 ?>
