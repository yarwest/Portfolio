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
            'link'=>'https://github.com/yarwest/Portfolio',
            'desc'=>'<p>I made this website by myself using mostly Laravel and Bootstrap</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classy Cakery',
            'link'=>'https://github.com/yarwest/Sample-Portfolio',
            'desc'=>'<p>This is an example portfolio web page that I created to showcase the possibilities for such an application. This project is not done but I think it paints a nice picture for possible clients. The application is build using Laravel and Bootstrap.</p><img src="/images/portfolio/classy_cakery.png" onclick="openOverlay(\'classy_cakery.png\')" alt="Classy Cakery" style="width:100%;">'
        ]);

        \App\PortfolioItem::create([
            'name'=>'LPL Pro',
            'desc'=>'<img src="/images/portfolio/lpl_pro.png" onclick="openOverlay(\'lpl_pro.png\')" alt="LPL Pro" style="width:100%;"><p>LPL Pro is a place to view information about loading stations for electric vehicles. This platform consists of a map (made using the <a href="http://leafletjs.com/">Leaflet</a> JavaScript Library) that shows the loading stations and graphs with statistics for all the loading stations within a certain area or an indiviual station. It is possible to filter the map and the graphs on station operators, regions (cities or municipalities) and a time period (up to 2 years back).</p><p>This web application was created by RanIT, which was a project group during my computer science course. The aim of this project was to process and provide usage information of loading stations to municipalities and loading station operators, these parties will use this information to decide where to place or remove loading stations.</p><p>This project was created using jQuery, Bootstrap and SASS for the front-end, and Java and MySQL for the back-end.</p><p>I was/am responsible for a number of AJAX calls and front end integration of the retrieved data, creating certain parts of the RESTful Java application, aswell as various designing and styling tasks.</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Compean and Sons website',
            'link'=>'https://github.com/surgiie/compean',
            'desc'=>'<div style="text-align:center;"><img src="/images/portfolio/compean_sons1.png" onclick="openOverlay(\'compean_sons1.png\')" alt="Compean and Sons" style="width:50%;"></div><p>The Compean and Sons platform was created for the orchard business owned by the family of Sergio Compean. This platform allows users to view all products, see at which markets these products will be available, and reserve products to pick up at a market of their choosing.<br>The project is build using Laravel, Bootstrap, SASS, and jQuery.</p><p>During this project I worked on the various sections of the admin panel in combination with the related CRUD tasks, the integration of the <a href="https://github.com/Trexology/laravel-pointable">Pointable package</a> to reward users for placing orders and referrals by giving them points which they can use for a discount, and lastly parts of the checkout process.</p><div style="text-align:center;"><img src="/images/portfolio/compean_sons2.png" onclick="openOverlay(\'compean_sons2.png\')" alt="Compean and Sons" style="width:50%;"></div>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Recipe Page',
            'desc'=>'<img src="/images/portfolio/recipe_page.png" onclick="openOverlay(\'recipe_page.png\')" alt="Recipe Page" style="width:100%;"><p>This web pages is something I started working on a while ago. It is a platform that I am making for my girlfriend with the main two purposes being a blog and a place to share recipes. Since I am Dutch and my girlfriend is Polish, this website has to be available in multiple languages, most of the sections of this website are available in English, Dutch and Polish. The currently selected language is stored in a cookie (which can be changed using the flags at the top of the page) and based on that cookie, different tabels of the database are being queried.</p><p>The project currently consists of plain PHP, HTML and CSS but I am thinking of reworking the entire thing using a PHP or JavaScript framework and a CSS preprocessor/framework (SASS, Bootstrap or both)</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classwork',
            'desc'=>'<img src="/images/portfolio/classwork_register.png" onclick="openOverlay(\'classwork_register.png\')" alt="Classwork" style="width:100%;"><p>Classwork is a project that I created for a freelance client using plain PHP and Bootstrap. The platform is used for schools, where teachers can create classes and generate attendance codes. The students can register for a class and fill in one of the codes to prove their attendance. There is also an option for the students to send a ticket to the teacher when they did not receive a code. Both accounts can be registered and teacher accounts have to be approved by an admin.</p><img src="/images/portfolio/classwork_generate.png" onclick="openOverlay(\'classwork_generate.png\')" alt="Classwork Generate Codes" style="width:47.5%; margin-right:5%;"><img src="/images/portfolio/classwork_codes.png" onclick="openOverlay(\'classwork_codes.png\')" alt="Classwork Codes" style="width:47.5%;">'
        ]);
    }
}
