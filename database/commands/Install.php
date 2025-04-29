<?php

namespace App\Database\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usermanagement:install';  // No recibimos parámetros del usuario

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ejecuta una lista de seeders predefinidos';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Aquí puedes definir manualmente las rutas de los seeders
        $seeders = [
            'Database\\Seeders\\UserSeeder',  // Seeder 1
        ];

        // Iteramos sobre cada seeder y lo ejecutamos
        foreach ($seeders as $seeder) {
            try {
                $this->info("Ejecutando el seeder: $seeder");
                $this->call('db:seed', ['--class' => $seeder]);  // Ejecutamos el seeder
                $this->info("Seeder '$seeder' ejecutado correctamente.");
            } catch (\Exception $e) {
                $this->error("Error al ejecutar el seeder '$seeder'.");
                $this->error($e->getMessage());
            }
        }
    }
}
