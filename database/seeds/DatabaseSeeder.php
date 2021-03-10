<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,500)->create();
        factory(\App\Address::class,1500)->create();
        factory(\App\Cart::class,1500)->create();
        factory(\App\CartItem::class,1500)->create();
        factory(\App\Product::class,1500)->create();
       factory(\App\Catogery::class,1500)->create();
        factory(\App\Coupon::class,1500)->create();
        factory(\App\Image::class,1500)->create();
        factory(\App\MetaData::class,1500)->create();
      factory(\App\Order::class,1500)->create();
        factory(\App\Payment::class,1500)->create();
        factory(\App\ProductDimension::class,1500)->create();
        factory(\App\Refund::class,1500)->create();
        factory(\App\Review::class,1500)->create();
        factory(\App\Role::class,1500)->create();
        factory(\App\Shipment::class,1500)->create();
        factory(\App\Tag::class,1500)->create();

    }
}
