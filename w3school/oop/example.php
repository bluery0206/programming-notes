<?php

declare(strict_types=1);


function validateLength(string $text, int $n_chars, string $field): void {
    if (strlen($text) < $n_chars) {
        $err_msg = ucwords($field) ." must be at least $n_chars characters long.";
        throw new Exception($err_msg);
    }
}

function validateValue(int $number, string $field, int $min = 0 , int $max = 1000): void {
    if ($number < $min) {
        $err_msg = ucwords($field) ." must be at least $min.";
        throw new Exception($err_msg);
    }
}

class Person {
    const EXIT_MSG = "<br>Exited " . __CLASS__;

    protected string $name;
    protected int $age;

    // Gets called when an instance is created
    function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    // Called when the script has stopped or exited
    function __destruct() {
        echo self::EXIT_MSG;
    }

    public function setName(string $newName): void {
        validateLength($newName, 1, "name");
        $sanitizedName = filter_var($newName, FILTER_SANITIZE_STRING);
        $this->name = $sanitizedName;
    } 

    public function setAge(int $newAge): void {
        validateValue(
            number: $newAge, 
            min: 1,
            field: "age"
        );
        $sanitizedAge = intval(filter_var($newAge, FILTER_SANITIZE_NUMBER_INT));
        $this->age = $sanitizedAge;
    } 

    // Equivalent to Python's __str__() dunder method
    public function __toString(): string {
        return (string)get_class($this);
    }
}


class User extends Person{
    protected string $username;
    protected string $password;

    function __construct($username, $password, $name, $age) {
        parent::__construct($name, $age);

        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function setUsername(string $newUsername): void {
        validateLength(
            text: $newUsername, 
            n_chars: 4, 
            field: "username"
        );
        $sanitizedUsername = filter_var($newUsername, FILTER_SANITIZE_STRING);
        $this->username = $sanitizedUsername;
    }

    public function setPassword(string $newPassword): void {
        validateLength(
            text: $newPassword, 
            n_chars: 8, 
            field: "password"
        );
        $sanitizedPassword = filter_var($newPassword, FILTER_SANITIZE_STRING);
        $hashed_password = password_hash($sanitizedPassword, PASSWORD_DEFAULT);
        $this->password = $hashed_password;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getPassword(): string {
        return $this->password;
    }
}

try {
    $user = new User(
        username: "aori",
        password: "@dmin123",
        name: "Ryan",
        age: 12
    );

    echo $user->getPassword();
}
catch (Exception $e) {
    echo $e->getMessage();
}