<?php

   interface secretaryNeeds {
       public function printDocument();
       public function sendDocument();
   }

   interface managerNeeds {
       public function management();
   }

    class Employee {
       private $name;
       private $id;
       private $department;
       public function __construct($id, $name, $department){
           $this->name = $name;
           $this->id = $id;
           $this->department = $department;
       }

       public function getDetail(){
           return "Hi, my name is ".$this->name." with ID ".$this->id.". I'm in the department ".$this->department;
       }
   }

   class Secretary extends Employee implements secretaryNeeds {
       public function getDetail(){
           return parent::getDetail(); // TODO: Change the autogenerated stub
       }

       public function printDocument()
       {
           return "All right, give me 5 minutes and I'll give the document to you as soon as possible";
       }

       public function sendDocument()
       {
           return "All right, I'll give it to you via email";
       }
   }

   class Manager extends Employee implements managerNeeds {
       public function getDetail()
       {
           return parent::getDetail(); // TODO: Change the autogenerated stub
       }

       public function management()
       {
           // TODO: Implement management() method.
           return "Here my management functions. planning, organizing, leading, and controlling";
       }
   }

   class Developer extends Employee {
       private $frontEndTools;
       private $backEndTools;

       public function __construct($id, $name, $department, $frontEndTools, $backEndTools)
       {
           parent::__construct($id, $name, $department);
           $this->frontEndTools = $frontEndTools;
           $this->backEndTools = $backEndTools;
       }

       public function getDetail()
       {
           return parent::getDetail().". I'm using ".$this->frontEndTools." as frontend tools and ".$this->backEndTools." for backend tools"; // TODO: Change the autogenerated stub
       }
   }

   $emp01 = new Employee(1, "Raka", "IT");
   echo $emp01->getDetail()."\n";

   $emp02 = new Secretary(2, "Dita", "Sales");
   echo $emp02->getDetail()."\n";
   echo $emp02->printDocument()."\n";
   echo $emp02->sendDocument()."\n";

   $emp03 = new Manager(3, "Tulus", "IT");
   echo $emp03->getDetail()."\n";
   echo $emp03->management()."\n";

   $emp04 = new Developer(4, "Raka janitra", "IT", "ReactJs", "Express.Js and Golang");
   echo $emp04->getDetail()."\n";