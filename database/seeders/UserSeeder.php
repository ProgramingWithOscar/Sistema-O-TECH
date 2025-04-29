<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Importar Hash si no está ya

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        // Definir los datos del usuario a crear
        $userData = [
            'email' => 'admin@gmail.com',
            'password' => env('PASSWORD_ADMIN', 'claStDCaNO4gkamwGh4y'),  // Usar 'env' correctamente en minúsculas
        ];

        // Crear el usuario con los datos proporcionados
        User::create([
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']), // Usar Hash::make para encriptar la contraseña
        ]);
    }
}
