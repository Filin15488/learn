<?php

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
        $this->price = (float) $price;
        $this->client = new human;
        $this->client->class_init($client_surname,$client_name,$client_patronymic);
        $this->employee = new human;
        $this->employee->class_init($employee_surname,$employee_name,$employee_patronymic);
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