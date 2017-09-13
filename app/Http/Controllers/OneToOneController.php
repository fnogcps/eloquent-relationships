<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

use App\Models\Location;

class OneToOneController extends Controller
{
    //
    public function OneToOne(){

    	$country = Country::where('name','Brasil')->get()->first();

    	echo $country->name;

    	$location = $country->location->get()->first();

    	echo "<hr>Lat: {$location->latitude} <br> Long: {$location->longitude} ";

    }
    //
    public function OneToOneInverse(){

    	 $latitude = "123";
    	 $longitude = "456";

    	 $location = Location::where('latitude', $latitude)
    	 						->where('longitude', $longitude)
    	 						->get()->first();

    	 $country = $location->country;
    	 echo $country->name;

    }
    //
    public function OneToOneInsert(){

    	 $dataForm = [
    	 'name'      => 'Japao',
    	 'latitude'  => 777,
    	 'longitude' => 111,
    	 ];

    	 $country = Country::create($dataForm);

    	 //Para País sem Localização
    	 //$country = Country::where('name', 'existente')->get()->first(); 

    	 $location =  $country->location()->create($dataForm);
    	 var_dump($location);
    }
}
