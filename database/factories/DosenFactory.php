<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dosen::class;

    public function definition(): array
    {
        return [
            'nidn' => $this->faker->numerify('##########'),
            'email' => $this->faker->unique->safeEmail(),
            'nama' => $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            // 'nomor_identitas' => $this->generateNomorIdentitas()
        ];
    }

    // private function generateNomorIdentitas()
    // {
    //     $kd = 'KD';
    //     $randomNumbers = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
    //     return $kd . $randomNumbers;
    // }
}
