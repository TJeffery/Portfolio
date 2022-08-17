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
            'name' => 'Game Development',
            'body' => 'Having has a focus towards game development throughouut my studies, I have plenty of experienace and knowledge
            in game development. I have honed these skills having created many games in my bachelors, honors, masters, and my time at Hearoes.
             Environments include, Unity, Online, Virtual Reality, Unreal Engine.',
            'imageURL' => 'console'
        ], [
            'name' => 'Application Development',
            'body' => 'Although similar to game development, app development is more about utility and data management then straight user interaction.
            Along with Game development, my experience in app development expands into a variety of media:
            PC, Mobile (Apple, android), Console, Web browser',
            'imageURL' => 'appDev'
        ],
            [
                'name' => 'Database Development',
                'body' => 'During all of my software development, database design and management has been key to implamentation.
                I am confident in these skills to effectively and securely manage data involved in software development and user security.',
                'imageURL' => 'database'
            ]
        ]);
        DB::table('experiences')->insert([[
            'name' => 'Hearoes',
            'body' => 'Hearoes is an application for helping those with hearing loss understand and identify sounds.
            Collaborating with experts in the auditory fields, Hearoes revolutionalises the process for patients to become accustom to their surroundings.',
            'imageURL' => 'console',
            'link' => 'https://www.games4hearoes.com/'
        ], [
            'name' => 'Griffith University - Masters',
            'body' => 'Consitantly placing among the top 2% of universities, Griffith university produces top graduates, I am no exception.
            Graduating with a Masters of Information Technology in 2022, my major is Software Develoment and Support, I have excelled in these studies and my skills reflect justly.',
            'imageURL' => 'appDev',
            'link' => 'https://www.griffith.edu.au/study/degrees/master-of-information-technology-5612'
        ], [
            'name' => 'University of Canberra - Honours',
            'body' => 'Research Honours in digital art and design. My practical research project was developing virtual reality horror games.
            This improved my skills in combining research with realworld application, by developing a Virtual Reality horror game elements identifies in research and testing their effectivness.
            This research resulted in a short horror game, a published paper, and present my research at a conference',
            'imageURL' => 'database',
            'link' => 'https://www.canberra.edu.au/course/298JA/1/2022#:~:text=The%20Bachelor%20of%20Arts%20and,major%20in%20which%20they%20received'
        ], [
            'name' => 'University of Canberra - Bachelors',
            'body' => 'Ranked in the top 10 universities in Australia, Universtiy of Canberra taught me everything needed for game development, and more than prepared me for Masters.
                Projects focus on practical results resulted in developing projects at all stages of study.',
            'imageURL' => 'database',
            'link' => 'https://www.canberra.edu.au/course/ARB302/1/2022'
        ]

        ]);
//        DB::table('knowldge')->insert([
//            [
//                'name'=> ,
//                'experiece_id'=> '1',
//                'body'=>
//            ],[],[]
//        ]);
    }
}
