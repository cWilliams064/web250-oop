<?php

class User extends DatabaseObject {
  
  static protected $table_name = 'users';
  static protected $db_columns = ['id', 'firstName', 'lastName', 'email', 'username', 'userLevel', 'hashedPassword'];

  public $id;
  public $firstName;
  public $lastName;
  public $email;
  public $username;
  public $userLevel;
  protected $hashedPassword;
  public $password;
  public $confirmPassword;

  public function __construct($args=[]) {
    $this->id = $args['id'] ?? '';
    $this->firstName = $args['firstName'] ?? '';
    $this->lastName = $args['lastName'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->username = $args['username'] ?? '';
    $this->userLevel = $args['userLevel'] ?? '';
    $this->password = $args['password'] ?? '';
    $this->confirmPassword = $args['confirmPassword'] ?? '';
  }

  public function fullName() {
    return "{$this->firstName} {$this->lastName}";
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->firstName)) {
      $this->errors[] = "First Name cannot be blank!";
    }
    
    if(is_blank($this->lastName)) {
      $this->errors[] = "Last Name cannot be blank!";
    }
    return $this->errors;
  }

}
