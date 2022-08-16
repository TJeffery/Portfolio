<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('skills')->insert([[
            'name'=> 'Game Development',
            'body'=> 'Having has a focus towards game development throughouut my studies, I have plenty of experienace and knowledge
            in game development. I have honed these skills having created many games in my bachelors, honors, masters, and my time at Hearoes.
             Environments include, Unity, Online, Virtual Reality, Unreal Engine.',
            'imageURL'=>'console'
        ],[
            'name'=> 'Application Development',
            'body'=> 'Although similar to game development, app development is more about utility and data management then straight user interaction.
            Along with Game development, my experience in app development expands into a variety of media:
            PC, Mobile (Apple, android), Console, Web browser',
            'imageURL'=>'appDev'
        ],
            [
                'name'=> 'Database Development',
                'body'=> 'During all of my software development, database design and management has been key to implamentation.
                I am confident in these skills to effectively and securely manage data involved in software development and user security.',
                'imageURL'=>'database'
            ]
        ]);
    }
}
