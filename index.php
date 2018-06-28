<?php 
	
	// $person1_name = 'Peter';
	// $person1_speciality = 'Programmer';
	// $person1_age = 30;

	// function person1_hello($name, $spec, $age)
	// {
	// 	echo "Привет, меня зовут $name! Я работаю $spec. Мне $age лет.";
	// }

	// person1_hello($person1_name, $person1_speciality, $person1_age);

	// $person2_name = 'Jane';
	// $person2_speciality = 'Florist';
	// $person2_age = 28;

	// function person2_hello($name, $spec, $age)
	// {
	// 	echo "<br>Привет, меня зовут $name! Я работаю $spec. Мне $age лет.";
	// }

	// person2_hello($person2_name, $person2_speciality, $person2_age);

	// Создаем класс
	// class Person {
	// 	public $name;
	// 	public $speciality;
	// 	public $age;

	// 	public function greet($name, $spec, $age) {

	// 		echo "<br>Привет, меня зовут $name! Я работаю $spec. Мне $age лет.";
			
	// 	}
	// }

	// $person1 = new Person;

	// $person1 -> name = 'John';
	// $person1 -> speciality = 'programmer';
	// $person1 -> age = 30;

	// $person1 -> greet($person1 -> name, $person1 -> speciality, $person1 -> age = 30);
	

	// тоже самое но с использованием конструктора
	class Person {
		public $name;
		public $speciality;
		public $age;

		// конструктор. Эта функция запускается сама в момент создания новой персоны
		public function __construct($name, $spec, $age){
			$this->name = $name;
			$this->speciality = $spec;
			$this->age = $age;
		}

		public function greet() {

			echo "<br>Привет, меня зовут ".$this->name."! Я работаю ".$this->speciality.". Мне ".$this->age." лет.";
			
		}
	}

	// создаем новую персону и сразу передаем параметы в конструктор
	$person1 = new Person('John', 'programmer', 30);
	$person1 -> greet();

	echo "<br><br><br>";

	$person2 = new Person('Jane', 'florist', 28);
	$person2 -> greet();

 ?>