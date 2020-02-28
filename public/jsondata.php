<?php

namespace App;
use Owner;
use Pet;

$data = json_decode(file_get_contents('jsondata.json'), true);
var_dump($data);

foreach($data as $singleRow) {

  $owner = new Owner;
  $owner->first_name = $singleRow->first_name;
  $owner->surname = $singleRow->surname;
  $owner->save();
  dd($owner);
    $pet = new Pet;
    $pet->name = $singleRow->pets->name;
    $pet->breed = $singleRow->pets->breed;
    $pet->weight = $singleRow->pets->weight;
    $pet->age = $singleRow->pets->age;
    $pet->photo = $singleRow->pets->photo;
    $pet->owner_id = $owner->id;

  
  $pet->save();
}









?>

