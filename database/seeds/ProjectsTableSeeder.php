<?php

use Illuminate\Database\Seeder;

use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [ "name" => "Project 1" ],
            [ "name" => "Project 2" ],
            [ "name" => "Project 3" ]
        ];

        foreach( $projects as $project ){
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->save();
        }
    }
}
