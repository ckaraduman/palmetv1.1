<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AutoJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RunTime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Palmet Time Schedule Jobs';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $record=DB::connection('mysql')->table('test')->insert(
                            [
                              'name'=>'Deneme'
                            ]
                        );
        Storage::append('file.txt', 'Cem İlker Karaduman - görev tamamlandı!');
        // return Command::SUCCESS;
    }
}
