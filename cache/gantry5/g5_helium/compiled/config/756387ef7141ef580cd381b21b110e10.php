<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1486955586,
    'checksum' => 'f1c91f9b0cd1bfa0fed6c5a037fe6697',
    'files' => [
        'user/data/gantry5/themes/g5_helium/config/full_width' => [
            'assignments' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/full_width/assignments.yaml',
                'modified' => 1486856971
            ],
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/full_width/index.yaml',
                'modified' => 1486916526
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/full_width/layout.yaml',
                'modified' => 1486916526
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'page' => [
                0 => [
                    'sample-layouts/full-width' => 1
                ]
            ]
        ],
        'index' => [
            'name' => 'full_width',
            'timestamp' => 1486916526,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1468340932
            ],
            'positions' => [
                'sidebar' => 'Sidebar'
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'utility' => 'Utility',
                'above' => 'Above',
                'testimonials' => 'Testimonials',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'mainbar' => 'Mainbar',
                'sidebar' => 'Sidebar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'custom' => [
                    'custom-9029' => 'Header',
                    'custom-7890' => 'Content'
                ],
                'logo' => [
                    'logo-1212' => 'Logo / Image',
                    'logo-1291' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-6059' => 'Menu'
                ],
                'social' => [
                    'social-8619' => 'Social'
                ],
                'position' => [
                    'position-position-4882' => 'Sidebar'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-7609' => 'Horizontal Menu'
                ],
                'copyright' => [
                    'copyright-3813' => 'Copyright'
                ],
                'totop' => [
                    'totop-1176' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-3826' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'sidebar' => 'sidebar',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'logo-1212' => 'logo-9608',
                    'menu-6059' => 'menu-6409',
                    'social-8619' => 'social-3171',
                    'position-position-4882' => 'position-position-3949',
                    'logo-1291' => 'logo-9571',
                    'horizontalmenu-7609' => 'horizontalmenu-9034',
                    'copyright-3813' => 'copyright-1736',
                    'totop-1176' => 'totop-8670',
                    'mobile-menu-3826' => 'mobile-menu-5697'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1468340932
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                '/header/' => [
                    0 => [
                        0 => 'custom-9029'
                    ]
                ],
                '/intro/' => [
                    
                ],
                '/features/' => [
                    
                ],
                '/utility/' => [
                    
                ],
                '/above/' => [
                    
                ],
                '/testimonials/' => [
                    
                ],
                '/expanded/' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'mainbar 75' => [
                                0 => [
                                    0 => 'custom-7890'
                                ]
                            ]
                        ],
                        1 => [
                            'sidebar 25' => [
                                
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'expanded' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main'
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'block',
                            1 => 'attributes',
                            2 => 'children'
                        ]
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ]
            ],
            'content' => [
                'custom-9029' => [
                    'title' => 'Header',
                    'attributes' => [
                        'html' => '<h2 class="large-heading">Full Width Example</h2>
<p>Cuaqum ante augue, iaculis eget fringilla vel, gravida non nibh. Nullam dignissim, felis eu imperdiet feugiat, libero ipsum gravida arcu, eu fermentum elit metus vel mauris.</p>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'custom-7890' => [
                    'title' => 'Content',
                    'attributes' => [
                        'html' => '<h2>H2 Heading</h2>
<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero. Fusce ante. Nullam interdum aliquet metus. Ut ultrices vestibulum tellus. Praesent quis erat. Nam id turpis sit amet neque cursus luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque id tortor. In vitae sapien. Nunc quis tellus. </p>

<h3>H3 Heading</h3>
<p>In erat. Pellentesque erat. <strong>Mauris vehicula vestibulum justo.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pulvinar est. Integer urna. Pellentesque pulvinar dui a magna. Nulla facilisi.</p>

<h4>H4 Heading</h4>
<p>Mauris lobortis. Aliquam lacinia purus. <strong>Pellentesque magna</strong>. Mauris euismod metus nec tortor. Phasellus elementum, quam a euismod imperdiet, ligula felis faucibus enim, eu malesuada nunc felis sed turpis. <a href="#">Morbi convallis luctus tortor</a>. Integer bibendum lacinia velit. Suspendisse mi lorem, porttitor ut, interdum et, lobortis a, lectus. Phasellus vitae est at massa luctus iaculis. In tincidunt.</p>'
                    ]
                ]
            ]
        ]
    ]
];
