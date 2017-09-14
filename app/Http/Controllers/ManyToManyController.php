<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    //
    public function ManyToMany(){

    	$city = City::where('name', 'Campinas')->get()->first();

    	echo "<b>{$city->name}:</b><br>";

    	$companies = $city->companies;

    	foreach ($companies as $company) {
    		echo "{$company->name}, ";
    	}

    }
    //
    public function ManyToManyInverse(){

    	$company = Company::where('name', 'Apple')->get()->first();

    	echo "<b>{$company->name}:</b><br>";

    	$cities = $company->cities;

    	foreach ($cities as $city) {
    		echo "{$city->name}, ";
    	}

    }
    //
    public function ManyToManyInsert(){

    	$company = Company::find(1);

    	$dataForm = [1,2,3];


    	echo "<b>{$company->name}:</b><br>";

    	$company->cities()->attach($dataForm);
    	//$company->cities()->sync($dataForm);
    	//$company->cities()->detach($dataForm);


    	$cities = $company->cities;

    	foreach ($cities as $city) {
    		echo "{$city->name}, ";
    	}

    }


}
