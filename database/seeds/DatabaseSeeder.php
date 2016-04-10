<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

      /**
       * Ignore FOREIGN_KEYS during the seeding process.
       * This makes tables easier to delete.
       */

  		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
  		$this->call('UserSeeder');
  		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
