<?php
class PeopleList implements Iterator {
    private $people = [];
    private $position = 0;

    public function addPerson(Person $person) {
        $this->people[] = $person;
    }

    public function current() {
        return $this->people[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->people[$this->position]);
    }
    
}
