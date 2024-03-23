<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'developer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

//        $this->prepareData();

        $profile = Profile::find(1);

        $worker = Worker::find(1);

        dd($worker->profile->toArray());

        return 0;
    }

    private function prepareData()
    {
        $workerData = [
            'name'=>'Kirill',
            'surname'=>'Dolbnya',
            'email' => 'kirill@gmail.com',
            'age'=>20,
            'description'=>'im Kirill',
            'is_married'=>false,
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id'=>$worker->id,
            'city'=>'Moscow',
            'skill'=>'Coder',
            'experience'=>5,
            'finished_study_at'=>'2020-06-01',
        ];

        $profile = Profile::create($profileData);

        dd($profile->id);
    }
}
