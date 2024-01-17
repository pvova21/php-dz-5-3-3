<?php
class Person implements Serializable {
    private $name;
    private $age;
    private $login;

    public function __construct($name, $age, $login) {
        $this->name = $name;
        $this->age = $age;
        $this->login = $login;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function serialize() {
        return serialize([$this->name, $this->age, $this->login]);
    }

    public function unserialize($data) {
        list($this->name, $this->age, $this->login) = unserialize($data);
    }

    public function __toString() {
        return "Name: {$this->name}, Age: {$this->age}, Login: {$this->login}";
    }
}

