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
  protected $passwordRequired = true;

  public const USER_LEVEL_OPTIONS = [
    'a' => 'Admin',
    'm' => 'Member'
  ];

  public function user_level() {
    if($this->userLevel === 'a' || $this->userLevel === 'm') {
      return self::USER_LEVEL_OPTIONS[$this->userLevel];
    }
    else {
      return "Unknown";
    }
  }

  public function __construct($args=[]) {
    $this->id = $args['id'] ?? '';
    $this->firstName = $args['firstName'] ?? '';
    $this->lastName = $args['lastName'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->username = $args['username'] ?? '';
    $this->userLevel = $args['userLevel'] ?? 'm';
    $this->password = $args['password'] ?? '';
    $this->confirmPassword = $args['confirmPassword'] ?? '';
  }

  public function fullName() {
    return "{$this->firstName} {$this->lastName}";
  }

  protected function set_hashed_password() {
    $this->hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
  }

  public function verify_password($password) {
    return password_verify($password, $this->hashedPassword);
  }

  protected function create() {
    $this->set_hashed_password();
    return parent::create();
  }

  protected function update() {
    if($this->password != '') {
      $this->set_hashed_password();
      // Validate
    }
    else {
      $this->passwordRequired = false;
      // Skip
    }
    return parent::update();
  }

  protected function validate() {
    $this->errors = [];
  
    if(is_blank($this->firstName)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->firstName, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "First name must be between 2 and 255 characters.";
    }
  
    if(is_blank($this->lastName)) {
      $this->errors[] = "Last name cannot be blank.";
    } elseif (!has_length($this->lastName, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Last name must be between 2 and 255 characters.";
    }
  
    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_length($this->email, array('max' => 255))) {
      $this->errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    }
  
    if(is_blank($this->username)) {
      $this->errors[] = "Username cannot be blank.";
    } elseif (!has_length($this->username, array('min' => 8, 'max' => 255))) {
      $this->errors[] = "Username must be between 8 and 255 characters.";
    } elseif (!has_unique_username($this->username, $this->id ?? 0)) {
      $this->errors[] = "Username not allowed. Try another.";
    }
  
    if($this->passwordRequired) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }
    }
  
    if(is_blank($this->confirmPassword)) {
      $this->errors[] = "Confirm password cannot be blank.";
    } elseif ($this->password !== $this->confirmPassword) {
      $this->errors[] = "Password and confirm password must match.";
    }
  
    return $this->errors;
  }  

  static public function find_by_username($username) {
    $sql = "SELECT * FROM " . static::$table_name;
    $sql .= " WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    }
    else {
      return false;
    }
  } 
}
