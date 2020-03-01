<?php

use Illuminate\Database\Seeder;

class AssistidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin\Assistido::class,100)->create();
    }
}
