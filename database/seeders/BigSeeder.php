<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bigs')->insert(
            [
                "title" => 'Des satellites pourront bientôt diffuser de l’électricité partout sur Terre',
                "text" => "Si le système de transmission d'Emrod pourrait parfaitement servir à envoyer l'énergie collectée dans l'espace sur Terre, ce n'est pas la vision à long terme de l'entreprise. Son fondateur, Greg Kushnir, imagine plutôt un réseau électrique mondial sans fil transmis par des satellites en orbite basse, à 100 kilomètres d'altitude. À cette hauteur, les antennes devront mesurer 30 à 40 mètres. Avec la technologie actuelle, Greg Kushnir estime qu'il pourrait atteindre une efficacité de 60 à 70 %, mais d'ici 2040 à 2050 il espère être plutôt à 80 à 85 %, soit mieux que certains réseaux câblés.
                Son but est de découpler complètement la production d'énergies renouvelables de leur utilisation. Avec un système de satellites, il deviendrait possible d'installer des panneaux solaires dans le désert et d'envoyer l'électricité produite de l'autre côté du monde. Il serait ainsi possible de profiter du solaire 24 heures par jour, et les lieux isolés pourraient recevoir de l'électricité sans être relié à un réseau électrique. L'entreprise prévoit de commencer par commercialiser sa technologie pour des liaisons terrestres d'ici 2024.",
                "auteur_id" => 'futura-sciences',
                "image" => 'https://cdn.futura-sciences.com/cdn-cgi/image/width=1920,quality=50,format=auto/sources/images/satellite-energie.jpg'
            ],
            [
                "title" => 'D’Apple à Starlink, les premiers pas des smartphones connectés aux satellites',
                "text" => "Vous pouvez partager un article en cliquant sur les icônes de partage en haut à droite de celui-ci. 
                La reproduction totale ou partielle d’un article, sans l’autorisation écrite et préalable du Monde, est strictement interdite. 
                Pour plus d’informations, consultez nos conditions générales de vente. 
                Pour toute demande d’autorisation, contactez droitsdauteur@lemonde.fr. 
                En tant qu’abonné, vous pouvez offrir jusqu’à cinq articles par mois à l’un de vos proches grâce à la fonctionnalité « Offrir un article ». 
                
                https://www.lemonde.fr/economie/article/2022/09/12/d-apple-a-starlink-les-premiers-pas-des-smartphones-connectes-aux-satellites_6141236_3234.html
                
                Et si les téléphones pouvaient se connecter au réseau dans les zones blanches, loin de toute antenne mobile ou câble Internet ? Cette perspective suscite depuis plusieurs années des spéculations dans l’industrie de la « tech » et des télécoms. Ces dernières semaines, plusieurs grands acteurs du marché ont simultanément annoncé de premiers accords permettant à des smartphones de se connecter ainsi, grâce à des satellites. Une nouvelle possibilité pour l’instant limitée techniquement mais qui représente un pan d’activité potentielle supplémentaire pour de nouveaux entrants dans le secteur des télécoms : les constellations de satellites et le leader du secteur, Starlink, lancé par Elon Musk.
                
                Lire aussi : Elon Musk veut connecter les smartphones ordinaires à l’Internet satellitaire de Starlink
                Le 7 septembre, Apple a dévoilé l’iPhone 14, son premier appareil intégrant une forme de connexion satellite. Cette nouveauté est présentée comme une façon de passer des appels d’urgence, par exemple lors d’une randonnée en montagne, d’une sortie en mer ou en cas d’accident dans une zone très isolée. Cette fonctionnalité « associe des composants étroitement intégrés au logiciel pour permettre aux antennes de se connecter directement à un satellite afin d’envoyer un message aux services d’urgence en l’absence de couverture cellulaire ou Wi-Fi », explique Apple dans un communiqué.
                
                Antenne miniature
                L’envoi d’un message de détresse avec l’iPhone 14 sera toutefois beaucoup plus compliqué qu’une communication mobile : « Les satellites étant mouvants et disposant d’une bande passante limitée, l’envoi des messages peut prendre quelques minutes », prévient Apple, tout en précisant que le smartphone indiquera à l’utilisateur « comment orienter son téléphone vers un satellite ». Ce nouveau service sera disponible aux Etats-Unis et au Canada, à partir de novembre, et sera gratuit pendant deux ans.",
                "auteur_id" => 'le monde',
                "image" => 'https://img.lemde.fr/2022/09/12/0/0/4541/3152/1328/0/45/0/4c42dcf_1662971244976-063-1421721189.jpg'
            ],
            [
                "title" => 'Reconnaissance faciale : la CNIL sanctionne Clearview AI d’une amende',
                "text" => "Le 20 octobre 2022, la Commission nationale de l'informatique et des libertés (CNIL) a sanctionné Clearview AI, entreprise américaine spécialisée dans la reconnaissance biométrique faciale. Cette dernière va devoir s'acquitter d'une amende de 20 millions d'euros pour avoir collecté et utiliser une grande quantité de données biométriques sans y être autorisée. Mise en demeure par la CNIL, Clearview AI se voit sanctionner
                Depuis décembre 2021, la CNIL a Clearview AI dans son viseur. Cette entreprise américaine spécialisée dans les technologies de reconnaissance faciale aurait, selon l'autorité française, violé plusieurs articles du règlement général pour la protection des données personnelles (RGPD). Le régulateur considère que la firme traite illicitement une immense quantité de données personnelles, ce qui est un manquement à l'article 6 du RGPD, et ne prendrait pas en compte de manière satisfaisante et effective le droit des personnes vis-à-vis de leur donnée, ce qui ne respecte pas les articles 12, 15 et 17 du même règlement. Pour ces raisons, la CNIL avait mis en demeure l'entreprise américaine et lui avait demandé de mettre fin à ces pratiques illicites. Si initialement, cette mise en demeure devait durer que deux moins, le gendarme français de la protection des données a laissé plus de temps à Clearview AI pour qu'il puisse régulariser sa situation. Malgré cela, la CNIL considère que la firme américaine n'a rien fait pour être en règle.


                Une enquête approfondie a permis de mettre en lumière les agissements de Clearview AI
                Pour la CNIL, « la société s’est approprié plus de 20 milliards d’images à travers le monde ». Elle ajoute que « l’immense majorité des personnes dont les images sont aspirées et versées dans le moteur de recherche ignore être concernée par ce dispositif ». Le régulateur affirme qu'elle a reçu de multiples plaintes à partir de mai 2020 et qu'elle a lancé une enquête les mois qui ont suivi avec l'aide d'autres autorités européennes.
                
                Au terme de cette enquête et de l'inaction de Clearview AI pour mettre fin à ces agissements, la CNIL a appliqué l'article 83 du RGPD, l'autorisant à sanctionner l'entreprise et à prononcer « une sanction pécuniaire maximale ». Dans un communiqué, la commission a donc annoncé qu'elle sanctionnait Clearview AI d'une amende de 20 millions d'euros tout en lui demandant de mettre fin à ses agissements illicites. À noter que la société a deux mois pour payer cette amende, sans quoi, celle-ci augmentera de 100 000 euros par jour de retard.
                
                Dans d'autres pays, des sanctions équivalentes ont été prises à l'encontre de Clearview AI. C'est le cas du Royaume-Uni où elle a été obligée de payer une amende de près de 9 millions d'euros pour des raisons sensibles identiques à celles évoquées par la CNIL. Aux États-Unis, pays d'origine de l'entreprise, elle n'a plus le droit de vendre sa base de données aux entreprises privées. Pour l'heure, la technologie de Clearview AI est utilisée par les autorités américaines ou encore dans le cadre de la Guerre en Ukraine.",
                "auteur_id" => 'siecledigita',
                "image" => 'https://siecledigital.fr/wp-content/uploads/2020/02/reconnaissance-faciale-1820x1024.jpg'
            ]
            );
    }
}
