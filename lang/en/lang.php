<?php

return [
    'config' => [
        'global' => [
            'name' => 'Global',
            'id' => 'global',
            'article' => [
                'comment' => 'Not allows to display comments in articles',
                'like' => 'Not allows to display jaime in articles'
            ],
            'header' => [
                'icon' => 'Not displays the icons at the top of the page.',
                'text' => 'Hide navigation text'
            ],
            'vote' => [
                'icon' => 'Afficher les icons des sites dans les boutons de vote',
            ]
        ],
        'slider' => [
            'name' => 'Slider',
            'id' => 'slider',
            'background' => 'Display the image in the background'
        ],
        'social' => [
            'name' => 'Social network',
            'id' => 'social-link'
        ],
        'footer' => [
            'name' => 'Footer',
            'id' => 'footer-back'
        ],
        'cgu' => [
            'name' => 'General conditions of use',
            'input_link' => 'Link CGU',
            'abbreviation' => 'CGU',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Think has created the <a href="/admin/pages" target="_blank" title="Page">page</a> with the same link you entered if below'
        ],
        'cgv' => [
            'name' => 'General terms and conditions of sale',
            'input_link' => 'Link CGV',
            'abbreviation' => 'CGV',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Think has created the <a href="/admin/pages" target="_blank" title="Page">page</a> with the same link you entered if below'
        ],
        'download' => [
            'name' => 'Download',
            'input_link' => 'Link download',
            'warning' => '<i class="fas fa-exclamation-triangle pr-1"></i></span>Think has created the <a href="/admin/pages" target="_blank" title="Page">page</a> with the same link you entered if below'
        ],
        'image' => 'Image',
        'title' => 'Title',
        'description' => 'Description',
        'icon' => 'Icon  exemple: <i class="fab fa-discord"></i>',
        'name' => 'Name',
        'link' => 'Link',
        'fontawesome' => 'To get the icon please use the classes',
        'discord' => 'Discord server ID',
        'setting' => [
            'save' => 'Save theme',
            'color' => [
                'button' => 'Button',
                'alert' => 'Alert',
                'bgText' => 'Bg + Text',
                'color' => 'Color',
                'bgColor' => 'Background color',
                'textColor' => 'Text color',
            ]
        ],
        'alert' => [
            'confirmButtonText' => 'Yes, reset it!',
            'yes' => 'Yes',
            'cancel' => 'Cancel',
            'reset' => [
                'title' => 'Are you sure reset color?',
                'text' => 'You won\'t be able to revert this!',
                'confirm' => [
                    'title' => 'reset!',
                    'text' => 'You have reset the colors of the theme',
                ],
            ],
            'save' => 'Color save in config'

        ]
    ],
];
