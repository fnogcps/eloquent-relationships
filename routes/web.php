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


//One to Many trough
$this->get('has-many-trough', 'OneToManyController@hasManyThrough');

//Many to Many 
$this->get('many-to-many', 'ManyToManyController@ManyToMany');
//Many to Many Inverse
$this->get('many-to-many-inverse', 'ManyToManyController@ManyToManyInverse');
//Many to Many Insert
$this->get('many-to-many-insert', 'ManyToManyController@ManyToManyInsert');


//Polymorphic
$this->get('polymorphic', 'PolymorphicController@polymorphic');

//Polymorphic polymorphicInsert
$this->get('polymorphic-insert', 'PolymorphicController@polymorphicInsert');



Route::get('/', function () {
    return view('welcome');
});
