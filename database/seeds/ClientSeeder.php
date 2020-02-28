<?php

use Illuminate\Database\Seeder;

use App\Owner;
use App\Pet;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(public_path('jsondata.json')));
        var_dump($data);

        foreach($data as $singleRow) {

        $owner = new Owner;
        $owner->first_name = $singleRow->first_name;
        $owner->surname = $singleRow->surname;
        $owner->save();
        
        foreach ($singleRow->pets as $singlePet) {
            $pet = new Pet;
            $pet->name = $singlePet->name;
            $pet->breed = $singlePet->breed;
            $pet->weight = $singlePet->weight;
            $pet->age = $singlePet->age;
            $pet->photo = $singlePet->photo;
            $pet->owner_id = $owner->id;
            $pet->save();
        }

        
        
        }

    }
}
