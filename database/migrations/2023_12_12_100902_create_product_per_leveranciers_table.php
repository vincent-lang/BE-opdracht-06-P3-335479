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

        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('leverancier_id')->references('id')->on('leveranciers');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->string('datumLevering', 50);
            $table->integer('aantal');
            $table->string('datumEerstVolgendeLevering', 25)->nullable();
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 1,
            'datumLevering' => '2023-04-09',
            'aantal' => 23,
            'datumEerstVolgendeLevering' => '2023-04-16',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 1,
            'datumLevering' => '2023-04-18',
            'aantal' => 21,
            'datumEerstVolgendeLevering' => '2023-04-25',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 2,
            'datumLevering' => '2023-04-09',
            'aantal' => 12,
            'datumEerstVolgendeLevering' => '2023-04-16',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 1,
            'product_id' => 3,
            'datumLevering' => '2023-04-10',
            'aantal' => 11,
            'datumEerstVolgendeLevering' => '2023-04-17',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 4,
            'datumLevering' => '2023-04-14',
            'aantal' => 16,
            'datumEerstVolgendeLevering' => '2023-04-21',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 4,
            'datumLevering' => '2023-04-21',
            'aantal' => 23,
            'datumEerstVolgendeLevering' => '2023-04-28',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 5,
            'datumLevering' => '2023-04-14',
            'aantal' => 45,
            'datumEerstVolgendeLevering' => '2023-04-21',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 2,
            'product_id' => 6,
            'datumLevering' => '2023-04-14',
            'aantal' => 30,
            'datumEerstVolgendeLevering' => '2023-04-21',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 7,
            'datumLevering' => '2023-04-12',
            'aantal' => 12,
            'datumEerstVolgendeLevering' => '2023-04-19',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 7,
            'datumLevering' => '2023-04-19',
            'aantal' => 23,
            'datumEerstVolgendeLevering' => '2023-04-26',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 8,
            'datumLevering' => '2023-04-10',
            'aantal' => 12,
            'datumEerstVolgendeLevering' => '2023-04-17',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 3,
            'product_id' => 9,
            'datumLevering' => '2023-04-11',
            'aantal' => 1,
            'datumEerstVolgendeLevering' => '2023-04-18',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 4,
            'product_id' => 10,
            'datumLevering' => '2023-04-16',
            'aantal' => 24,
            'datumEerstVolgendeLevering' => '2023-04-30',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 11,
            'datumLevering' => '2023-04-10',
            'aantal' => 47,
            'datumEerstVolgendeLevering' => '2023-04-17',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 11,
            'datumLevering' => '2023-04-19',
            'aantal' => 60,
            'datumEerstVolgendeLevering' => '2023-04-26',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 12,
            'datumLevering' => '2023-04-11',
            'aantal' => 45,
            'datumEerstVolgendeLevering' => '',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_leveranciers')->insert([
            'leverancier_id' => 5,
            'product_id' => 13,
            'datumLevering' => '2023-04-12',
            'aantal' => 23,
            'datumEerstVolgendeLevering' => '',
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
        Schema::dropIfExists('product_per_leveranciers');
    }
};
