<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Specification;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Samsung',
                'category_id' => 2,
                'seller_id' => 1,
                'description' => 'Телефон samsung',
                'count' => 10,
                'price' => 78,
                'article' => '12345',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://www.samsung-actu.fr/wp-content/uploads/2023/06/Samsung-Galaxy-Note-20-Ultra-le-geant.webp',
            ],
            [
                'title' => 'iPhone',
                'category_id' => 2,
                'seller_id' => 1,
                'description' => 'Телефон iPhone',
                'count' => 5,
                'price' => 99,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://files.refurbed.com/ii/iphone-14-pro-max-1662626716.jpg?t=fitdesign&h=600&w=800',
            ],
            [
                'title' => 'Ноутбук ASUS',
                'category_id' => 3,
                'seller_id' => 2,
                'description' => 'Ноутбук ASUS',
                'count' => 5,
                'price' => 133,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://img.mvideo.ru/Pdb/30028713b.jpg',
            ],
            [
                'title' => 'Ноутбук Lenovo',
                'category_id' => 3,
                'seller_id' => 2,
                'description' => 'Ноутбук Lenovo',
                'count' => 5,
                'price' => 164,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQky8DGvR22qnH0ZK4yqTSdTw3T6g5anLRzfXkeCdfiyw&s',
            ],
            [
                'title' => 'Чехол Наруто для iPhone 11',
                'category_id' => 8,
                'seller_id' => 3,
                'description' => 'Черный чехол для iPhone 11',
                'count' => 5,
                'price' => 3,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => true,
                'image_url' => 'https://caseme.ru/storage/app/media/case/337/33701/iphone_12_33701_black.jpg',
            ],
            [
                'title' => 'Чехол для Huawei',
                'category_id' => 8,
                'seller_id' => 3,
                'description' => 'Чехол для Huawei',
                'count' => 5,
                'price' => 2,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://ir.ozone.ru/s3/multimedia-c/c1000/6750796836.jpg',
            ],
            [
                'title' => 'Наклейка спанч боб',
                'category_id' => 9,
                'seller_id' => 4,
                'description' => 'Наклейка спанч боб',
                'count' => 5,
                'price' => 2,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfFlScio0XLP3sBvnMT6WISXHzx8JwvFNdnVdz-wnyFw&s',
            ],
            [
                'title' => 'Наклейка Winks',
                'category_id' => 9,
                'seller_id' => 4,
                'description' => 'Наклейка на телефон',
                'count' => 5,
                'price' => 1,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://basket-12.wbbasket.ru/vol1679/part167905/167905219/images/big/1.webp',
            ],
            [
                'title' => 'Смарт часы 1',
                'category_id' => 1,
                'seller_id' => 5,
                'description' => 'Смарт часы',
                'count' => 5,
                'price' => 57,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRU5iZ__OqOLhXR2G-6HBdYngA10yMuAhiS5eicRv59wA&s',
            ],
            [
                'title' => 'Смарт часы 2',
                'category_id' => 1,
                'seller_id' => 5,
                'description' => 'Смарт часы',
                'count' => 5,
                'price' => 43,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => true,
                'image_url' => 'https://xiaomiexclusive.ru/files/thumb/item/00-00060979-6-515Wx515H.png?s=400,400,400,400',
            ],
            [
                'title' => 'Посудомоечная машина Ariston',
                'category_id' => 4,
                'seller_id' => 1,
                'description' => 'Посудомоечная машина Ariston',
                'count' => 5,
                'price' => 253,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://img.mvideo.ru/Pdb/20030570b.jpg',
            ],
            [
                'title' => 'Холодильник 1',
                'category_id' => 5,
                'seller_id' => 1,
                'description' => 'Холодильник 1',
                'count' => 5,
                'price' => 262,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://www.belaya-tehnika.ru/images/watermarked/1/detailed/10/%D0%A5%D0%BE%D0%BB%D0%BE%D0%B4%D0%B8%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA_%D0%9C%D0%98%D0%A0-POZIS_RK_149.jpg',
            ],
            [
                'title' => 'Холодильник 2',
                'category_id' => 5,
                'seller_id' => 1,
                'description' => 'Холодильник 2',
                'count' => 5,
                'price' => 187,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => true,
                'image_url' => 'https://mideakz.com/wp-content/uploads/2021/08/mdrb632fgf46_2.jpg',
            ],
            [
                'title' => 'Стиральная машинка 1',
                'category_id' => 6,
                'seller_id' => 1,
                'description' => 'Стиральная машинка 1',
                'count' => 5,
                'price' => 139,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUqBzhRmhG_s00rKpMDlQMAgw53PAgs5QcrjT80XgKRQ&s',
            ],
            [
                'title' => 'Стиральная машинка 2',
                'category_id' => 6,
                'seller_id' => 1,
                'description' => 'Стиральная машинка 2',
                'count' => 5,
                'price' => 198,
                'article' => '67890',
                'is_active' => true,
                'is_limited_edition' => false,
                'image_url' => 'https://image.made-in-china.com/202f0j00qPMbyuKBAzoE/Automatic-Washing-Machine-English-Panel-2022-Home-7-12kg-Top-Loading-Washing-Machine.webp',
            ],
        ];

        foreach ($products as $productData) {
            $product = Product::create($productData);
            $specifications = Specification::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $product->specifications()->attach($specifications);
        }
    }
}
