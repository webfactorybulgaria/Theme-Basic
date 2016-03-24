<?php

use Illuminate\Database\Seeder;
use TypiCMS\Modules\Translations\Models\Translation;
use TypiCMS\Modules\Slides\Models\Slide;
use TypiCMS\Modules\Partners\Models\Partner;
use TypiCMS\Modules\Blocks\Models\Block;
use TypiCMS\Modules\Pages\Models\Page;
use Faker\Factory as Faker;

class ThemeBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        DB::table('slides')->truncate();
        DB::table('slide_translations')->truncate();

        DB::table('partners')->truncate();
        DB::table('partner_translations')->truncate();

        DB::table('blocks')->truncate();
        DB::table('block_translations')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
*/


        $faker = Faker::create();

        /* Pages */
        Page::create([
            'module' => 'partners',
            'en' => [
                'slug' => 'partners',
                'uri' => 'partners', 
                'title' => 'Partners',
                'status' => 1,
                'body' => ''
            ],
            'fr' => [
                'slug' => 'partners',
                'uri' => 'partners', 
                'title' => 'Partners',
                'status' => 1,
                'body' => ''
            ],
            'nl' => [
                'slug' => 'partners',
                'uri' => 'partners', 
                'title' => 'Partners',
                'status' => 1,
                'body' => ''
            ],
        ]);


        /* Translations */
        Translation::create([
            'group' => 'db',
            'key' => 'Copyright',
            'en' => ['translation' => 'Made by Webfactory']
        ]);
        Translation::create([
            'group' => 'db',
            'key' => 'Home',
            'en' => ['translation' => 'Home']
        ]);


        /* Slides */
        for ($i = 1; $i <= 3; $i++){

           Slide::create([
                'position' => $i,
                'page_id' => 1,
                'image' => 'uploads/basic/theme-basic-'.$i.'.jpg',
                'en' => [
                    'status' => 1,
                    'body' => '<p>Slide '.$i.'</p>'
                ]
            ]);
        }

        /* Partners */
        for ($i = 1; $i <= 4; $i++){

           Partner::create([
                'position' => $i,
                'homepage' => 1,
                'image' => 'uploads/basic/theme-basic-'.($i+3).'.jpg',
                'en' => [
                    'status' => 1,
                    'title' => $faker->company,
                    'slug' => 'partner-'.$i,
                    'summary' => $faker->paragraph,
                    'body' => '<p>'.$faker->text.'</p>'
                ]
            ]);
        }

        /* BLOCKS */
        Block::create([
            'name' => 'Homepage-Features',
            'en' => [
                'status' => 1,
                'body' => '<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Modern Business Features</h2>
</div>

<div class="col-md-6">
<p>The Modern Business template by Start Bootstrap includes:</p>

<ul>
    <li><strong>Bootstrap v3.2.0</strong></li>
    <li>jQuery v1.11.0</li>
    <li>Font Awesome v4.1.0</li>
    <li>Working PHP contact form with validation</li>
    <li>Unstyled page elements for easy customization</li>
    <li>17 HTML pages</li>
</ul>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
</div>

<div class="col-md-6"><img alt="" class="img-responsive" src="http://placehold.it/700x450" /></div>
</div>
<hr>
'
            ]
        ]);
        Block::create([
            'name' => 'Homepage-CTA',
            'en' => [
                'status' => 1,
                'body' => '<div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>
'
            ]
        ]);
        Block::create([
            'name' => 'Homepage-Highlights',
            'en' => [
                'status' => 1,
                'body' => '<div class="row">
<div class="col-lg-12">
<h1 class="page-header">Modern Theme</h1>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">
<h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
</div>

<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
<a class="btn btn-default" href="#">Learn More</a></div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">
<h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
</div>

<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
<a class="btn btn-default" href="#">Learn More</a></div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading">
<h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
</div>

<div class="panel-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
<a class="btn btn-default" href="#">Learn More</a></div>
</div>
</div>
</div>
'
            ]
        ]);


    }
}
