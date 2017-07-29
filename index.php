<?php

// Composer autoload
require 'vendor/autoload.php';


/** Singleton */
$config = App\Singleton\Config::getInstance();
$config2 = new Config();
$config3 = clone $config;


/** Factory */
$config = new App\Factory\Config();
$factory = new App\Factory\UploaderFactory(new App\Factory\AdapterFactory());
$uploader = $factory->make($config);


/** Adapter */
$youtube = new \App\Adapter\YouTubeAdapter(new \App\Adapter\YouTube());
echo $youtube->getViews('abc');


/** Specification */
$lesson = new \App\Specification\Lesson();
$specification = (new \App\Specification\IsActive())->isSatisfiedBy($lesson);
$userRepository = new \App\Specification\UserRepository();
$spec = new \App\Specification\EmailIsAvailable($userRepository);

$validator = new \App\Specification\Validation\Validator();
$validator->isString()->isGreaterThan(3)->withInput('ivan');
var_dump($validator->isValid());


/** Observer */
$user = new \App\Observer\User();
$event = new \App\Observer\MailingListSignUp($user);
$event->attach(new \App\Observer\UpdateMailingStatusInDatabase());
$event->attach(new \App\Observer\SubscribeUserToService());
$event->notify();


/** Decorator */
$subscription = new \App\Decorator\BasicSubscription();
$subscription = new \App\Decorator\SupportFeature($subscription);
$subscription = new \App\Decorator\AdditionalSpaceFeature($subscription);
echo $subscription->price();
echo '<br>';
echo $subscription->description();


/** Strategy */
$cat = new \App\Strategy\Cat\Cat(
    new \App\Strategy\Cat\Action\Speak\MeowAction(),
    new \App\Strategy\Cat\Action\Jump\JumpAction()
);
$lion = new \App\Strategy\Cat\Cat(
    new \App\Strategy\Cat\Action\Speak\GrowlAction(),
    new \App\Strategy\Cat\Action\Jump\JumpAction()
);
$cat->setSpeakAction(new \App\Strategy\Cat\Action\Speak\GrowlAction());
echo $cat->speak();


$config = new \App\Strategy\Config\Config(
    new \App\Strategy\Config\Parser\JsonParser()
);
$config->load(__DIR__ . '/config/database.json');
$config->setParser(new \App\Strategy\Config\Parser\ArrayParser());
$config->load(__DIR__ . '/config/database.php');
echo $config->get('sqlite.host');