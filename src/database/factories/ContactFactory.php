<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{

    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    
    public function definition()
    {
        return [
            'first_name' => $this->faker->lastName,
            'last_name' => $this->faker->firstName,
            'gender' => $this->faker->numberBetween(1,3),
            'email'=> $this->faker->safeEmail(),
            'tel'=> $this->faker->phoneNumber(),
            'adress' => $this->faker->address(),
            'building'=> $this->faker->secondaryAddress(),
            
            'detail'=> $this->faker->text(125),
        ];
    }
}
