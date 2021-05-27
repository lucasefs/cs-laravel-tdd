<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $bank_image;

        return [
            'title' => $this->faker->company,
            'agency' => $this->faker->randomNumber(3),
            'account_number' => $this->faker->randomNumber(5),
            'balance' => $this->faker->randomNumber(4),
            'balance_initial' => $this->faker->randomNumber(4),
            'bank_id' => $this->faker->numberBetween(1, 170),
            'bank_image' => $bank_image ?: $bank_image = 'none.jpg',
        ];
    }
}
