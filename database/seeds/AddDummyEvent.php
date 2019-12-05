<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['event_name'=>'get together','event_venue'=>'gaborone sun',
            'start_date'=>'2019-11-28 07:36:58
            ','end_date'=>'2019-11-28 15:36:58
            ','start_time'=>
            '13:01:00','end_time'=>'17:01:00'],
            ['event_name'=>'Su UK in Bots','event_venue'=>'Woodlane',
            'start_date'=>'2017-11-11','end_date'=>'2017-11-12','start_time'=>
            '13:01:00','end_time'=>'17:01:00'],
            ['event_name'=>'tsodilo visit','event_venue'=>'tsodilo',
            'start_date'=>'2017-11-15','end_date'=>'2017-11-15','start_time'=>
            '13:01:00','end_time'=>'17:01:00'],
            
        ];

        foreach ($data as $key => $value) {
        	Event::create($value);
        }
        
    }
}
/*
$table->string('event_name');
            $table->string('event_venue');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');*/