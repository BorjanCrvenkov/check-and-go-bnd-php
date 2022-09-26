<?php


namespace Database\Factories;

use App\Models\Image;
use App\Models\PaymentPlan;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['first_name' => "string", 'last_name' => "string", 'date_of_birth' => "\DateTime", 'embg' => "string", 'email' => "string", 'password' => "string", 'image_id' => "mixed", 'role_id' => "mixed", 'payment_plan_id' => "mixed"])] public function definition(): array
    {
        return [
            'first_name'      => $this->faker->firstName(),
            'last_name'       => $this->faker->lastName(),
            'date_of_birth'   => $this->faker->dateTimeThisCentury(),
            'embg'            => $this->faker->numberBetween(0, 1000000000000),
            'email'           => $this->faker->unique()->email(),
            'password'        => 'Password!23',
            'image_id'        => Image::factory(),
            'role_id'         => Role::factory(),
            'payment_plan_id' => PaymentPlan::factory(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     *
     * @return static
     */
    public function admin(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('name', '=', Role::ADMINISTRATOR)->first()->getKey()
            ];
        });
    }

    /**
     *
     * @return static
     */
    public function business(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('name', '=', Role::BUSINESS)->first()->getKey()
            ];
        });
    }

    /**
     *
     * @return static
     */
    public function employee(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('name', '=', Role::EMPLOYEE)->first()->getKey()
            ];
        });
    }

    /**
     *
     * @return static
     */
    public function customer(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::where('name', '=', Role::CUSTOMER)->first()->getKey()
            ];
        });
    }
}
