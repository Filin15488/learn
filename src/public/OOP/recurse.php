<?php
class recurce {
    public function list ($params)
    {
        if (is_array($params)){
            foreach ($params as $val) 
            {
                $this->list($val);
            }
        }
        else echo "$params<br>";
        
    }
}

$arr = [
    "1" => [11,12,13],
    "2" => [21,22,23],
    "3" => [31,32,33]
];

$obj = new recurce;
$obj->list($arr);