<?php

namespace Database\Factories;

use App\Enums\User\RoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Services\User\AssignRoleAction;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    public function admin():Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

                'email_verified_at' => now()->toDateTimeString(),
                'ACTIVED_AT' => now()->toDateTimeString(),
            ];
        })->afterCreating(function (User $user){
            app(AssignRoleAction::class)->run($user,RoleEnum::SUPER_ADMIN);
        });
    }

    public function developer(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'Разработчик',
                'email' => 'developer@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

                'email_verified_at' => now()->toDateTimeString(),
                'ACTIVED_AT' => now()->toDateTimeString(),

            ];
        })->afterCreating(function (User $user){
            app(AssignRoleAction::class)->run($user, RoleEnum::DEVELOPER);
        });
    }

}
