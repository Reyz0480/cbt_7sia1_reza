<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'reyza088070@gmail.com'],
            [
                'name' => 'Rahmansyah Reza',
                'username' => 'developer',
                'is_staff' => true,
                'password' => Hash::make('rahasia')
            ]
        );

        
        $this->call([
            SubjectQuestionSeeder::class,
            ExamResultSeeder::class,
        ]);
    }
}
