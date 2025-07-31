<?php

class Person
{
    // public string $name;
    // public int $age;

    public function __construct(public string $name, public int $age) {}

    public function introduce(): string
    {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

class Employee extends Person
{
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    public function introduce(): string
    { // Call the parent method to get the base introduction
        // and append the position information
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

$people = [
    new Employee("Jan Ramil", 25, "Software Engineer"),
    new Person("Intong", 24)
];

function introduce(Person $person)
{
    echo $person->introduce() . "\n";
}

foreach ($people as $person) {
    introduce($person);
}
