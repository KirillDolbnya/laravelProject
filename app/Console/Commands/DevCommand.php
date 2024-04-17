<?php

namespace App\Console\Commands;

use App\Models\Avatar;
use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Project;
use App\Models\Review;
use App\Models\Tag;
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
//        $this->prepareManyToMany();

        $worker = Worker::find(6);

        $worker->forceDelete();



//        $worker = Worker::withTrashed()->find(1); //получение всех пользователей включая удаленных
//        $worker->restore(); // восстановление удаленного пользователя



//            dd($worker->toArray());

//        $workers = Worker::onlyTrashed()->get(); // получение только удаленных пользователей

//        dd($workers->toArray());
//
//            $worker->delete();




//        $profile = Profile::find(1);
//        dd($worker->profile->toArray());

//        $worker = Worker::find(1);
//        $position = Position::find(2);
//
//
//        dd($position->workers->toArray());
//        dd($worker->position->toArray());


//        $worker = Worker::find(1);
//
//        $project = Project::find(1);

//        $worker->projects()->attach($worker->id); добавить
//        $worker->projects()->toggle($project->id); добавить и удалить если существует
//        $project->workers()->sync($worker->id); добавляет и удаляет все что до него было
//        $project->workers()->detach($worker->id); удаляет

//        $department = Department::find(1);
//
//        dd($department->designer->toArray());
//        dd($department->workers->toArray());

//        $worker = Worker::find(3);
//
//        dd($worker->position->department->toArray());


//        dd($worker->position->toArray());

//        $worker = Worker::find(1);
//        $client = Client::find(1);
//        $avatar = Avatar::find(1);
//
//        dd($worker->avatar->toArray());
//        dd($avatar->avatarable->toArray());


//        $client->avatar()->create([
//            'path'=>'client',
//        ]);
//        $worker->avatar()->create([
//           'path'=>'some avatar',
//        ]);

//        $worker = Worker::find(1);
//        $client = Client::find(1);



//        $worker->tags()->attach([1,3]);
//        $client->tags()->attach([2,3]);

//        $tag = Tag::find(3);
//
//        dd($worker->tags->toArray());

//        $worker->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $worker->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $worker->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $client->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $client->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $client->reviews()->create([
//           'body' => 'body 1'
//        ]);
//
//        $review = Review::find(1);
//
//        dd($review->reviewable->toArray());

        return 0;
    }

    private function prepareData()
    {
        Client::create([
           'name' => 'Bob'
        ]);

        Client::create([
            'name' => 'Will'
        ]);

        Client::create([
            'name' => 'John'
        ]);

        $department = Department::create([
            'title' => 'IT'
        ]);

        $department2 = Department::create([
            'title' => 'Analytics'
        ]);

        $position1 = Position::create([
            'title' => 'Back-end',
            'department_id' => $department->id,
        ]);
        $position2 = Position::create([
            'title' => 'Designer',
            'department_id' => $department2->id,
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


        $worker->profile()->create($profileData);
        $worker2->profile()->create($profileData2);
        $worker3->profile()->create($profileData3);
        $worker4->profile()->create($profileData4);
        $worker5->profile()->create($profileData5);
        $worker6->profile()->create($profileData6);

//        Profile::create($profileData);
//        Profile::create($profileData2);
//        Profile::create($profileData3);
//        Profile::create($profileData4);
//        Profile::create($profileData5);
//        Profile::create($profileData6);
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

        $project1->workers()->attach([
            $workerManager->id,
            $workerDesigner->id,
            $workerFrontend->id,
            $workerBackend->id,
        ]);
    }
}
