<?php

namespace Modules\Customer\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustomerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        if (app()->environment() == 'local'){
            for ($x = 0; $x <= 20; $x++) {
                $user = User::factory()->create();
                $user->assignRole('Customer');
            }
        }
    }
}
