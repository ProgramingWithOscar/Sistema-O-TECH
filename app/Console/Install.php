<?php

namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    protected $signature = 'kontabi:install';
    protected $description = 'Instala el sistema ejecutando comandos dinámicos de los módulos.';

    protected $commandsList = [
        'usermanagement:install' => \App\Database\Commands\Install::class
    ];  // Lista de comandos a ejecutar

    public function handle()
    {
        $this->info('🔧 Iniciando instalación modular...');

        // Cargar comandos de todos los módulos dinámicamente
        $this->loadModuleCommands();

        // Ejecutar cada comando de la lista
        foreach ($this->commandsList as $command) {
            $this->info("⚡ Ejecutando comando: {$command}");

            // Ejecutar el comando usando Artisan::call()
            $this->call($command);

            $this->info("✅ Comando '$command' ejecutado correctamente.");
        }

        $this->info('✅ Instalación completada.');
        return Command::SUCCESS;
    }

    private function loadModuleCommands()
    {
        // Suponiendo que cada módulo tiene un archivo 'commands.php' que retorna una lista de comandos
        $modulesPath = base_path('database');

        if (!is_dir($modulesPath)) {
            $this->error('No existe el directorio de módulos.');
            return;
        }

        // Leer todos los módulos en el directorio 'modules'
        foreach (scandir($modulesPath) as $module) {
            if ($module === '.' || $module === '..') {
                continue;
            }

            $commandsFile = $modulesPath . '/' . $module . '/Install.php';

            if (file_exists($commandsFile)) {
                // Cargar los comandos de cada módulo
                $moduleCommands = require $commandsFile;

                // Asegurarse de que es un array
                if (is_array($moduleCommands)) {
                    // Agregar los comandos del módulo a la lista de comandos a ejecutar
                    $this->commandsList = array_merge($this->commandsList, $moduleCommands);
                } else {
                    $this->error("El archivo 'Install.php' del módulo '$module' no contiene un array válido de comandos.");
                }
            }
        }

        // Asegurarse de que la lista no esté vacía
        if (empty($this->commandsList)) {
            $this->error('No se encontraron comandos válidos en los módulos.');
        }
    }
}
