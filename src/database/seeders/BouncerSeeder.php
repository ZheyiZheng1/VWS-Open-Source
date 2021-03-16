<?php

namespace Database\Seeders;

use Bouncer;
use Illuminate\Database\Seeder;
use app\Models\User;
use app\Models\ParticipantUser;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        //changes here
        $superadmin = Bouncer::role()->firstOrCreate([
            'name' => 'superadmin',
            'title' => 'SuperAdministrator',
        ]);
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);
        $participant = Bouncer::role()->firstOrCreate([
            'name' => 'participant',
            'title' => 'user',
        ]);

        Bouncer::allow('superadmin')->toOwnEverything();

        Bouncer::allow('admin')->everything();
        Bouncer::forbid('admin')->toManage(User::class);
        Bouncer::forbid('admin')->to('create', User::class);

        Bouncer::allow('participant')->to('create', ParticipantUser::class);
        Bouncer::allow('participant')->to('create', Answers::class);
        Bouncer::allow('participant')->to('view', Answers::class);
        Bouncer::allow('participant')->to('view', AppendixO::class);
        Bouncer::allow('participant')->to('view', AppendixQ::class);
        Bouncer::allow('participant')->to('view', AppendixR::class);
        Bouncer::allow('participant')->to('view', SurveyUserList::class);
        Bouncer::allow('participant')->to('view', AvilableSurvey::class);




    }
}
