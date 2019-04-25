<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\User;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$task = new Task;
        $task->description = 'Revisar prueba técnica';
        $task->save();

        $user = User::find([1, 2]);
        $task->users()->attach($user);
    }
}
