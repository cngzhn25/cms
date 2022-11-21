<?php
if (route(1) == "") {
    $route[1] = "index";
}
if(!file_exists(admin_controller(route(1)))) {
    $route[1] = "index";
}
$menus  = [
    "index" => [
        "title" => "Anasayfa" ,
        "icon" => "home4"
    ],
    "article" => [
        "title" => "Makaleler",
        "icon" => "newspaper2",
        "submenu" => [
            "add-article" => [
                "title" => "Makale Ekle"
            ],
            "edit-article" => [
                "title" => "Makale Düzenle"
            ],
            "article-list" => [
                "title" => "Makaleleri Listele"
            ]
        ]
    ],
    "images" => [
        "title" => "Gorseller",
        "icon" => "images2"
    ],
    "users" => [
        "title" => "Üyeler",
        "icon" => "people",
        "submenu" => [
            "add-user" => [
                "title" => "Üye Ekle"
            ],
            "edit-user" => [
                "title" => "Üye Düzenle"
            ],
            "user-list" => [
                "title" => "Üyeleri Listele"
            ]
        ]
    ],
    "settings" => [
        "title" => "Ayarlar",
        "icon" => "wrench2" ,
        "submenu" => [
            "home-page" => [
                "title" => "Anasayfa Ayarları"
            ],
            "contact" => [
                "title" => "İletişim Sayfası Ayarları"
            ]
        ]
    ],
    "contact" => [
        "title" => "İletişim",
        "icon" => "bubbles8"
    ]

];
require_once admin_controller(route(1));