<?php

namespace Modules\Customer\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

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

        if (app()->environment() == 'local') {
            for ($x = 0; $x <= 20; $x++) {
                $user = User::factory()->create();
                $user->assignRole('Customer');
            }
        }
    }
}
