<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'Сумка DG',
            'slug' => 'sumka_dg',
            'size' => 'XS',
            'color' => 'red',
            'price_old' => '5800',
            'price_new' => '5800',
            'description' => 'Сумочка высший класс, все будут завидовать',
            'image' => './img/products/product-1.jpg',
        ]);
        Product::create([
            'title' => 'Сумка DKNY',
            'slug' => 'sumka_dkny',
            'size' => 'S',
            'color' => 'black',
            'price_old' => '1800',
            'price_new' => '1800',
            'description' => 'Чудесная сумочка, Размер 21*16 см, Материал ЭКО кожа',
            'image' => './img/products/product-2.jpg',
        ]);
        Product::create([
            'title' => 'Сумка с очень длинным названием',
            'slug' => 'sumka_ochen_dlinnoe_nazvanie',
            'size' => 'L',
            'color' => 'black',
            'price_old' => '6000',
            'price_new' => '6000',
            'description' => 'Подойдет для дам всех возрастов',
            'image' => './img/products/product-3.jpg',
        ]);
        Product::create([
            'title' => 'Сумка Gian Franco Ferre',
            'slug' => 'sumka_gian_franco_ferre',
            'size' => 'S',
            'color' => 'black',
            'price_old' => '1800',
            'price_new' => '1800',
            'description' => 'Чудесная сумочка, Размер 21*16 см, Материал ЭКО кожа',
            'image' => './img/products/product-4.jpg',
        ]);
        Product::create([
            'title' => 'Сумка CG',
            'slug' => 'sumka_CG',
            'size' => 'S',
            'color' => 'pink',
            'price_old' => '1000',
            'price_new' => '1000',
            'description' => 'Сумочка милашка по СУПЕР ЦЕНЕ, Девочки вы не задумывались о том, что Новый год не за горами, Эта сумочка сделает ваш образ ещё более стильным и привлекательным, Размер 18*12 см., Материал ЭКО кожа, Представлена в трех цветах',
            'image' => './img/products/product-5.jpg',
        ]);
    }
}
