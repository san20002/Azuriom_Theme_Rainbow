<?php

return [
    'site'        => [
        'register'       => 'registered on our site',
        'memberRegister' => 'Registered Members',
    ],
    'image'       => 'Image',
    'title'       => 'Title',
    'description' => 'Description',
    'icon'        => 'Icon  exemple: <i class="fab fa-discord"></i>',
    'name'        => 'Name',
    'animation'   => 'Animation',
    'easing'      => 'Easing',
    'duration'    => 'Duration (ms)',
    'offset'      => 'Offset',
    'placement'   => 'Placement',
    'link'        => 'Link',
    'fontawesome' => 'To get the icons please use the',
    'plugin'      => [
        'requires' => 'Requires this plugin'
    ],
    'advancedBan' => [
        'title'  => 'Plugin AdvancedBan',
        'banner' => [
            'advancedBan' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Bannière AdvancedBan',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'advancedBan' => [
                'title' => 'Interface AdvancedBan',
            ],
        ]
    ],
    'articles'    => [
        'title'  => 'Article(s)',
        'banner' => [
            'article'    => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Article',
                'hidden' => 'Do not display'
            ],
            'allArticle' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner All article',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'article'    => [
                'title' => 'Interface article',
                'label' => [
                    'comment-hidden' => 'Do not display comments in articles',
                    'follow-hidden'  => 'Don\'t display the likes in the articles',
                ],
            ],
            'allArticle' => [
                'title' => 'Interface All article',
            ],
        ]
    ],
    'changelog'   => [
        'title'  => 'Plugin Changelog',
        'banner' => [
            'changelog' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner changelog',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'changelog' => [
                'title' => 'Interface changelog',
            ],
        ]
    ],
    'faq'         => [
        'title'  => 'Plugin FAQ',
        'banner' => [
            'faq' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner FAQ',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'faq' => [
                'title' => 'Interface FAQ',
            ],
        ]
    ],
    'footer'      => [
        'title'     => 'Pied de page',
        'social'    => [
            'title' => 'Social network',
            'info'  => '<span>Allows you to add your social networks.</span>'
        ],
        'condition' => [
            'title' => 'CGU,CGV,etc...',
            'info'  => '<span>Allows you to add your CGV, CGU, Legal Notice links.</span>
                        <span>Just remember to add a page link that you can create here  <a href="/admin/pages" target="_blank" title="Page">page</a></span>
                        '
        ],
        'download'  => [
            'title'  => 'Button download',
            'hidden' => 'Do not display the button',
            'info'   => '<span>Allows to add a download button if you have a launcher.</span>'
        ],
        'logo'      => [
            'title'  => 'Logo in footer',
            'hidden' => 'Do not display the logo',
        ],
        'liens'     => [
            'title'  => 'Links',
            'hidden' => 'Do not display the links',
            'info'   => '<span>Allows to add your links (Home, store, contact, discord).</span>'
        ],
    ],
    'forum'       => [
        'title'  => 'Plugin Forum',
        'banner' => [
            'forum' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner forum',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'forum'      => [
                'title' => 'Interface forum',
            ],
            'breadcrumb' => [
                'title' => 'Interface breadcrumb',
            ],
            'message'    => [
                'title' => 'Interface Derniers messages',
            ],
            'stati'      => [
                'title' => 'Interface Stats',
            ],
            'user'       => [
                'title' => 'Interface User online',
            ],
        ],
    ],
    'global'      => [
        'title' => 'Global',
    ],
    'header'      => [
        'title'     => 'Header',
        'preloader' => [
            'title'  => 'Preloader',
            'hidden' => 'Do not display the preloader',
            'info'   => '<span>Allows to display a loading page the time that the page constitutes the elements.</span>'
        ],
        'navbar'    => [
            'title'      => 'Navigation bar',
            'hiddenIcon' => 'Do not display the icons in the top of the page',
            'hiddenText' => 'Do not display the text of the navigation',
            'info'       => '<span>Allows to display text & image or just image or text.</span>'
        ],
        'icon'      => [
            'title' => 'Navigation icon',
            "alert" => 'Remember to update the icons if you change the Name of the link',
            'info'  => '<span>Allows to display text & image or just image or text.</span>',
        ]
    ],
    'home'        => [
        'title'    => 'Home page',
        'items'    => [
            'article'        => [
                'title' => 'Interface all articles',
            ],
            'ip-server'      => [
                'title'       => 'Interface ip-server',
                'info'        => '<span>Allows to display your ip on the site.</span>',
                'label'       => [
                    'ip'     => 'Your server IP',
                    'hidden' => 'Do not display',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],
            'count-register' => [
                'title' => 'Interface member register',
                'info'  => '<span>Allows to display the number of people registered on the site.</span>',
                'label' => [
                    'hidden' => 'Do not display',
                ],
            ],
            'download'       => [
                'title'       => 'Interface download',
                'info'        => '<span>Allows to add a download button if you have a launcher.</span>',
                'hidden'      => 'Do not display the button',
                'label'       => [
                    'name'   => 'Name',
                    'url'    => 'Link',
                    'hidden' => 'Do not display',
                ],
                'placeholder' => [
                    'name' => 'Name',
                    'url'  => 'Link',
                ],
            ],
            'discord'        => [
                'title'       => 'Interface discord',
                'info'        => '<span>Allows to display your discord.</span>
                        <span>How to find your <a href="https://support.discord.com/hc/fr/articles/206346498-O%C3%B9-trouver-l-ID-de-mon-compte-utilisateur-serveur-message-" target="_blank" title="ID discord">ID SERVEUR DISCORD</a></span>',
                'label'       => [
                    'id'     => 'Discord server ID',
                    'hidden' => 'Do not display',
                ],
                'placeholder' => [
                    'id' => '684097488164225073',
                ],

            ]
        ],
        'banner'   => [
            'article'     => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Article(s)',
                'hidden' => 'Do not display'
            ],
            'information' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Information(s)',
                'hidden' => 'Do not display'
            ],
            'login'       => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Connexion',
                'hidden' => 'Do not display'
            ],
        ],
        'particle' => [
            'title'  => 'Particles',
            'hidden' => 'Do not display the particles',
            'info'   => '<span>Allows to display particles.</span>',
        ],
        'slider'   => [
            'title' => 'Slider',
            'info'  => '<span>Allows to display a slider (scrolling a list of text + image).</span>',
        ]
    ],
    'pages'       => [
        'title'  => 'Page(s)',
        'banner' => [
            'page' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Pages',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'page' => [
                'title' => 'Interface Pages',
            ],
        ]
    ],
    'sliders'     => [
        'title'      => 'Plugin Sliders',
        'name'       => 'Slider',
        'id'         => 'slider',
        'background' => 'Display the image in the background',
        'reverse'    => 'Invert image - text'
    ],
    'liteBans'    => [
        'title'  => 'Plugin LiteBans',
        'banner' => [
            'litebans' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner litebans',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'liteBans' => [
                'title' => 'Interface liteBans',
            ],
            'navbar'   => [
                'title' => 'Interface NavBar',
            ],
        ]
    ],
    'profile'     => [
        'title'  => 'Profil',
        'banner' => [
            'buy'  => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner My achats',
                'hidden' => 'Do not display'
            ],
            'skin' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner My skin',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'buy'  => [
                'title' => 'Interface My achats',
            ],
            'skin' => [
                'title' => 'Interface My skin',
            ],
        ]
    ],
    'project'     => [
        'title' => 'Plugin Project',
    ],
    'shop'        => [
        'title'  => 'Plugin Shop',
        'banner' => [
            'shop'       => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner boutique',
                'hidden' => 'Do not display'
            ],
            'filter'     => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner filtre',
                'hidden' => 'Do not display'
            ],
            'cart'       => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner panier',
                'hidden' => 'Do not display'
            ],
            'profile'    => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner profil',
                'hidden' => 'Do not display'
            ],
            'coupons'    => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner coupons',
                'hidden' => 'Do not display'
            ],
            'addCoupons' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner ajouter un coupon',
                'hidden' => 'Do not display'
            ],
            'payment'    => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner Paiement',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'shop'       => [
                'title' => 'Interface boutique',
            ],
            'filter'     => [
                'title' => 'Interface filtre',
            ],
            'cart'       => [
                'title' => 'Interface panier',
            ],
            'profile'    => [
                'title' => 'Interface profil',
            ],
            'coupons'    => [
                'title' => 'Interface coupons',
            ],
            'addCoupons' => [
                'title' => 'Interface ajouter un coupon',
            ],
            'payment'    => [
                'title' => 'Interface Paiement',
            ],
        ]
    ],
    'skinApi'     => [
        'title'  => 'Plugin SkinApi',
        'banner' => [
            'skin' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner skin',
                'hidden' => 'Do not display'
            ],
        ],
    ],
    'support'     => [
        'title'  => 'Plugin Support',
        'banner' => [
            'support' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner support',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'support' => [
                'title' => 'Interface support',
            ],
        ]
    ],
    'vote'        => [
        'title'  => 'Plugin Vote',
        'banner' => [
            'vote' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner vote',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'vote'        => [
                'title' => 'Interface vote',
                'label' => [
                    'hidden' => 'Do not display site icons in the voting buttons',
                ],
            ],
            'podium'      => [
                'title' => 'Interface podium',
                'label' => [
                    'hidden' => 'Do not display podium',
                ],
            ],
            'classement'  => [
                'title' => 'Interface classement',
            ],
            'recompenses' => [
                'title' => 'Interface recompenses',
            ],
        ],
    ],
    'wiki'        => [
        'title'  => 'Plugin Wiki',
        'banner' => [
            'wiki' => [
                'info'   => '<span>Allows you to adjust the banner to your liking.</span>',
                'title'  => 'Banner wiki',
                'hidden' => 'Do not display'
            ],
        ],
        'items'  => [
            'wiki' => [
                'title' => 'Interface wiki',
            ],
        ],
    ],

    'setting' => [
        'save'  => 'Save theme',
        'color' => [
            'button'    => 'Button',
            'alert'     => 'Alert',
            'bgText'    => 'Bg + Text',
            'color'     => 'Color',
            'bgColor'   => 'Background color',
            'textColor' => 'Text color',
        ]
    ],
    'alert'   => [
        'confirmButtonText' => 'Yes, reset it!',
        'yes'               => 'Yes',
        'cancel'            => 'Cancel',
        'reset'             => [
            'title'   => 'Are you sure reset color?',
            'text'    => 'You won\'t be able to revert this!',
            'confirm' => [
                'title' => 'reset!',
                'text'  => 'You have reset the colors of the theme',
            ],
        ],
        'save'              => 'Color save in config'

    ]
];
