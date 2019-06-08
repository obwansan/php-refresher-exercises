<?php
/*
  // *********************************************************
  // Add and access object properties directly - BAD PRACTICE!
  // *********************************************************

  class Person {
    // access modifier: public, private, protected
    public $name;
    public $email;
  }

  // Instantiate a Person object
  // Note: can prefix the object property with a $ or not
  $person1 = new Person;

  // Bad practice. Should make properties private and use a getter function
  $person1->name = 'John Doe';

  echo $person1->name;

// ***********************************************************
// Use getters and setters to add and access object properties
// ***********************************************************

  class Person {
    // access modifier: public, private, protected
    private $name;
    private $email;

    public function __construct() {
      echo 'Person created';
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      return $this->name;
    }

    public function setEmail($name) {
      $this->email = $email;
    }

    public function getEmail() {
      return $this->email;
    }
  }

  // Instantiate a Person object
  $person1 = new Person;

  // Good practice: Make properties private and use setters and getters
  $person1->setName('John Doe');
  $person1->setEmail('John@Doe.com');

  // echo $person1->getName();
  // echo $person1->getEmail();

  // ********************************************************
  // Use the constructor function to add properties to object
  // ********************************************************

  */

  class Person {
    // access modifier: public, private, protected
    private $name;
    private $email;

    // Can access static class properties directly. Don't have to instantiate an object. Has to be public.
    public static $ageLimit1 = 16;

    // Use a getter if property is private (better practice)
    private static $ageLimit2 = 18;

    // Is called when a new Person object is instantiated
    public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
      echo __CLASS__ . ' created<br>';
    }

    // Can destroy a class after it's been instantiated. The destructor method will be called as soon as there are no other references to a particular object.
    // public function __destruct() {
    //   echo __CLASS__ . ' destroyed<br>';
    // }

    public function getName() {
      return $this->name.'<br>';
    }

    public function getEmail() {
      return $this->email.'<br>';
    }

    public static function getAgeLimit() {
      return self::$ageLimit2.'<br>';
    }
  }

  // Instantiate a Person object
  // $person1 = new Person('John Doe', 'jdoe@gmail.com');

  // echo $person1->getName();
  // echo $person1->getEmail();


  // ********************************************************
  // INHERITANCE - Extending classes
  // ********************************************************

  class Customer extends Person {
    private $balance;

    public function __construct($name, $email, $balance) {
      parent::__construct($name, $email);
      $this->balance = $balance;
    }

    public function setBalance($balance) {
      $this->balance = $balance;
    }

    public function getBalance() {
      return $this->balance.'<br>';
    }
  }

  $customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);
  
  echo $customer1->getBalance();
  echo $customer1->getName();
  echo $customer1->getEmail();

  // Accessing a static class property using a getter
  echo Person::getAgeLimit();

   // Accessing a static class property directly (has to be public)
   echo Person::$ageLimit1;





















