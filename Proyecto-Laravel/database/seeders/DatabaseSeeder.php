<?php

namespace Database\Seeders;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Servicio::create(['nombre' => 'Cortes de cabello', 'precio' => 30]);
        Servicio::create(['nombre' => 'Tintes y mechas', 'precio' => 120]);
        Servicio::create(['nombre' => 'Planchados y peinados', 'precio' => 50]);
        Servicio::create(['nombre' => 'Manicura o pedicura', 'precio' => 50]);

        User::firstOrCreate(
            ['email' => 'admin@naiara.com'],
            [
                'name' => 'Naiara',
                'password' => Hash::make('salon2026'),
            ]
        );
    }
}
