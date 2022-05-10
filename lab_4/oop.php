<?php


class Person {
    private string $name;
    private int $age;

    /**
     * @throws Exception if name or age is invalid
     */
    function __construct(string $name, int $age = 18) {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @throws Exception if the name is empty
     */
    public function setName(string $name): void {
        if (empty($name)) {
            throw new Exception("The name cannot be empty");
        }
        $this->name = $name;
    }

    /**
     * @throws Exception if the age is negative
     */
    public function setAge(int $age): void {
        if ($age < 0) {
            throw new Exception("The age cannot be negative");
        }
        $this->age = $age;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }
}


try {
    $ivan = new Person("Ivan", 28);
    echo $ivan->getName() . " --> " . $ivan->getAge() . "<br>";
}
catch (Exception $e) {
    echo $e->getMessage(), "<br>";
}


class Employee extends Person {
    private int $salary;

    function __construct($name, $age, $salary) {
        parent::__construct($name, $age);
        $this->setSalary($salary);
    }

    /**
     * @throws Exception if salary is negative
     */
    public function setSalary(int $salary): void {
        if ($salary < 0) {
            throw new Exception("The salary cannot be negative");
        }
        $this->salary = $salary;
    }

    public function getSalary(): int {
        return $this->salary;
    }
}


try {
    $ivan = new Employee("Ivan", 28, 20000);
    echo $ivan->getName() . " --> " . $ivan->getAge() . " --> " . $ivan->getSalary() . "<br>";
}
catch (Exception $e) {
    echo $e->getMessage(), "<br>";
}
