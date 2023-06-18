<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('principalities')->insert(
            array(['name' => 'Київ'],
            ['name' => 'Новгород'],
            ['name' => 'Чернігів'],
            ['name' => 'Переяслав'])
        );

        DB::table('lords')->insert(
            array(['name' => 'Ізяслав Ярославович'], #київ, новгород
            ['name' => 'Володимир Ярославович'], #новгород
            ['name' => 'Святослав Ярославович'], #чернігів,
            ['name' => 'Всеволод Ярославович'], #переяслав, київ
            ['name' => 'Всеслав Брячиславич'], #київ
            ['name' => 'Володимир Мономах'], #чернігів, переяслав, київ
            ['name' => 'Мстислав Ізяславич'], #новгород
            ['name' => 'Давид Святославович'] #переяслав, новгород, чернігів
            ));

        DB::table('boyars')->insert(
            array(['name' => 'Володимир Васильович'], #Ізяслав Ярославович, Володимир Ярославович Давид Святославович 1
            ['name' => 'Ігор Всеволодович'], # Всеслав Брячиславич Володимир Мономах Мстислав Ізяславич         2
            ['name' => 'Олекса Ігорович'], # Святослав Ярославович                                              3
            ['name' => 'Всеволод Давидович'], # Володимир Ярославович Всеволод Ярославович                      4
            ['name' => 'Всеслав Володимирович'], # Всеслав Брячиславич Володимир Мономах Мстислав Ізяславич     5
            ['name' => 'Ростислав Ярославович'], # Ізяслав Ярославович                                          6
            ['name' => 'Ярослав Мстиславович'], # Всеволод Ярославович Мстислав Ізяславич                       7
            ['name' => 'Ізяслав Володимирович'], # Святослав Ярославович, Володимир Мономах                     8
            ['name' => 'Святослав Ігорович'], # Володимир Ярославович Всеволод Ярославович                      9
            ['name' => 'Святослав Ізяславич'], # Мстислав Ізяславич                                             10
            ['name' => 'Володимир Глібович'], # Ізяслав Ярославович Давид Святославович                         11
            ['name' => 'Гліб Всеволодович'], # Володимир Мономах Мстислав Ізяславич                             12
            ['name' => 'Станіслав Ігорович'], # Святослав Ярославович                                           13
            ['name' => 'Іоанн Володимирович']) # Володимир Мономах                                              14
        );

        DB::table('principalities_lords')->insert(
            array(['principality_id' => 1, 'lord_id' => 1],
            ['principality_id' => 1, 'lord_id' => 4],
            ['principality_id' => 1, 'lord_id' => 5],
            ['principality_id' => 1, 'lord_id' => 6],
            ['principality_id' => 2, 'lord_id' => 1],
            ['principality_id' => 2, 'lord_id' => 2],
            ['principality_id' => 2, 'lord_id' => 1],
            ['principality_id' => 2, 'lord_id' => 7],
            ['principality_id' => 2, 'lord_id' => 8],
            ['principality_id' => 3, 'lord_id' => 3],
            ['principality_id' => 3, 'lord_id' => 6],
            ['principality_id' => 3, 'lord_id' => 8],
            ['principality_id' => 4, 'lord_id' => 4],
            ['principality_id' => 4, 'lord_id' => 6],
            ['principality_id' => 4, 'lord_id' => 8])
        );

        DB::table('lords_boyars')->insert(
            array(['lord_id' => 1, 'boyar_id' => 1],
            ['lord_id' => 1, 'boyar_id' => 6],
            ['lord_id' => 1, 'boyar_id' => 11],
            ['lord_id' => 2, 'boyar_id' => 1],
            ['lord_id' => 2, 'boyar_id' => 4],
            ['lord_id' => 2, 'boyar_id' => 9],
            ['lord_id' => 3, 'boyar_id' => 3],
            ['lord_id' => 3, 'boyar_id' => 2],
            ['lord_id' => 3, 'boyar_id' => 8],
            ['lord_id' => 4, 'boyar_id' => 4],
            ['lord_id' => 4, 'boyar_id' => 7],
            ['lord_id' => 4, 'boyar_id' => 9],
            ['lord_id' => 5, 'boyar_id' => 2],
            ['lord_id' => 5, 'boyar_id' => 5],
            ['lord_id' => 6, 'boyar_id' => 2],
            ['lord_id' => 6, 'boyar_id' => 5],
            ['lord_id' => 6, 'boyar_id' => 8],
            ['lord_id' => 6, 'boyar_id' => 12],
            ['lord_id' => 6, 'boyar_id' => 14],
            ['lord_id' => 7, 'boyar_id' => 2],
            ['lord_id' => 7, 'boyar_id' => 5],
            ['lord_id' => 7, 'boyar_id' => 7],
            ['lord_id' => 7, 'boyar_id' => 10],
            ['lord_id' => 7, 'boyar_id' => 12],
            ['lord_id' => 8, 'boyar_id' => 1],
            ['lord_id' => 8, 'boyar_id' => 11])
        );
    }

    /**
     * Reverse the migrations.
     */
};
