<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CryptoPairsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crypto_pairs')->delete();
        
        \DB::table('crypto_pairs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bitcoin',
                'image' => 'BTC.png',
                'symbol' => 'BTC',
                'status' => 1,
                'created_at' => '2021-12-18 20:22:34',
                'updated_at' => '2021-12-18 20:22:34',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tether',
                'image' => 'USDT.png',
                'symbol' => 'USDT',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ETH',
                'image' => 'ETH.png',
                'symbol' => 'ETH',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BNB',
                'image' => 'BNB.png',
                'symbol' => 'BNB',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'TUSD',
                'image' => 'TUSD.png',
                'symbol' => 'TUSD',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'PAX',
                'image' => 'PAX.png',
                'symbol' => 'PAX',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'USDC',
                'image' => 'USDC.png',
                'symbol' => 'USDC',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'XRP',
                'image' => 'XRP.png',
                'symbol' => 'XRP',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'USDS',
                'image' => 'USDS.png',
                'symbol' => 'USDS',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'TRX',
                'image' => 'TRX.png',
                'symbol' => 'TRX',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'BUSD',
                'image' => 'BUSD.png',
                'symbol' => 'BUSD',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'NGN',
                'image' => 'NGN.png',
                'symbol' => 'NGN',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'RUB',
                'image' => 'RUB.png',
                'symbol' => 'RUB',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'TRY',
                'image' => 'TRY.png',
                'symbol' => 'TRY',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'EUR',
                'image' => 'EUR.png',
                'symbol' => 'EUR',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'ZAR',
                'image' => 'ZAR.png',
                'symbol' => 'ZAR',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BKRW',
                'image' => 'BKRW.png',
                'symbol' => 'BKRW',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'IDRT',
                'image' => 'IDRT.png',
                'symbol' => 'IDRT',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'GBP',
                'image' => 'GBP.png',
                'symbol' => 'GBP',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'BIDR',
                'image' => 'BIDR.png',
                'symbol' => 'BIDR',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'AUD',
                'image' => 'AUD.png',
                'symbol' => 'AUD',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'DAI',
                'image' => 'DAI.png',
                'symbol' => 'DAI',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'BRL',
                'image' => 'BRL.png',
                'symbol' => 'BRL',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'BVND',
                'image' => 'BVND.png',
                'symbol' => 'BVND',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'VAI',
                'image' => 'VAI.png',
                'symbol' => 'VAI',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'GYEN',
                'image' => 'GYEN.png',
                'symbol' => 'GYEN',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'USDP',
                'image' => 'USDP.png',
                'symbol' => 'USDP',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'DOGE',
                'image' => 'DOGE.png',
                'symbol' => 'DOGE',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'UST',
                'image' => 'UST.png',
                'symbol' => 'UST',
                'status' => 1,
                'created_at' => '2021-12-18 20:26:30',
                'updated_at' => '2021-12-18 20:26:30',
            ),
        ));
        
        
    }
}