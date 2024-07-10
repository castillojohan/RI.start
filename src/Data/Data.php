<?php 

namespace App\Data;

class Data
{
    //* Constantes des tarifs
    const OLD_PRICE = '849';
    const NEW_PRICE = '336';

    //* Relatifs aux statistiques de la page d'accueil
    public $introductionText = "Transformez votre expérience Microsoft à Perpignan avec notre assistance et formation experte. Boostez votre efficacité dès aujourd'hui avec nos solutions sur mesure !";
    public $statistics = [
        "Apprenants" => "256",
        "Heures de formation dispensés" => "140h",
        "Taux de satisfaction" => "94%",
    ];

    //* variables référent handicap
    public $referentName = 'Gonzalez Yannick';
    const REFERENT_PHONE = '0448070478';
    const REFERENT_MAIL = 'yannick@ristart.fr';

    //* Relatif à la page 'formation'
    /**
     *  Ici pour ajouter ou remplacer une image dans le carroussel
     *  1. Ajouter la photo dans /public/assets/img
     *  2. ajouter un item  
     */
    public $carrousselImg = [
        [ "src" => "./assets/img/ecosystem.jpg", "alt" => "Image représentant l'écosysteme Microsoft" ],
        [ "src" => "./assets/img/study.jpg", "alt" => "Vision du dessus d'un bureau où est posé une paire de lunette des stylos et un cahier de note"],
        [ "src" => "./assets/img/teacher.jpg", "alt" => "Represente une enseignant, généré par IA" ],
        [ "src" => "./assets/img/books.jpg", "alt" => "Des carnets de note"],
        //? ICI ( ex: ['src' => './assets/img/nomDuFichier.jpg', 'alt'=>'le texte alternatif décrivant l'image']), en respectant au max la mise en page du code svp.
    ];

    //* Relatif à la petite présentation de formation
    public $formationFactSheet = [
        "title" => "Productivité et Créativité avec microsoft 365 business (2 jours)",
        "description" => "Performez avec les outils Microsoft 365, innovez et différenciez-vous grâce à une plus grande maitrise des logiciels les plus complet du marché.",
        "oldPrice" => self::OLD_PRICE,
        "newPrice" => self::NEW_PRICE,
        "bookingLink" => "https://outlook.office365.com/owa/calendar/RISTARTFORMATION@ristart.fr/bookings/s/9fyAKpyeQUyKV_qjFkOMpw2",
        "planFormationLink" => "https://ristartfr.sharepoint.com/:b:/s/imoverskill/EXyYw66aei1EpWRqUb6kP6QBLE-oY-xOLKIzsttMLGGcKg?e=Xmx5vc",
    ];

    //* Relatif au FAQ complet de la formation.
    /**
     * Pour rajouter un article ou une question/paragraphe 
     * Ajouter un Tableau [], ex : ['title' => 'Nouveau Paragraphe', 'p'=>'Contenu du nouveau paragraphe'], 
     * Format liste , insérer un tableau dans l'index "p" ex : ['title' => 'Nouveau Paragraphe', 'p'=>['trucDeListe1', 'trucDeListe2', 'trucDeListe3']],
     */
    public $formationContent = [
        [
            "title" => "A qui est adressé cette formation ?",
            "p" => "Ce plan de formation s’adresse aux professionnels autant qu’aux particuliers qui souhaitent découvrir et maîtriser les fonctionnalités de Microsoft 365 Business Standard, notamment pour le stockage et le partage de fichiers, la création de contenus interactifs et la collaboration en équipe. Il peut s’agir de salariés, de managers, de formateurs, de consultants, etc."
        ],
        [
            "title" => "Connaissances Préalables",
            "p" => "Les participants doivent avoir un niveau de base en informatique et en bureautique, ainsi qu’une connaissance générale des services et applications de Microsoft 365 Business Standard"
        ],
        [
            "title" => "Moyens Pédagogiques",
            "p" => "Réalisation d’exercices théoriques et pratiques sur l’ensemble des items de la formation."
        ],
        [
            "title" => "Durée et lieu",
            "p" => "14 heures répartis sur 4 ½ journée – Centre de formation RI.START."
        ],
        [
            "title" => "Objectifs",
            "p" => [
                "Configurer et administrer Microsoft 365 Business Standard avec un domaine hébergé",
                "Utiliser les services et applications inclus dans la suite, tels qu’Azure AD, Exchange Online, SharePoint Online, OneDrive Business, Microsoft Pureview, Outlook, To Do, Forms, Sway et Teams",
                "Intégrer les applications entre elles pour optimiser leur productivité et leur créativité",
                "Créer et partager des fichiers personnels avec OneDrive Business",
                "Créer des formulaires en ligne avec Forms",
                "Créer des présentations dynamiques avec Sway",
                "Collaborer en équipe avec Teams",
            ]
        ],
        [
            "title" => "Délai d'accès à la formation",
            "p" => "La mise en place de cette formation peut être effective sous 21 jours, en fonction du financement de celle-ci"
        ],
        [
            "title" => "Evaluation",
            "p" => [
                "Recueil des attentes du stagiaire.",
                "Contrôle de connaissance post formation, par examen individuel.",
                "Feuille de présence et attestation de fin de stage",
                "Enquête de satisfaction.",
            ]
        ],
        [
            "title" => "Et après ?",
            "p" => "Le contenu de ce cours ne couvre qu’une partie de la certification « Microsoft 365 ». Nous vous conseillons vivement de suivre les autres modules « Microsoft 365 / Office 365 par les usages »"
        ],
        [
            "title" => "Tarif",
            "p" => "<span class='stroked'>".self::OLD_PRICE."</span> &#10132 <strong>".self::NEW_PRICE."</strong> HT par participant."
        ],
    ];

    //* relatif au programme de formation
    public $formationProgram = [
        "Journée 1" => [
            "Matin" => [
                "title" => "Présentation et configuration de Microsoft 365 Business Standard",
                "Contenu" => [
                    "Présentation de microsoft 365 Buisiness",
                    "Centres d’Administration de Microsoft 365",
                    "Présentation de Copilot",
                    "Atelier Pratique : Copilot",
                ],
                "Atelier" => [
                    "Les participants mettront en pratique la théorie apprise en utilisant les centres d’administration pour effectuer des tâches de configuration de base et en expérimentant avec Copilot pour générer du contenu.",
                ]
            ],
            "Après-midi" => [
                "title" => "Maîtrise de la Messagerie et Collaboration",
                "Contenu" => [
                    "Outlook et Exchange Online",
                    "Atelier pratique Outlook et Exchange",
                    "To Do: Gestion des tâches",
                    "Clipchamp: Création de contenus vidéo",
                    "Atelier pratique: Clipchamp",
                    "Forms: Collecte d’informations",
                    "Atelier pratique: Forms",
                ],
                "Atelier" => [
                    "Les participants appliqueront les connaissances acquises pour gérer efficacement leur communication et collaborer sur des projets communs à l’aide des outils présentés.",
                ],
            ],
        ],
        "Journée 2" => [
            "Matin" => [
                "title" => "Collaboration et Gestion de Contenu avec SharePoint et OneDrive",
                "Contenu" => [
                    "SharePoint Online",
                    "Atelier pratique : SharePoint",
                    "OneDrive Buisiness",
                    "Atelier Pratique : OneDrive",
                    "Copilot sans abonnement",
                    "Atelier pratique : Copilot"
                ],
                "Atelier" => [
                    "Les participants engageront des activités pratiques pour consolider leurs compétences en matière de gestion de contenu et de collaboration en ligne, en utilisant SharePoint et OneDrive. Ils découvriront également comment Copilot peut les aider à créer et à gérer des documents de manière plus efficace.",
                ]
            ],
            "Après-midi" => [
                "title" => "Collaboration Avancée avec Teams et Révision Générale",
                "Contenu" => [
                    "Teams: Communication et Collaboration",
                    "Atelier pratique: Teams",
                    "Révisions générales",
                ],
                "Atelier" => [
                    "Les participants réaliseront des activités pratiques sur Teams, renforçant leur capacité à communiquer et collaborer efficacement en ligne. Ils auront également l’occasion de consolider leurs connaissances à travers des exercices de révision.",
                ],
            ],
        ],
    ];

    //* Relatif au référent handicap
    public $handiReferent = [
        "img" => [
            "src" => "./assets/img/refHandicap.jpg",
            "alt" => "image representant un groupe de travail",
        ],
    ];


    //* Relatif à la page Assistance
    public $assistance = [
        [
            'p' => 'Splashtop : Le logiciel d’accès et de support à distance le mieux noté',
            'imgSrc' => './assets/img/splash-logo.png',
            'imgAlt' => 'Logo du logiciel Splashtop',
            'link' => 'https://sos.splashtop.com/fr/sos-download?region=eu',
        ],
        [
            'p' => "EaseUS : EaseUS propose une série des programmes et d'utilitaires qui vous aideront à bien organiser vos données et à vous assurer une vie numérique 100% sûre.",
            'imgSrc' => './assets/img/easeus-logo.png',
            'imgAlt' =>'Logo EaseUs, utilitaire de gestion de données sûres.',
            'link' => 'https://down.easeus.com/product/tb_enterprise_trial',
        ],
        [
            'p' => "ESET : Protégez votre vie numérique avec une sécurité Internet fiable incluant un VPN sécurisé !",
            'imgSrc' => './assets/img/eset_logo.png',
            'imgAlt' =>'Logo EaseUs, solution numérique pour la protection de vos données.',
            'link' => 'https://download.eset.com/com/eset/apps/business/ees/windows/latest/ees_nt64.exe',
        ]
    ];



    //* Methode qui permet la transformation de l'adresse mail et du numéro de téléphone en HTMLEntities, pour éviter les bot de scrap de données.
    public function getObfuscatedString($string)
    {
        $obfuscatedString = '';
        $length = strlen($string);
    
        // Par exemple, convertir tous les chiffres en entités HTML sauf les 4 premiers et les 2 derniers
        for ($i = 0; $i < $length; $i++) {
            if ($i < 4 || $i >= $length - 2) {
                $obfuscatedString .= $string[$i];
            } else {
                $obfuscatedString .= '&#x' . dechex(ord($string[$i])) . ';';
            }
        }
        return $obfuscatedString;
    }
}