<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Stock;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "items";
        $filename = $name . ".csv";
        if (($handle = fopen("database/seeds/data/".$filename, "r")) !== FALSE) {
            $row = 1;
            $records = array();
            $skip_header_row = fgetcsv($handle, 1000, ",");
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                $max = Stock::latest('id')->first();
                if ($data[2]<1 || $data[2]>$max->id){
                    echo "Index does not exist in STOCK table ";
                    print_r($data);
                    dd();
                }
                $records[] = [
                    'id'          => $data[0],
                    'answer_id'   => $data[1],
                    'stock_id'    => $data[2],
                    'add'         => ($data[3]=='TRUE') ? true : false,
                    'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'  => Carbon::now()->format('Y-m-d H:i:s')
                ];
                $row++;
            }
            if($row>1) {
                // inserts everything in the array
                DB::table($name)->insert($records);
            }
            fclose($handle);
        }
    }
}
