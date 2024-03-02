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

        Schema::create('allergeens', function (Blueprint $table) {
            $table->id('id');
            $table->string('naam', 50);
            $table->string('omschrijving', 250);
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('allergeens')->insert([
            'naam' => 'Gluten',
            'Omschrijving' => 'Dit product bevat gluten',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Gelatine',
            'Omschrijving' => 'Dit product bevat gelatine',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'AZO-Kleurstof',
            'Omschrijving' => 'Dit product bevat AZO-kleurstoffen',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Lactose',
            'Omschrijving' => 'Dit product bevat lactose',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('allergeens')->insert([
            'naam' => 'Soja',
            'Omschrijving' => 'Dit product bevat soja',
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
        Schema::dropIfExists('allergeens');
    }
};
