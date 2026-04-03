<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データベース初期化
        DB::table('todos')->truncate();

        $testData = [
            [
                'content' => 'PHP AppSectionを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'PHP AppSectionを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        //テストデータをDBに登録
        DB::table('todos')->insert($testData);
    }
}
