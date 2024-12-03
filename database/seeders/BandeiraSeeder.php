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
                ['nome' => 'Visa', 'imagem' => 'images/visa.png'],
                ['nome' => 'Mastercard', 'imagem' => 'images/mastercard.png'],
                ['nome' => 'American Express', 'imagem' => 'images/american_express.png'],
                ['nome' => 'Elo', 'imagem' => 'images/elo.png'],
                ['nome' => 'Itaú', 'imagem' => 'images/itau.png'],
                ['nome' => 'Bradesco', 'imagem' => 'images/bradesco.png'],
                ['nome' => 'Santander', 'imagem' => 'images/santander.png'],
                ['nome' => 'Caixa', 'imagem' => 'images/caixa.png'],
                ['nome' => 'Americanas', 'imagem' => 'images/americanas.png'],
                ['nome' => 'XP Investimentos', 'imagem' => 'images/xp_investimentos.png'],
                ['nome' => 'PicPay', 'imagem' => 'images/picpay.png'],
                ['nome' => 'Mercado Pago', 'imagem' => 'images/mercado_pago.png'],
                ['nome' => 'Buscapé', 'imagem' => 'images/buscape.png'],
                ['nome' => 'Inter', 'imagem' => 'images/inter.png'],
                ['nome' => 'Will', 'imagem' => 'images/will.png'],
                ['nome' => 'InfinitePay', 'imagem' => 'images/infinitepay.png']
            ]
        );
    }
}
