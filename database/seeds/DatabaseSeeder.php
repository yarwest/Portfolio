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
        $this->call(PortfolioSeeder::class);
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
            'desc'=>"Sergio Compean, is a Laravel/PHP enthusiast, who enjoys web development all the way from front end to back end ;) In his spare time he enjoys watching anime, learning new technologies, and playing video games. Sergio enjoys development so much, that he spends most of his nights researching new technologies or finding new projects to get involved in. As a result of this passion, he  became a founder of this collaboration group, Collab Corp. What started as a collaboration for help on one of his personal projects turned into creating a group where multiple new projects could be made a reality. He's only kinda cool and tends to wear mismatching socks, but that only means hes having a great day.",
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
        
        \App\Member::create([
            'name'=>'Tahnik Mustasin',
            'img_name'=>'tahnik_mustasin.jpg',
            'desc'=>'The dev with the most +1s on devRant',
            'website'=>'http://www.tahnik.com/',
            'github'=>'tahnik'
        ]);
    }

}

class PortfolioSeeder extends Seeder
{
    /**
     * Run the Portfolio seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PortfolioItem::create([
            'name'=>'This website',
            'link'=>'http://yarnoboelens.com/',
            'desc'=>'I made this website by myself using mostly Laravel and Bootstrap'
        ]);
        
        \App\PortfolioItem::create([
            'name'=>'Compean and Sons website',
            'link'=>'https://github.com/surgiie/compean',
            'desc'=>'The Compean and Sons platform was created for the orchard bussiness owned by the family of Sergio Compean. This platform allows users to view all products, see at which markets these products will be available, and reserve products to pick up at a market of choosing.',
            'compean_collab'=>true
        ]);

        \App\PortfolioItem::create([
            'name'=>'Laravel Eloquent Cart Package',
            'link'=>'https://github.com/collab-corp/EloquentShoppingCart',
            'desc'=>'Collab Corp decided to make this package after using a session based shopping cart package. We decided to work on this since we like working with Laravel and Eloquent, and we saw advantages of having a database based cart implementation (for example: viewing a cart on the same account using multiple devices).',
            'compean_collab'=>true
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classy Cakery',
            'link'=>'https://github.com/yarwest/Sample-Portfolio',
            'desc'=>'This is an example portfolio web page that I created to showcase the possibilities for such an application. This project is not done but I think it paints a nice picture for possible clients. The application is build using Laravel and Bootstrap.</p><img src="/images/portfolio/classy_cakery.png" alt="Classy Cakery" style="width:100%;"><p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'LPL Pro',
            'desc'=>'</p><img src="/images/portfolio/lpl_pro.png" alt="LPL Pro" style="width:100%;"><p>LPL Pro is a place to view information about loading stations for electric vehicles. This platform consists of a map (made using the <a href="http://leafletjs.com/">Leaflet</a> JavaScript Library) that shows the loading stations and graphs with statistics for all the loading stations within a certain area or an indiviual station. It is possible to filter the map and the graphs on station operators, regions (cities or municipalities) and a time period (up to 2 years back).</p><p>This web application was created by RanIT, which was a project group during my computer science course. The aim of this project was to process and provide usage information of loading stations to municipalities and loading station operators, these parties will use this information to decide where to place or remove loading stations.</p><p>This project was created using jQuery, Bootstrap and SASS for the front-end, and Java and MySQL for the back-end.'
        ]);
    }

}
