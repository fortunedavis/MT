<?php

use Illuminate\Database\Seeder;
use App\Departements\Departement;
class departementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Departement::class, 10)->create();
    }
}
