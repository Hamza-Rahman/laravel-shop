<?php

use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$product = new \App\Product([
    		'imagePath'=> 'https://www.abebooks.com/images/books/harry-potter/deathly-hallows.jpg',
    		'title' => 'Herry Potter Part-8',
    		'description'=> 'this is harry potter of  dethly ...',
    		'price' => '20'
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath'=> 'http://prodimage.images-bn.com/pimages/9781338099133_p0_v5_s1200x630.jpg',
    		'title' => 'Herry Potter Part-2',
    		'description'=> 'this is harry potter of part 2 and 1 ...',
    		'price' => '25'
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath'=> 'https://cdn1.lockerdome.com/uploads/cffe96b1be312e5b2d836d62bb0c76a7ee2ce9377d8e360cc68fea6405b97efa_large',
    		'title' => 'Herry Potter and sorsere stone',
    		'description'=> 'this is harry potter beging part 1',
    		'price' => '20'
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath'=> 'http://bookriotcom.c.presscdn.com/wp-content/uploads/2014/08/HP_pb_new_5.jpg',
    		'title' => 'Herry Potter Part 6',
    		'description'=> 'this is harry potter and the order of phonix ...',
    		'price' => '20'
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagePath'=> 'http://3.bp.blogspot.com/-DQDrceFaiBo/Um-56lAIPtI/AAAAAAAAHbc/jSo4EfZojZs/s1600/2808945.jpg',
    		'title' => ' the cartelin Book',
    		'description'=> 'this is cartilin Book ..not herry potter',
    		'price' => '26'
    	]);
    	$product->save();
    }
}
