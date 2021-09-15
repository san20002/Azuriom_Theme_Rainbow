<?php

return [
    'config' => [
        'global' => [
            'name' => 'Général',
            'id' => 'general',
            'article' => [
                'comment' => 'Ne pas afficher les commentaire dans les articles',
                'like' => 'Ne pas afficher les jaime dans les articles'
            ],
            'header' => [
                'icon' => 'Ne pas afficher les icons dans la haut de page',
                'text' => 'Ne pas afficher le text de la navigation'
            ],
            'vote' => [
                'icon' => 'Ne pas afficher les icons des sites dans les boutons de vote',
            ]
        ],
        'slider' => [
            'name' => 'Slider',
            'id' => 'slider',
            'background' => 'Afficher l\'image en fond'
        ],
        'social' => [
            'name' => 'Réseau social',
            'id' => 'social-link'
        ],
        'footer' => [
            'name' => 'Pied de page',
            'id' => 'footer-back'
        ],
        'cgu' => [
            'name' => 'Condition général d\'utilisation',
            'input_link' => 'Lien de page des CGU',
            'abbreviation' => 'CGU',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Penser a crée la <a href="/admin/pages" target="_blank" title="Page">page</a> avec le même lien que vous avez entrez si dessous'
        ],
        'cgv' => [
            'name' => 'Condition général de vente',
            'input_link' => 'Lien de page des CGV',
            'abbreviation' => 'CGV',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Penser a crée la <a href="/admin/pages" target="_blank" title="Page">page</a> avec le même lien que vous avez entrez si dessous'
        ],
        'download' => [
            'name' => 'Téléchargement',
            'input_link' => 'Lien de la page de téléchargement',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Penser a crée la <a href="/admin/pages" target="_blank" title="Page">page</a> avec le même lien que vous avez entrez si dessous'
        ],
        'image' => 'Image',
        'title' => 'Titre',
        'description' => 'Description',
        'icon' => 'Icon  exemple: <i class="fab fa-discord"></i>',
        'name' => 'Nom',
        'lien' => 'Lien',
        'fontawesome' => 'Pour obtenir les icons veuillez utiliser les classes de',
        'discord' => 'ID du serveur Discord',
        'setting' => [
            'save' => 'Sauvegarder',
            'color' => [
                'button' => 'Bouton',
                'alert' => 'Alerte',
                'bgText' => 'Fond + Texte',
                'color' => 'Couleur',
                'bgColor' => 'Couleur de fond',
                'textColor' => 'Couleur du texte',
            ]
        ],
        'alert' => [
            'confirmButtonText' => 'Oui, je réinitialise !',
            'yes' => 'Oui',
            'cancel' => 'Fermer',
            'reset' => [
                'title' => 'Vous êtes sûr de vouloir réinitialiser les couleurs du thème ?',
                'text' => 'Vous ne pourrez pas revenir en arrière !',
                'confirm' => [
                    'title' => 'Réinitialiser !',
                    'text' => 'Vous avez réinitialisé les couleurs du thème',
                ],
            ],
            'save' => 'Sauvegarde des couleurs dans la configuration'

        ]
    ],
];
