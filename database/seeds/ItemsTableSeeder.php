<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                $records[] = [
                    'id'          => $data[0],
                    'name'        => $data[1],
                    'sku'         => $data[2],
                    'link'        => $data[3],
                    'price'       => $data[4],
                    'description' => $data[5],
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
