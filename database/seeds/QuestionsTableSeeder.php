<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();
        DB::table('questions')->insert(['question'=>'Aklında tuttuğun şey canlı mı?', 'selectyes'=>2,'selectno'=>4,'answer'=>null]);
        DB::table('questions')->insert(['question'=>'Bu şey düşünebilir mi?', 'selectyes'=>null,'selectno'=>3,'answer'=>'İnsan']);
        DB::table('questions')->insert(['question'=>'Bu şey miyavlar mı?', 'selectyes'=>null,'selectno'=>1,'answer'=>'Kedi']);
        DB::table('questions')->insert(['question'=>'Bu şey bir yazılım mı?', 'selectyes'=>null,'selectno'=>1,'answer'=>'Comer']);
    }
}
