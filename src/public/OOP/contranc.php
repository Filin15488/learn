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

class contract 
{
    private $begin_date;
    private $end_date;
    private $description;
    private $price;
    private $client;
    private $employee;
    // инициализация объекта
    public function init_object (
        $begin_date,
        $end_date,
        $description,
        $price,
        $client_name,
        $client_surname,
        $client_patronymic,
        $employee_name,
        $employee_surname,
        $employee_patronymic
    )
    {
        $this->begin_date = $begin_date;
        $this->end_date = $end_date;
        $this->description = $description;
        $this->client->name = $client_name;
        $this->client->surname = $client_surname;
        $this->client->patronymic = $client_patronymic;
        $this->employee->name = $employee_name;
        $this->employee->surname = $employee_surname;
        $this->employee->patronymic = $employee_patronymic;
    }
    public function get_begin_date ()
    {
        return $this->begin_date;
    }
    public function get_end_date ()
    {
        return $this->end_date;
    }
    public function get_description ()
    {
        return $this->description;
    }
    public function get_price () 
    {
        return $this->price;
    }
}


$client = new human;
$client->class_init('Евродимов','Борис','Геннадиевич');

$employee = new human;
$employee->class_init("Мариханов", "Валерий", "Анатольевич");

$contract = new contract;
$contract->init_object(time(),
                        time() + 8640*30,
                        'описание контракта',
                        "1000.00",
                        $client->get_name(),
                        $client->get_surname(),
                        $client->get_patronymic(),
                        $employee->get_name(),
                        $employee->get_surname(),
                        $employee->get_patronymic()
                        
);
echo "<pre>";
print_r($contract);