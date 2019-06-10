<?php

use Illuminate\Database\Seeder;

class FAQTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('f_a_q_s')->insert([
          'title' => 'Alteração de senha.',
          'description' => 'Como alterar senha de minha conta do acesso à Ouvidoria MEC?',
          'response' => 'Basta ir no menu do topo, e clicar no icone do bonequinho (canto superior direito), e clicar em alterar senha.',
          'adminId' => 1
        ]);

        DB::table('f_a_q_s')->insert([
            'title' => 'Papel higienico do banheiro das areas de lazer.',
            'description' => 'Acabou o papel higienico do banheiro da area de lazer, oq fazer?',
            'response' => 'Chame um dos zeladores, que eles irão repor os papeis.',
            'adminId' => 1
          ]);

          DB::table('f_a_q_s')->insert([
              'title' => 'Chave extra do portãozinho.',
              'description' => 'Como consigo uma chave extra do portãozinho da portaria?',
              'response' => 'Deverá entrar em contato com o departamento da portaria via nova reclamação em sistema MEC, solicitando uma chave extra.',
              'adminId' => 1
            ]);

            DB::table('f_a_q_s')->insert([
                'title' => 'Comprar vaga carro.',
                'description' => 'Como compro uma vaga extra de carro?',
                'response' => 'Para comprar nova vaga, deverá entrar em contato com o departamento, via sistema MEC, para que possam entrar em contato com algum condômino que deseja vender sua vaga.',
                'adminId' => 1
              ]);
    }
}
