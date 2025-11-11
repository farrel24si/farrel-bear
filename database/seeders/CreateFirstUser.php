<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data['name']     = 'admin';
        $data['email']    = 'admin@pcr.ac.id';
        $data['password'] = Hash::make('admin123');

        User::create($data);
    }
}
