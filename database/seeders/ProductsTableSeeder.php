<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Product::insert(array(
            0 => array(
                'title' => 'Mi 9t pro',
                'content' => 'NETWORK   Technology  
                GSM / HSPA / LTE
                LAUNCH  Announced   2019, August 21
                Status  Available. Released 2019, August 21
                BODY    Dimensions  156.7 x 74.3 x 8.8 mm (6.17 x 2.93 x 0.35 in)
                Weight  191 g (6.74 oz)
                Build   Glass front (Gorilla Glass 5), glass back (Gorilla Glass 5), aluminum frame
                SIM Dual SIM (Nano-SIM, dual stand-by)
                DISPLAY Type    Super AMOLED, HDR
                Size    6.39 inches, 100.2 cm2 (~86.1% screen-to-body ratio)
                Resolution  1080 x 2340 pixels, 19.5:9 ratio (~403 ppi density)
                Protection  Corning Gorilla Glass 5
                PLATFORM    OS  Android 9.0 (Pie), upgradable to Android 10, MIUI 12
                Chipset Qualcomm SM8150 Snapdragon 855 (7 nm)
                CPU Octa-core (1x2.84 GHz Kryo 485 & 3x2.42 GHz Kryo 485 & 4x1.78 GHz Kryo 485)
                GPU Adreno 640
                MEMORY  Card slot   No
                Internal    64GB 6GB RAM, 128GB 6GB RAM, 256GB 8GB RAM
                    UFS 2.1
                MAIN CAMERA Triple  48 MP, f/1.8, 26mm (wide), 1/2.0", 0.8µm, PDAF, Laser AF
                8 MP, f/2.4, 53mm (telephoto), 1/4.0", 1.12µm, PDAF, 2x optical zoom
                13 MP, f/2.4, 12mm (ultrawide), 1/3.1", 1.12µm
                Features    Dual-LED flash, HDR, panorama
                Video   4K@30/60fps, 1080p@30/120/240fps, 1080p@960fps
                SELFIE CAMERA   Single  Motorized pop-up 20 MP, f/2.2, (wide), 1/3.4", 0.8µm
                Features    HDR
                Video   1080p@30fps
                SOUND   Loudspeaker Yes
                3.5mm jack  Yes
                    24-bit/192kHz audio
                COMMS   WLAN    Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                Bluetooth   5.0, A2DP, LE, aptX HD
                GPS Yes, with dual-band A-GPS, GLONASS, BDS, GALILEO
                NFC Yes
                Radio   Yes
                USB USB Type-C 2.0, USB On-The-Go
                FEATURES    Sensors Fingerprint (under display, optical), accelerometer, gyro, proximity, compass
                BATTERY Type    Li-Po 4000 mAh, non-removable
                Charging    Fast charging 27W
                Quick Charge 4+
                MISC    Colors  Carbon black, Red flame, Glacier blue
                Models  M1903F11G
                SAR 1.03 W/kg (head)     0.72 W/kg (body)    
                SAR EU  1.30 W/kg (head)     1.51 W/kg (body)    
                Price   € 389.00 / £ 329.99
                TESTS   Performance AnTuTu: 368846 (v7), 437823 (v8)
                GeekBench: 10684 (v4.4), 2732 (v5.1)
                GFXBench: 36fps (ES 3.1 onscreen)
                Display Contrast ratio: Infinite (nominal)
                Loudspeaker -26.9 LUFS (Good)
                Audio quality   Noise -93.9dB / Crosstalk -94.2dB
                Battery life    
                Endurance rating 103h
                ',
                'image' => 'media/product/240221_19_48_29.png',
            ),

            1 => array(
                'title' => 'Tshirst',
                'content' => '✔One Size Only: Male: Can fit to Small-Medium, Female: Can fit to Medium-XL
                ✔Comfortable to Wear
                ✔Lightweight Fabric (Cotton Spandex)
                ✔Excellent Quality
                ✔Reasonable Price
                ',
                'image' => 'media/product/240221_19_55_31.png',
            ),

        ));
    }
}
