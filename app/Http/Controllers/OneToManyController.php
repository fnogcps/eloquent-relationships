<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

class OneToManyController extends Controller
{
    //

    public function OneToMany(){

    	//$country = Country::where('name','Brasil')->get()->first();

    	$keySearch = "a";
    	$countries = Country::where('name','LIKE', "%{$keySearch}%")->with('states')->get();

    	foreach ($countries as $country) {
    		echo "<b>{$country->name}</b>";

	    	$states = $country->states;

	    	foreach ($states as $state) {
	    		echo "<hr>{$state->name} - {$state->initials}";
	    	}

	    	echo "<hr>";

    	}

    }

    //
    public function ManyToOne(){

    	$stateName = "São Paulo";
    	$state = State::where('name', $stateName)->get()->first();

    		echo "<b>{$state->name}</b>";

    	$country = $state->country;

    	echo "<br>{$country->name}";

    }


    public function OneToManyTwo(){ 

    	$keySearch = "a";
    	$countries = Country::where('name','LIKE', "%{$keySearch}%")->with('states')->get();

    	foreach ($countries as $country) {
    		echo "<b>{$country->name}</b>";

	    	$states = $country->states;

	    	foreach ($states as $state) {
	    		echo "<hr>{$state->name} - {$state->initials}: ";

		    		foreach ($state->cities as $city) {
		    			echo "{$city->name}, ";
		    		}
	    	}

	    	echo "<hr>";

    	}

    }

    public function OneToManyInsert(){

    	$dataForm =[
    	'name' => 'Bahia',
    	'initials' => 'BA',
    	];

    	$country = Country::find(1);

    	$insertState = $country->states()->create($dataForm);

    	var_dump($insertState);
    }


    public function OneToManyInsertTwo(){

    	$dataForm =[
    	'name' => 'Amazonas',
    	'initials' => 'AM',
    	'country_id' => '1',
    	]; 

    	$insertState = State::create($dataForm);

    	var_dump($insertState->name);
    }

    public function hasManyThrough(){


    	$country = Country::find(1);

    	echo $country->name;

    	$cities = $country->cities;

    	foreach ($cities as $city) {

    		echo " {$city->name}, ";

    	}



    		echo "<br>Total: {$city->count()} ";
  
    }

}
