<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "headings";
        $filename= $name . ".csv";
        if (($handle = fopen("database/seeds/data/".$filename, "r")) !== FALSE) {
            $row = 1;
            $records = array();
            $skip_header_row = fgetcsv($handle, 1000, ",");
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $records[] = [
                    'id' => $data[0],
                    'heading' => $data[1],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ];
                $row++;
            }
            fclose($handle);
            if($row>1) {
                // inserts everything in the array
                DB::table($name)->insert($records);
            }
        }
    }
}
