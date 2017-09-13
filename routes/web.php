<?php

//One to One
$this->get('one-to-one', 'OneToOneController@OneToOne');
//One to One Reverse
$this->get('one-to-one-reverse', 'OneToOneController@OneToOneInverse');
//One to One Insert
$this->get('one-to-one-insert', 'OneToOneController@OneToOneInsert');


//One to Many
$this->get('one-to-many', 'OneToManyController@OneToMany');
//Many to One
$this->get('many-to-one', 'OneToManyController@ManyToOne'); 
//One to Many Two
$this->get('one-to-many-two', 'OneToManyController@OneToManyTwo');
//One to Many Insert
$this->get('one-to-many-insert', 'OneToManyController@OneToManyInsert');
//One to Many Insert
$this->get('one-to-many-insert-two', 'OneToManyController@OneToManyInsertTwo');


//One to Many Insert
$this->get('has-many-trough', 'OneToManyController@hasManyThrough');



Route::get('/', function () {
    return view('welcome');
});
