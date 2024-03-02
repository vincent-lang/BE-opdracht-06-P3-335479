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

        Schema::create('product_per_allergeens', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('allergeen_id')->references('id')->on('allergeens');
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 2,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 1,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 1,
            'allergeen_id' => 3,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 3,
            'allergeen_id' => 4,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 6,
            'allergeen_id' => 5,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 2,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 9,
            'allergeen_id' => 5,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 10,
            'allergeen_id' => 2,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 12,
            'allergeen_id' => 4,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 1,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 4,
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('product_per_allergeens')->insert([
            'product_id' => 13,
            'allergeen_id' => 5,
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
        Schema::dropIfExists('product_per_allergeens');
    }
};
