<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $time = Carbon::now()->tz('GMT+1');

        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_naam', 50);
            $table->string('barcode', 100);
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('products')->insert([
            'product_naam' => 'Mintnopjes',
            'barcode' => '8719587231278',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Schoolkrijt',
            'barcode' => '8719587326713',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Honingdrop',
            'barcode' => '8719587327836',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Zure Beren',
            'barcode' => '8719587321441',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Cola Flesjes',
            'barcode' => '8719587321237',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Turtles',
            'barcode' => '8719587322245',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Witte Muizen',
            'barcode' => '8719587328256',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Reuzen Slangen',
            'barcode' => '8719587325641',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Zoute Rijen',
            'barcode' => '8719587322739',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Winegums',
            'barcode' => '8719587327527',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Drop Munten',
            'barcode' => '8719587322345',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Kruis Drop',
            'barcode' => '8719587322265',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('products')->insert([
            'product_naam' => 'Zoute Ruitjes',
            'barcode' => '8719587323256',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
