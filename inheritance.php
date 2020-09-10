<?php

class Person
{
    protected $name;
    protected $age;
  
    protected function setName($name)
    {
        $this->name = $name;
    }
    
    protected function setAge($age)
    {
        $this->age = $age;
    }
    
    protected function greetings()
    {
        return 'Selamat pagi';
    }
    
    protected function introduce()
    {
        return "Nama saya $this->name dan umur saya $this->age tahun" . PHP_EOL;  
    }
}

class Student extends Person
{
    public function setName($name)
    {
        parent::setName($name);
    }
    
    public function setAge($age)
    {
        parent::setAge($age);   
    }
    
    public function salaam()
    {
        return $this->greetings();
    }
    
    public function introduce()
    {
        return parent::introduce();
    }
}

$student = new Student;
$student->setName('Fadlan Diyanuar');
$student->setAge(16);

echo $student->salaam();
echo "\n"; //New line
echo $student->introduce();

?>