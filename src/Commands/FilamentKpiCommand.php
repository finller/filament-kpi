<?php

namespace Finller\FilamentKpi\Commands;

use Illuminate\Console\Command;

class FilamentKpiCommand extends Command
{
    public $signature = 'filament-kpi';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
