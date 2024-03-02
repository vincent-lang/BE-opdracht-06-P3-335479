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

        Schema::create('magazijns', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('verpakkingsEenheid');
            $table->integer('aantalAanwezig')->nullable();
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('magazijns')->insert([
            'product_id' => 1,
            'verpakkingsEenheid' => 5,
            'aantalAanwezig' => 453,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 2,
            'verpakkingsEenheid' => 2.5,
            'aantalAanwezig' => 400,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 3,
            'verpakkingsEenheid' => 5,
            'aantalAanwezig' => 1,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 4,
            'verpakkingsEenheid' => 1,
            'aantalAanwezig' => 800,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 5,
            'verpakkingsEenheid' => 3,
            'aantalAanwezig' => 234,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 6,
            'verpakkingsEenheid' => 2,
            'aantalAanwezig' => 345,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 7,
            'verpakkingsEenheid' => 1,
            'aantalAanwezig' => 795,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 8,
            'verpakkingsEenheid' => 10,
            'aantalAanwezig' => 233,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 9,
            'verpakkingsEenheid' => 2.5,
            'aantalAanwezig' => 123,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 10,
            'verpakkingsEenheid' => 3,
            'aantalAanwezig' => null,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 11,
            'verpakkingsEenheid' => 2,
            'aantalAanwezig' => 367,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 12,
            'verpakkingsEenheid' => 1,
            'aantalAanwezig' => 467,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('magazijns')->insert([
            'product_id' => 13,
            'verpakkingsEenheid' => 5,
            'aantalAanwezig' => 20,
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
        Schema::dropIfExists('magazijns');
    }
};
