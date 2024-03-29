<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary); 
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "\n Error: Salary must be a positive number.";
        }
    }
}


$employee = new Employee("John Doe", 50000);

echo "Employee Name: " . $employee->getName() ;
echo "\nEmployee Salary: $" . $employee->getSalary();


$employee->setSalary(1000); 

echo "\nUpdated Employee Salary: $ " . $employee->getSalary() ;

?>
