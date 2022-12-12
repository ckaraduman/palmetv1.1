<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class TestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yazici';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Komut Açıklaması';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        Storage::append('file.txt', 'Cem İlker Karaduman ');
    }
}
