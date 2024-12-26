<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Monolog\Handler\SyslogUdp\UdpSocket;
use App\Models\Bandeira;

class BandeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bandeira::insert(
            [
                ['nome' => 'Visa', 'imagem' => 'img/bank/visa.png'],
                ['nome' => 'Mastercard', 'imagem' => 'img/bank/mastercard.png'],
                ['nome' => 'American Express', 'imagem' => 'img/bank/american_express.png'],
                ['nome' => 'Elo', 'imagem' => 'img/bank/elo.png'],
                ['nome' => 'Itaú', 'imagem' => 'img/bank/itau.png'],
                ['nome' => 'Bradesco', 'imagem' => 'img/bank/bradesco.png'],
                ['nome' => 'Santander', 'imagem' => 'img/bank/santander.png'],
                ['nome' => 'Caixa', 'imagem' => 'img/bank/caixa.png'],
                ['nome' => 'XP Investimentos', 'imagem' => 'img/bank/xp_investimentos.png'],
                ['nome' => 'PicPay', 'imagem' => 'img/bank/picpay.png'],
                ['nome' => 'Mercado Pago', 'imagem' => 'img/bank/mercado_pago.png'],
                ['nome' => 'Buscapé', 'imagem' => 'img/bank/buscape.png'],
                ['nome' => 'Inter', 'imagem' => 'img/bank/inter.png'],
                ['nome' => 'Will', 'imagem' => 'img/bank/will.png'],
                ['nome' => 'InfinitePay', 'imagem' => 'img/bank/infinitepay.png']
            ]
        );
    }
}
