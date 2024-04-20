<?php
class point 
{
    public function get_point ($x, $y)
    {
        $obj = new point();
        $obj->set_point($x,$y);
        return $obj;
        
    }


    public function get_x ()
    {
        return $this->x;
    }
    public function get_y () 
    {
        return $this->y;
    }
    // private
    private $x;
    private $y;
    private function set_point ($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}