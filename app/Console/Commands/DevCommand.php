<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
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




//        $profile = Profile::find(1);
//        dd($worker->profile->toArray());

//        $worker = Worker::find(1);
//        $position = Position::find(2);
//
//
//        dd($position->workers->toArray());
//        dd($worker->position->toArray());

//        $this->prepareManyToMany();

        $worker = Worker::find(1);

        $project = Project::find(1);

//        $worker->projects()->attach($worker->id); добавить
//        $worker->projects()->toggle($project->id); добавить и удалить если существует
//        $project->workers()->sync($worker->id); добавляет и удаляет все что до него было
//        $project->workers()->detach($worker->id); удаляет

        return 0;
    }

    private function prepareData()
    {
        $position1 = Position::create([
            'title' => 'Back-end'
        ]);
        $position2 = Position::create([
            'title' => 'Designer'
        ]);

        $workerData = [
            'name'=>'Kirill',
            'surname'=>'Dolbnya',
            'email' => 'kirill@gmail.com',
            'age'=>20,
            'description'=>'im Kirill',
            'is_married'=>false,
            'position_id'=>$position1->id,
        ];

        $workerData2 = [
            'name'=>'Vlad',
            'surname'=>'Romanenko',
            'email' => 'Vlad@gmail.com',
            'age'=>20,
            'description'=>'im Vlad',
            'is_married'=>false,
            'position_id' => $position1->id,
        ];

        $workerData3 = [
            'name'=>'Dima',
            'surname'=>'Hilov',
            'email' => 'Dima@gmail.com',
            'age'=>19,
            'description'=>'im Dima',
            'is_married'=>true,
            'position_id' => $position2->id,
        ];

        $workerData4 = [
            'name'=>'Daniil',
            'surname'=>'Smirnov',
            'email' => 'Daniil@gmail.com',
            'age'=>20,
            'description'=>'im Daniil',
            'is_married'=>false,
            'position_id'=>$position2->id,
        ];

        $workerData5 = [
            'name'=>'Nikita',
            'surname'=>'Ivanov',
            'email' => 'Nikita@gmail.com',
            'age'=>20,
            'description'=>'im Nikita',
            'is_married'=>false,
            'position_id' => $position1->id,
        ];

        $workerData6 = [
            'name'=>'Nikita',
            'surname'=>'Biev',
            'email' => 'Biev@gmail.com',
            'age'=>19,
            'description'=>'im Nikita',
            'is_married'=>true,
            'position_id' => $position2->id,
        ];

        $worker = Worker::create($workerData);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);

        $profileData = [
            'worker_id'=>$worker->id,
            'city'=>'Moscow',
            'skill'=>'Coder',
            'experience'=>5,
            'finished_study_at'=>'2020-06-01',
        ];

        $profileData2 = [
            'worker_id'=>$worker2->id,
            'city'=>'Stavropol',
            'skill'=>'Coder',
            'experience'=>1,
            'finished_study_at'=>'2021-06-01',
        ];

        $profileData3 = [
            'worker_id'=>$worker3->id,
            'city'=>'Stavropol',
            'skill'=>'Coder',
            'experience'=>1,
            'finished_study_at'=>'2022-06-01',
        ];

        $profileData4 = [
            'worker_id'=>$worker4->id,
            'city'=>'Oslo',
            'skill'=>'Coder',
            'experience'=>5,
            'finished_study_at'=>'2020-06-01',
        ];

        $profileData5 = [
            'worker_id'=>$worker5->id,
            'city'=>'New-York',
            'skill'=>'Designer',
            'experience'=>1,
            'finished_study_at'=>'2021-06-01',
        ];

        $profileData6 = [
            'worker_id'=>$worker6->id,
            'city'=>'London',
            'skill'=>'Manager',
            'experience'=>1,
            'finished_study_at'=>'2022-06-01',
        ];

        Profile::create($profileData);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);
        Profile::create($profileData5);
        Profile::create($profileData6);
    }

    public function prepareManyToMany()
    {
        $workerManager = Worker::find(6);
        $workerDesigner = Worker::find(5);
        $workerBackend = Worker::find(1);
        $workerFrontend = Worker::find(2);

        $project1 = Project::create([
            'title' => 'shop'
        ]);

        $project2 = Project::create([
            'title' => 'teatr'
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDesigner->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerBackend->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerFrontend->id
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id
        ]);

        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerBackend->id
        ]);

    }
}
