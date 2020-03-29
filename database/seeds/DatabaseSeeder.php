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
            'value'=>'https://www.linkedin.com/in/yarnoboelens',
            'isLink'=>true
        ]);

        \App\SiteMeta::create([
            'name'=>'Email',
            'value'=>'yarnoboelens@gmail.com'
        ]);

        \App\SiteMeta::create([
            'name'=>'Dutch Phone Number',
            'value'=>'+31 642498359'
        ]);

        \App\SiteMeta::create([
            'name'=>'Polish Phone Number',
            'value'=>'+48 664601446'
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
            'name'=>'LPL Pro',
            'desc'=>'<img src="/images/portfolio/lpl_pro.png" onclick="openOverlay(\'lpl_pro.png\')" alt="LPL Pro" style="width:100%;"><p>LPL Pro is a platform to view information on loading stations for electric vehicles. This platform consists of a map (made using the <a href="http://leafletjs.com/">Leaflet</a> JavaScript Library) that shows the loading stations and graphs with statistics for all the loading stations within a certain area or an individual station. It is possible to filter the map and the graphs on station operators, regions (cities or municipalities) and a time period (up to 2 years back).</p><p>This web application was created by RanIT, which was a project group during my computer science course. The aim of this project was to process and provide usage information of loading stations to municipalities and loading station operators, these parties will use this information to decide where to place or remove loading stations.</p><p>This project was created using jQuery, Bootstrap and SCSS for the front-end, and Java and MySQL for the back-end.</p><p>I was/am responsible for connecting the front-end with the back-end and integration of the retrieved data, creating the RESTful Java API, as well as various designing and styling tasks.</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Print.com',
            'link'=>'https://print.com',
            'desc'=>'<p>Print.com is a Dutch start-up focussed on providing quality printed goods for a fair price. Part of this process is an software infrastructure used for placing, processing and shipping orders. I worked as part of a team of software developers to create and improve this infrastructure and work on various applications. The majority of these applications are created using Vue.js for the front-end and TypeScript for Serverless back-end microservices. For data storage DynamoDB, provided as part of the Amazon Web Services platform, is utilized. I worked on various projects, one that I worked on by myself is the SatisfactionService and customer satisfaction form that are used for collecting feedback from customers in the applications.</p><img src="/images/portfolio/customer_satisfaction.gif" onclick="openOverlay(\'customer_satisfaction.gif\')" alt="Customer Satisfaction Form" style="width:100%;"><p>This GIF shows the form as it was implemented in the web application that regular customers use for ordering their printed goods. The way this service is set up allows for the creation of satisfaction forms in any part of the Print.com infrastructure and allows the developers to further improve the software based on real time feedback. At the time of writing, over 2100 customers have rated the ordering experience an average of 4.47 stars.'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Boelens Techniek Apeldoorn',
            'link'=>'https://github.com/yarwest/Boelens-Techniek',
            'desc'=>'<img src="/images/portfolio/boelens_techniek.png" onclick="openOverlay(\'boelens_techniek.png\')" alt="Boelens Techniek Apeldoorn" style="width:100%;"><p>Boelens Techniek Apeldoorn is a company founded by my father which is aimed at providing services in mechanical and electrical engineering. To advertise this company I designed and created a webpage with information on the business as well as posibilities to contact said company. The front-end is created using Bootstrap, SCSS and plain JavaScript, and handles minor user interaction and form validation. The back-end is also created using JavaScript and is responsible for additional validation of the form data and emailing it.</p>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classy Cakery',
            'link'=>'https://github.com/yarwest/Sample-Portfolio',
            'desc'=>'<p>This is an example portfolio web page that I created to showcase the possibilities for such an application. The application is build using Laravel and Bootstrap.</p><img src="/images/portfolio/classy_cakery.png" onclick="openOverlay(\'classy_cakery.png\')" alt="Classy Cakery" style="width:100%;">'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Compean and Sons website',
            'desc'=>'<div style="text-align:center;"><img src="/images/portfolio/compean_sons1.png" onclick="openOverlay(\'compean_sons1.png\')" alt="Compean and Sons" style="width:50%;"></div><p>The Compean and Sons platform was created for the orchard business owned by the family of Sergio Compean. This platform allows users to view products, see at which markets these products will be available, and reserve products to pick up at a market of their choosing.<br>The project is build using Laravel, Bootstrap, SCSS, and jQuery.</p><p>During this project I worked on the various sections of the admin panel in combination with the related CRUD tasks, the integration of the <a href="https://github.com/Trexology/laravel-pointable">Pointable package</a> to reward users for placing orders and referrals by giving them points which they can use for a discount, and lastly parts of the checkout process.</p><div style="text-align:center;"><img src="/images/portfolio/compean_sons2.png" onclick="openOverlay(\'compean_sons2.png\')" alt="Compean and Sons" style="width:50%;"></div>'
        ]);

        \App\PortfolioItem::create([
            'name'=>'Classwork',
            'desc'=>'<img src="/images/portfolio/classwork_register.png" onclick="openOverlay(\'classwork_register.png\')" alt="Classwork" style="width:100%;"><p>Classwork is a project that I created for a freelance client using plain PHP and Bootstrap. The platform is used for schools, where teachers can create classes and generate attendance codes. The students can register for a class and fill in one of the codes to prove their attendance. There is also an option for the students to send a ticket to the teacher when they did not receive a code. Both accounts can be registered and teacher accounts have to be approved by an admin.</p><img src="/images/portfolio/classwork_generate.png" onclick="openOverlay(\'classwork_generate.png\')" alt="Classwork Generate Codes" style="width:47.5%; margin-right:5%;"><img src="/images/portfolio/classwork_codes.png" onclick="openOverlay(\'classwork_codes.png\')" alt="Classwork Codes" style="width:47.5%;">'
        ]);
    }
}
