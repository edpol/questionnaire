<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = "questions";
        $filename = $name . ".csv";
        if (($handle = fopen("database/seeds/data/".$filename, "r")) !== FALSE) {
            $row = 1;
            $records = array();
            $skip_header_row = fgetcsv($handle, 1000, ",");
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $records[] = [
                    'id' => $data[0],
                    'order' => $data[0],
                    'heading_id' => (empty($data[1])) ? null : $data[1],
                    'question' => $data[2],
                    'type' => $data[3],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
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
