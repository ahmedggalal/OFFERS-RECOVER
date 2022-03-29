<?php

namespace App\Console\Commands;

use App\Services\CorruptedOffersService;
use Illuminate\Console\Command;

class RecoverCommandCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'offers:recover';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Recover The Offers Corrupted Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CorruptedOffersService $corruptedOffersService)
    {
       $corruptedOffersService->recoverCorruptedStrings();
    }
}
