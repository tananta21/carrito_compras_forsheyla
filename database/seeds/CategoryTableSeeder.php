<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' => 'Celulares',
				'slug' => 'celulares',
				'icon' => 'fa fa-mobile',
				'description' => 'categoria para la venta de celulares',
				'color' => '#440022'
			],
			[
                'name' => 'Computadoras',
                'slug' => 'computadoras',
                'icon' => 'fa fa-laptop',
                'description' => 'categoria para la venta de computadoras',
                'color' => '#440022'
			],
            [
                'name' => 'Moda',
                'slug' => 'moda',
                'icon' => 'fa fa-shopping-bag',
                'description' => 'categoria para la venta de moda',
                'color' => '#440022'
			],
            [
                'name' => 'Motocicletas',
                'slug' => 'motocicletas',
                'icon' => 'fa fa-motorcycle',
                'description' => 'categoria para la venta de motocicletas',
                'color' => '#440022'
			],
            [
                'name' => 'Deporte',
                'slug' => 'deporte',
                'icon' => 'fa fa-futbol-o',
                'description' => 'categoria para la venta de deportes',
                'color' => '#440022'
			],
            [
                'name' => 'Electrodomesticos',
                'slug' => 'electrodomesticos',
                'icon' => 'fa fa-video-camera',
                'description' => 'categoria para la venta de electrodomesticos',
                'color' => '#440022'
			]




		);

		Category::insert($data);
    }
}
