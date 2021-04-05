<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

/**
 * Class Create User command
 * 
 * @category Console Command
 * @package App\Console\Commands
 */
class CreateUserCommand extends Command
{
    /**
     *  Console commmand name
     * 
     * @var string
     */
    protected $signature = "create:user";

    /**
     * Console command description
     * 
     * @var string
     */
    protected $description = "Create user to auth on API";

    /**
     * Execute the console command
     * 
     * @return mixed
     */
    public function handle()
    {
        try {
            $email = readline("E-mail: ");
            $password = readline("Password: ");

            $password = Hash::make($password);
            \App\Models\User::create([
                'email' => $email,
                'password' => $password,
                'created_at' => Carbon::now()
            ]);
        } catch (Exception $e) {
            echo "Exception: {$e->getMessage()}";
        }
    }
}
