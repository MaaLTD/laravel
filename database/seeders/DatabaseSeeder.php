<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Database\Factories\TicketFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([
//            RoleSeeder::class,
//        ]);

//         User::factory(10)->create();
//         User::factory(1)->admin()->create();
         User::factory(5)
             ->client()
             ->has(Ticket::factory()->count(2))
             ->create();

        Ticket::factory()->create();

    }
}
