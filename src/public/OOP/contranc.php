<?php
require_once("./class/class.human.php");
require_once("./class/class.contract.php");


$client = new human;
$client->class_init('Евродимов','Борис','Геннадиевич');

$employee = new human;
$employee->class_init("Мариханов", "Валерий", "Анатольевич");

$contract = new contract;
$contract->init_object(time(),
                        time() + 86400*30,
                        'описание контракта',
                        10000,
                        $client->get_name(),
                        $client->get_surname(),
                        $client->get_patronymic(),
                        $employee->get_name(),
                        $employee->get_surname(),
                        $employee->get_patronymic()
                        
);
echo "<pre>";
print_r($contract);