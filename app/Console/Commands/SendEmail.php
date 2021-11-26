<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Seller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Responsavel por enviar o email';

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
    public function handle()
    {
        $today = Carbon::now('PST');

        $totalSale = DB::table('sellers')
                    ->join('sales', 'sellers.id', '=', 'sales.seller_id' )
                    ->select(DB::raw('sum(sales.total_amount) as value, sellers.name,sellers.email'))
                    ->whereDate('sales.dt_sale', $today)
                    ->groupBy('sales.seller_id')
                    ->get();


        foreach ($totalSale as $total) {

            \Mail::to("$total->email")->send(new \App\Mail\MyTestMail($total));

        }
    }
}
