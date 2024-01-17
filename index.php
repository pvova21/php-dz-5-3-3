<?php

require_once 'classes/Person.php';
require_once 'classes/PeopleList.php';

// Создаем объект класса Person
$person = new Person('John Doe', 30, 'john_doe');

// Сериализуем объект
$serializedPerson = serialize($person);
echo "Serialized: $serializedPerson\n";

// Заменяем логин в строке (пример)
$modifiedSerializedPerson = str_replace('john_doe', 'new_login', $serializedPerson);

// Десериализуем объект
$deserializedPerson = unserialize($modifiedSerializedPerson);
echo "Deserialized: $deserializedPerson\n";

// Создаем объект класса PeopleList
$peopleList = new PeopleList();
$peopleList->addPerson(new Person('Alice', 25, 'alice_login'));
$peopleList->addPerson(new Person('Bob', 35, 'bob_login'));

// Используем foreach для вывода объектов Person
foreach ($peopleList as $person) {
    echo $person . "\n";
}
