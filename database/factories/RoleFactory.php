<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $label = $this->faker->unique()->randomElement([
            'Owner',
            'Co-Owner',
            'Head Admin',
            'Admin',
            'Head Mod',
            'Mod',
            'Assistant Mod',
            'Helper',
            'Staff',
            'VIP',
        ]);

        $name = Str::slug($label);

        return [
            'name' => $name,
            'label' => $label,
            'description' => $label,
        ];
    }

    /**
     * Indicate that the model should be editable.
     *
     * @return static
     */

}
