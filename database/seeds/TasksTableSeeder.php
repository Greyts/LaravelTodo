<?php

use Illuminate\Database\Seeder;
use App\Models\Tasks;
use App\Models\User;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user)
        {
            $limit = random_int(10,20);

            for ($i = 0; $i < $limit; $i++) {
                
                $task = factory(Tasks::class)->make();
                $task->user()->associate($user);
                $task->save();

            }
        }
    }
}
