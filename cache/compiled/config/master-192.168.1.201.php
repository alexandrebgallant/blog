<?php
return [
    '@class' => "Grav\\Common\\Config\\Config",
    'timestamp' => 1416992384,
    'checksum' => "c765021de4ff6feee4646d99796992ea",
    'data' => [
        'streams' => [
            'schemes' => [
                'user' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user"
                        ]
                    ]
                ],
                'blueprints' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user://blueprints",
                            '1' => "system/blueprints"
                        ]
                    ]
                ],
                'config' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user://config",
                            '1' => "system/config"
                        ]
                    ]
                ],
                'plugins' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user://plugins"
                        ]
                    ]
                ],
                'plugin' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user://plugins"
                        ]
                    ]
                ],
                'themes' => [
                    'type' => "ReadOnlyStream",
                    'prefixes' => [
                        '' => [
                            '0' => "user://themes"
                        ]
                    ]
                ],
                'cache' => [
                    'type' => "Stream",
                    'prefixes' => [
                        '' => [
                            '0' => "cache"
                        ]
                    ]
                ],
                'log' => [
                    'type' => "Stream",
                    'prefixes' => [
                        '' => [
                            '0' => "logs"
                        ]
                    ]
                ],
                'asset' => [
                    'type' => "ReadOnlyStream",
                    'paths' => [
                        '0' => "assets"
                    ]
                ],
                'image' => [
                    'type' => "ReadOnlyStream",
                    'paths' => [
                        '0' => "user://images"
                    ]
                ],
                'page' => [
                    'type' => "ReadOnlyStream",
                    'paths' => [
                        '0' => "user://pages"
                    ]
                ],
                'account' => [
                    'type' => "ReadOnlyStream",
                    'paths' => [
                        '0' => "user://accounts"
                    ]
                ]
            ]
        ],
        'plugins' => [
            'taxonomylist' => [
                'enabled' => true,
                'route' => "/blog"
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    '404' => "/error"
                ]
            ],
            'archives' => [
                'enabled' => true,
                'built_in_css' => true,
                'date_display_format' => "F Y",
                'show_count' => true,
                'limit' => 12,
                'order' => [
                    'by' => "date",
                    'dir' => "desc"
                ],
                'filter_combinator' => "and",
                'filters' => [
                    'category' => "blog"
                ]
            ],
            'breadcrumbs' => [
                'enabled' => true,
                'built_in_css' => true,
                'show_all' => true
            ],
            'feed' => [
                'enabled' => true,
                'limit' => 10,
                'description' => "My Feed Description",
                'lang' => "en-us",
                'length' => 500
            ],
            'random' => [
                'enabled' => true,
                'route' => "/random",
                'filters' => [
                    'category' => "blog"
                ],
                'filter_combinator' => "and"
            ],
            'pagination' => [
                'enabled' => true,
                'path' => "/blog",
                'built_in_css' => true
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => "/sitemap"
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ]
        ],
        'site' => [
            'title' => "Grav",
            'author' => [
                'name' => "Joe Bloggs",
                'email' => "joe@test.com"
            ],
            'taxonomies' => [
                '0' => "category",
                '1' => "tag",
                '2' => "month"
            ],
            'blog' => [
                'route' => ""
            ],
            'metadata' => [
                'description' => "Grav is an easy to use, yet powerful, open source flat-file CMS"
            ],
            'summary' => [
                'size' => 300
            ],
            'routes' => [
                '/something/else' => "/blog/sample-3",
                '/another/one/here' => "/blog/sample-3"
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'home' => [
                'alias' => "/blog"
            ],
            'pages' => [
                'theme' => "antimatter",
                'markdown_extra' => false,
                'order' => [
                    'by' => "defaults",
                    'dir' => "asc"
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'short' => "jS M Y",
                    'long' => "F jS \\a\\t g:ia"
                ],
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'events' => [
                    'page' => true,
                    'twig' => true
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => "file"
                ],
                'driver' => "auto",
                'prefix' => "g"
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'twig' => true,
                'shutdown' => [
                    'close_connection' => true
                ]
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => "file",
                'thumb' => "media/thumb.png",
                'mime' => "application/octet-stream",
                'image' => [
                    'filters' => [
                        'default' => [
                            '0' => "enableProgressive"
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => "image",
                'thumb' => "media/thumb-jpg.png",
                'mime' => "image/jpeg"
            ],
            'jpeg' => [
                'type' => "image",
                'thumb' => "media/thumb-jpeg.png",
                'mime' => "image/jpeg"
            ],
            'png' => [
                'type' => "image",
                'thumb' => "media/thumb-png.png",
                'mime' => "image/png"
            ],
            'gif' => [
                'type' => "image",
                'thumb' => "media/thumb-gif.png",
                'mime' => "image/gif"
            ],
            'mp4' => [
                'type' => "video",
                'thumb' => "media/thumb-mp4.png",
                'mime' => "video/mp4"
            ],
            'mov' => [
                'type' => "video",
                'thumb' => "media/thumb-mov.png",
                'mime' => "video/quicktime"
            ],
            'm4v' => [
                'type' => "video",
                'thumb' => "media/thumb-m4v.png",
                'mime' => "video/x-m4v"
            ],
            'swf' => [
                'type' => "video",
                'thumb' => "media/thumb-swf.png",
                'mime' => "video/x-flv"
            ],
            'txt' => [
                'type' => "file",
                'thumb' => "media/thumb-txt.png",
                'mime' => "text/plain"
            ],
            'doc' => [
                'type' => "file",
                'thumb' => "media/thumb-doc.png",
                'mime' => "application/msword"
            ],
            'html' => [
                'type' => "file",
                'thumb' => "media/thumb-html.png",
                'mime' => "text/html"
            ],
            'pdf' => [
                'type' => "file",
                'thumb' => "media/thumb-pdf.png",
                'mime' => "application/pdf"
            ],
            'zip' => [
                'type' => "file",
                'thumb' => "media/thumb-zip.png",
                'mime' => "application/zip"
            ],
            'gz' => [
                'type' => "file",
                'thumb' => "media/thumb-gz.png",
                'mime' => "application/gzip"
            ]
        ]
    ]
];
