<?php

 class Facade
 {
    protected $subsystem1;
    protected $subsystem2;

    public function __construct(Subsystem1 $subsystem1, Subsystem2 $subsystem2)
    {
        $this->subsystem1 = new Subsystem1();
        $this->subsystem2 = new Subsystem2();   
    }

    public function realise()
    {
         $res = $this->subsystem1->oper1();
         $res .= $this->subsystem2->oper1();
         $res .= $this->subsystem1->oper2();
         $res .= $this->subsystem2->oper2();
    }

 }

 class Subsystem1
 {
    public function oper1()
    {
        return "result";
    }

    public function oper2()
    {
        return "result";
    }
 }

 class Subsystem2
 {
    public function oper1()
    {
        return "result";
    }

    public function oper2()
    {
        return "result";
    }
 }