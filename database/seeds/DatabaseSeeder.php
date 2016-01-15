<?php

use Illuminate\Database\Seeder;

use App\Models\Profile as ProfileModel;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('ProfileTableSeeder');
    }
}

class ProfileTableSeeder extends Seeder {
    public function run ()
    {
        DB::table('profile')->delete();
        ProfileModel::create(['name' => 'Robert', 'surname' => 'Lippert', 'email' => 'robert@lippert.de', 'phone' => '123123']);
        ProfileModel::create(['name' => 'Andreas', 'surname' => 'Rudat', 'email' => 'andi@rudat.de', 'phone' => '123123']);
        ProfileModel::create(['name' => 'Christopher', 'surname' => 'Stock', 'email' => 'christopher@stock.de', 'phone' => '123123']);
        ProfileModel::create(['name' => 'Andreas', 'surname' => 'Zeissner', 'email' => 'wurstbrot@zeissner.de', 'phone' => '123123']);
    }
}