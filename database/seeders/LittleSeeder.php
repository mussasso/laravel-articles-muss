<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LittleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('littles')->insert(
            [
                "title" => 'Pays-Bas : le premier pays de l’OTAN a présenté un robot autonome terrestre à usage militaire',
                "text" => "Ce robot autonome est un système d'infanterie modulaire hybride à chenilles construit par l'entreprise de défense estonienne Milrem Robotics. Il est doté de chenilles, comme un char, et peut utiliser une variété d'armes.",
                "auteur_id" => 'siecledigital',
                "image" => 'https://siecledigital.fr/wp-content/uploads/2022/10/ROBOT_KILLER-940x550.jpeg'
            ],
            [
                "title" => 'En Europe, 67 % des femmes qui travaillent dans la tech estiment être sous-payées',
                "text" => "À l'occasion de la Journée internationale de l'égalité salariale, l'Organisation internationale du travail a publié une étude intéressante sur la place des femmes dans le monde du travail. Le rapport fait état d'une différence salariale de 20 % entre les femmes et les hommes, en Europe, dans le secteur de la tech. Cet écart de rémunération est encore plus important pour les femmes noires et hispaniques, puisqu'elles gagnent 63 % de moins que les hommes blancs.",
                "auteur_id" => 'siecledigital',
                "image" => 'https://siecledigital.fr/wp-content/uploads/2022/10/FEMMES_TECH-940x550.jpg'
            ],
            [
                "title" => "Wi-Fi 7 : La prochaine norme promet 30 Gb/s, un débit comparable à celui de l'Ethernet",
                "text" => "Le Wi-Fi 7 aussi rapide que l’Ethernet ? C’est ce que promet la prochaine génération de réseaux sans fil grand public : des débits extrêmement élevés -30 Gb/s — avec le même nombre d’antennes que le Wi-Fi 6. Soit peu ou prou la même chose que ce que l'on trouve sur l'Ethernet.

                Arrivée imminente pour la technologie Wi-Fi 7
                Aujourd'hui, tous les appareils électroniques grand public actuels prennent généralement en charge les technologies Wi-Fi 6 et antérieures. Seuls quelques-uns commencent à utiliser la technologie Wi-Fi 6E. Le 10 janvier, le fabricant de semi-conducteurs MediaTek a annoncé avoir fait la démonstration de Wi-Fi 7 à des « clients clés et à des collaborateurs de l’industrie ». Le test comprenait une démonstration de la technologie Wi-FI 7 Filogic.
                
                Le Wi-Fi 7, également connu sous le nom d’IEEE 802.11be, devrait offrir des vitesses environ 2,4 fois supérieures à celles du Wi-Fi 6. Cette technologie utilise les spectres de 2,4 GHz, 5 GHz et 6 GHz. Pour rappel, la Wi-Fi 6 (6 GHz) utilise les réseaux 2,4 GHz et 5 GHz. Cela lui permet de bénéficier de la couverture du réseau 2,4 GHz, supérieure à celle du 5 GHz, et de la vitesse du réseau 5 GHz, supérieure à celle du réseau 2,4 GHz.",
                "auteur_id" => '20minutes',
                "image" => 'https://img.20mn.fr/tg_Q1EGgRaSnRd8RXoAxGik/960x614_le-wi-fi-7-offrira-un-debit-maximal-de-30-gb-s'
            ]
            );
    }
}
