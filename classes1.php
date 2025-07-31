<?php

class Person
{
    // public string $name;
    // public int $age;

    public function __construct(public string $name, public int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

$person1 = new Person("Jan Ramil", 25);
echo $person1->introduce() . "\n";

$person2 = new Person("Intong", 24);
echo $person2->introduce();
