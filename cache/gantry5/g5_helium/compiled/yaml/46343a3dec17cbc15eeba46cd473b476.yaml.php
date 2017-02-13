<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/webdev/HTTP/grapevine/user/data/gantry5/themes/g5_helium/config/home_-_particles/layout.yaml',
    'modified' => 1486993944,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1486950195
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'owlcarousel-2455'
                ]
            ],
            '/testimonials/' => [
                0 => [
                    0 => 'custom-7658'
                ]
            ],
            '/features/' => [
                0 => [
                    0 => 'custom-3119'
                ]
            ],
            '/above/' => [
                0 => [
                    0 => 'contentcubes-7850'
                ]
            ],
            '/utility/' => [
                0 => [
                    0 => 'contenttabs-3854'
                ],
                1 => [
                    0 => 'custom-4501'
                ]
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 75' => [
                            
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
                    'class' => 'g-flushed'
                ]
            ],
            'testimonials' => [
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
            'above' => [
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
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
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
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'owlcarousel-2455' => [
                'title' => 'Owl Carousel',
                'attributes' => [
                    'imageOverlay' => 'disable',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://DSCF6816-Edit 1h.jpg',
                            'title' => 'IT SUPPORT MADE EASY',
                            'desc' => '',
                            'link' => 'Call',
                            'linktext' => 'Call',
                            'buttonclass' => 'button-outline',
                            'name' => 'New item'
                        ]
                    ]
                ]
            ],
            'custom-7658' => [
                'title' => 'Customer Testimonials',
                'attributes' => [
                    'html' => '<div class="fp-testimonials">
    <blockquote>
        <p class="h3">We can help develop your system, keep it going, and be on hand to solve technical problems.</p>
<p class="h3">We love and respect our clients, we want your IT systems to be successful so that we can all be in business for years to come.</p>
<p class="h3">People tell us we’re personable, diligent, and affordable.
<br>Talk to us: 0115 9280 908</p>
    </blockquote>
</div>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'custom-3119' => [
                'title' => 'Services',
                'attributes' => [
                    'html' => '<div class="fp-features">
    <div class="g-grid">
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <img src="gantry-media://Installation-Icon.jpg">
<p class="card-title">Installation</p>
                    <p class="card-text">Tell us what you need, we will investigate and provide a plan. Our experience can help you get the most from your tech budget.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <img src="gantry-media://maintainence-icon.jpg">
<p class="card-title">Maintenance</p>
                    <p class="card-text">We keep things ticking over and identify issues before they become a problem, helping clients to maintain service levels and plan for any outages.</p>
                </div>
            </div>
        </div>
        <div class="g-block size-33-3">
            <div class="card">
                <div class="card-block">
                    <img src="gantry-media://support-icon.jpg">
<p class="card-title">Support</p>
                    <p class="card-text">Inevitably there will be challenges, and when they come you will have an assured direct line to our team of guardian IT angels (and ninjas).</p>
                </div>
            </div>
        </div>
    </div>
</div>'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'contentcubes-7850' => [
                'title' => 'iPad Services',
                'attributes' => [
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://above/iPad Image 1c.jpg',
                            'imageposition' => 'left',
                            'label' => '',
                            'title' => 'As Apple certified engineers we are able to provide:',
                            'tags' => [
                                0 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'iOS Training and Support'
                                ],
                                1 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'Managed iPad Deployment'
                                ],
                                2 => [
                                    'icon' => 'fa fa-tag',
                                    'link' => '#',
                                    'target' => '_self',
                                    'text' => 'iPad Repair (including screens)'
                                ]
                            ],
                            'link' => '',
                            'linktext' => '',
                            'buttonclass' => '',
                            'buttontarget' => '_self',
                            'name' => 'Item 1'
                        ]
                    ]
                ]
            ],
            'contenttabs-3854' => [
                'title' => 'Content Tabs',
                'attributes' => [
                    'enabled' => 0,
                    'items' => [
                        0 => [
                            'content' => '<p>Gantry 5 includes a new, powerful Menu editor that makes menu organization,
particle and module injection, and visual enhancements a breeze. Here are just
a handful of things you can do with Gantry 5’s powerful Menu Editor.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>
                FontAwesome Icons
            </li>
            <li>
                Easy Module Injection
            </li>
            <li>
                Simple Particle Injection
            </li>
            <li>
                Drag-and-drop Functionality
            </li>
            <li>
                Per-item CSS Classes
            </li>
            <li>
                Submenu Column Control
            </li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>
                Easy Organization / Reordering
            </li>
            <li>
                Link Target Designation
            </li>
            <li>
                Multiple Dropdown Styles
            </li>
            <li>
                Per-item Image Support
            </li>
            <li>
                Subtitles
            </li>
            <li>
                Non-destructive
            </li>
        </ul>
    </div>
</div>
<div class="g-grid">
    <div class="g-block size-100">
        Find out more about using the Menu Editor in our <a href="http://docs.gantry.org/gantry5/configure/menu-editor">documentation</a>.
    </div>
</div>',
                            'title' => 'Menu Editor'
                        ],
                        1 => [
                            'content' => '<p>The Layout Manager makes it easier than ever to arrange and customize your users’ experience with drag-and-drop simplicity from start to finish. A handful of the many features found in the Layout Manager are listed below.</p>
<div class="g-grid size-100">
    <div class="g-block size-50">
        <ul>
            <li>Drag-and-drop Functionality</li>
            <li>Unlimited Items Per Row</li>
            <li>Unlimited Rows Per Section</li>
            <li>Easy Widget Position Placement</li>
            <li>Resize Items with Simple Sliders</li>
            <li>Per-section CSS Classes and Tag Attributes</li>
        </ul>
    </div>
    <div class="g-block size-50">
        <ul>
            <li>Per-block CSS Classes, Variations, and Tag Attributes</li>
            <li>Quick Preset Loading</li>
            <li>Undo and Redo</li>
            <li>Access to Easy-to-use Particles</li>
            <li>Intuitive Visual Interface</li>
            <li>Touch-screen Friendly</li>
        </ul>
    </div>
</div>
<div>Find out more about using the Layout Manager in our <a href="http://docs.gantry.org/gantry5/configure/layout-manager">documentation</a>.</div>',
                            'title' => 'Layout Manager'
                        ]
                    ]
                ]
            ],
            'custom-4501' => [
                'title' => 'Affiliation Logos',
                'attributes' => [
                    'html' => '<div class="center">
<p><img src="gantry-media://certifications-consolidated-1a.png"></p>
</div>'
                ]
            ]
        ]
    ]
];
