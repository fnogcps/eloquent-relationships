<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    //

    public function polymorphic(){

    	$city = City::where('name', 'Sorocaba')->get()->first();

    	echo $city->name;

    	$comments = $city->comments()->get();

    	foreach ($comments as $comment) {
    		echo "<br>{$comment->description}";
    	}




    }
    //

    public function polymorphicInsert(){

    	// $city = City::where('name', 'Sorocaba')->get()->first();

    	// echo $city->name;

    	// $comment = $city->comments()->create([
    	// 	'description' => "Novo Comentário {$city->name} ".date('YmdHsi'),
    	// 	]);

    	// var_dump($comment);

    	// $state = State::where('name', 'São paulo')->get()->first();

    	// echo $state->name;

    	// $comment = $state->comments()->create([
    	// 	'description' => "Novo Comentário {$state->name} ".date('YmdHsi'),
    	// 	]);

    	// var_dump($comment);

    	$country = Country::where('name', 'Brasil')->get()->first();

    	echo $country->name;

    	$comment = $country->comments()->create([
    		'description' => "Novo Comentário {$country->name} ".date('YmdHsi'),
    		]);

    	var_dump($comment);


    }
}
