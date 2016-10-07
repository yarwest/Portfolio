<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SiteMetaSeeder::class);
        $this->call(MemberSeeder::class);
    }
}

class SiteMetaSeeder extends Seeder
{
    /**
     * Run the Site Meta seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SiteMeta::create([
            'name'=>'Github',
            'value'=>'https://github.com/yarwest',
            'isLink'=>true
        ]);

        \App\SiteMeta::create([
            'name'=>'LinkedIn',
            'value'=>'https://www.linkedin.com/in/yarno-boelens-16b611a4',
            'isLink'=>true
        ]);

        \App\SiteMeta::create([
            'name'=>'Email',
            'value'=>'YarnoBoelens@gmail.com'
        ]);

        \App\SiteMeta::create([
            'name'=>'Phone Number',
            'value'=>'0031 642498359'
        ]);
    }

}

class MemberSeeder extends Seeder
{
    /**
     * Run the Member seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Member::create([
            'name'=>'Sergio Compean',
            'img_name'=>'sergio_compean.jpg',
            'desc'=>'The creator of the Compean collaboration, Laravel and Adobe Coldfusion enthausiast',
            'website'=>'http://compeanandsons.com/',
            'github'=>'surgiie'
        ]);

        \App\Member::create([
            'name'=>'Oussama Bennaci',
            'img_name'=>'oussama_bennaci.jpg',
            'desc'=>'The man that is responsible for nearly all of the amazing visuals that you see, and much more',
            'website'=>'http://oussamabennaci.com/',
            'github'=>'Gostwow'
        ]);

        \App\Member::create([
            'name'=>'Jonas Hansen',
            'img_name'=>'jonas_hansen.jpg',
            'desc'=>'Basically, a walking fortress and library. Looking for anything Linux related or amazing feature/technologies? this is your man!',
            'github'=>'sasin91'
        ]);

        \App\Member::create([
            'name'=>'Derrek Bertrand',
            'img_name'=>'derrek_bertrand.jpg',
            'desc'=>'The man, the myth, the legend.....',
            'github'=>'derrekbertrand'
        ]);
    }

}
