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

        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id('id');
            $table->string('naam', 50);
            $table->string('contactPersoon', 25);
            $table->string('leverancierNummer', 100);
            $table->string('mobiel', 50);
            $table->boolean('IsActief');
            $table->string('Opmerking', 250)->nullable();
            $table->timestamps();
        });

        DB::table('leveranciers')->insert([
            'naam' => 'Venco',
            'contactPersoon' => 'Bert van Linge',
            'leverancierNummer' => 'L1029384719',
            'mobiel' => '06-28493827',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Astra Sweets',
            'contactPersoon' => 'Jasper Del Monte',
            'leverancierNummer' => 'L1029284315',
            'mobiel' => '06-39398734',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Haribo',
            'contactPersoon' => 'Sven Stalman',
            'leverancierNummer' => 'L1029324748',
            'mobiel' => '06-24383291',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'Basset',
            'contactPersoon' => 'Joyce Stelterberg',
            'leverancierNummer' => 'L1023845773',
            'mobiel' => '06-48293823',
            'IsActief' => 1,
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        DB::table('leveranciers')->insert([
            'naam' => 'De Bron',
            'contactPersoon' => 'Remco Veenstra',
            'leverancierNummer' => 'L1023857736',
            'mobiel' => '06-34291234',
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
        Schema::dropIfExists('leveranciers');
    }
};
