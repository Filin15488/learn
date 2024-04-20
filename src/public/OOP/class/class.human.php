<?php

class human {
    private $surname;
    private $name;
    private $patronymic;
    private $age;
    public function class_init (string $surname, string $name, string $patronymic)
    {
       $this->surname = $surname;
       $this->name = $name;
       $this->patronymic = $patronymic;
    }
    public function set_age ($age)
    {
        $age = intval($age);
        if ($age >= 18 && $age <= 65)
        {
            $this->age = $age;
        }
    }
    public function get_name() {
        return $this->name;
    }
    public function get_surname () {
        return $this->surname;
    }
    public function get_patronymic () {
        return $this->patronymic;
    }
}