<?php
/**
 * Created by PhpStorm.
 * User: Oleg
 * Date: 03.05.2019
 * Time: 21:15
 */

namespace peroln\Widgets;

class Widget
{
    protected $widgets;
    public function __construct()
    {
        $this->widgets = config('widgets');
    }
    public function show($obj, $data = []){
        if(isset($this->widgets[$obj])){
            $obj = app()->make($this->widgets[$obj],$data);
            return $obj->execute();
        }
    }
}