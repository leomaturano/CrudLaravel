<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		App\Pessoa::create([
            'nome' => 'Jose da Silva',
            'email' => 'jose@email.com',
            'telefone' => '(027) 1111-1111',
        ]);
		App\Pessoa::create([
            'nome' => 'Joao Dias',
            'email' => 'joao@email.com',
            'telefone' => '(027) 2222-2222',
        ]);
		App\Pessoa::create([
            'nome' => 'Pedro da Galileia',
            'email' => 'pedro@email.com',
            'telefone' => '(027) 3333-3333',
        ]);
		App\Pessoa::create([
            'nome' => 'Paulo de Tarso',
            'email' => 'paulo@email.com',
            'telefone' => '(027) 4444-4444',
        ]);

		
    }
}
