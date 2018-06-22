<?php

/**
 * Class UsersController
 */
class UsersController
{

  //Variables
  protected $userService;

  protected $registrationService;

  protected $userRepository;

  protected $stripe;

  protected $mailer;

  protected $userEventRepository;

  protected $logger;

  function __construct(
    UserService $userService,
    RegistrationService $registrationService,
    UserRepository $userRepository,
    Stripe $stripe,
    Mailer $mailer,
    UserEventRepository $userEventRepository,
    Logger $logger
  )
  {
    # code...
  }
}


 ?>
