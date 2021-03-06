<?php
return [
    '@class' => "Grav\\Common\\File\\CompiledYamlFile",
    'filename' => "system/config/media.yaml",
    'modified' => 1416992213,
    'data' => [
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
];
