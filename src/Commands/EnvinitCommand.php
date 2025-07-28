<?php

declare(strict_types=1);

namespace Jordanpartridge\ConduitEnvmanager\Commands;

use Illuminate\Console\Command;

class EnvinitCommand extends Command
{
    protected $signature = 'env:init';

    protected $description = 'Sample command for env-manager component';

    public function handle(): int
    {
        $this->info('🚀 env-manager component is working!');
        $this->line('This is a sample command. Implement your logic here.');
        
        return 0;
    }
}