<?php
$content = file_get_contents('config/catalog.php');

$newProducts = "    'products' => [
        'bulk-material-handling' => [
            'name' => [
                'en' => 'Bulk Material Handling',
                'id' => 'Penanganan Material Curah'
            ],
            'slug' => 'bulk-material-handling',
            'icon' => 'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l5-3 5 3z',
            'short_description' => [
                'en' => 'Complete systems for transporting, storing, and processing bulk materials efficiently and safely.',
                'id' => 'Sistem lengkap untuk mengangkut, menyimpan, dan memproses material curah secara efisien dan aman.'
            ],
            'description' => [
                'en' => 'Our Bulk Material Handling solutions cover the entire spectrum — from belt conveyors and bucket elevators to transfer chutes and dust collection systems.',
                'id' => 'Solusi Penanganan Material Curah kami mencakup seluruh spektrum — mulai dari belt conveyor dan bucket elevator hingga transfer chute dan sistem pengumpulan debu.'
            ],
            'features' => [
                'en' => [
                    'Crushing Equipment i.e. Jaw, Cone, Impact, Hammer, Ball Mill, Grinder Mill, Sand Maker',
                    'Conveyor, Screen etc'
                ],
                'id' => [
                    'Peralatan Penghancur yaitu Jaw, Cone, Impact, Hammer, Ball Mill, Grinder Mill, Sand Maker',
                    'Konveyor, Layar dll'
                ]
            ],
            'image' => 'images/products/bulk-material-handling.png',
            'gallery' => [
                'images/products/bulk-material-handling.png',
            ],
            'meta_title' => [
                'en' => 'Bulk Material Handling Systems | Kajie Group',
                'id' => 'Sistem Penanganan Material Curah | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Comprehensive bulk material handling solutions by Kajie Group.',
                'id' => 'Solusi komprehensif penanganan material curah oleh Kajie Group.'
            ]
        ],

        'grain-handling' => [
            'name' => [
                'en' => 'Grain Handling',
                'id' => 'Penanganan Biji-bijian'
            ],
            'slug' => 'grain-handling',
            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
            'short_description' => [
                'en' => 'Grain storage silos, dryers, and mixing solutions for the agricultural and food processing industry.',
                'id' => 'Silo penyimpanan biji-bijian, pengering, dan solusi pencampuran untuk industri pertanian dan pengolahan makanan.'
            ],
            'description' => [
                'en' => 'We provide integrated grain handling systems — from intake pits and cleaning screens to high-capacity flat-bottom and hopper silos.',
                'id' => 'Kami menyediakan sistem penanganan biji-bijian yang terintegrasi — mulai dari lubang asupan dan layar pembersih hingga silo dasar datar dan hopper berkapasitas tinggi.'
            ],
            'features' => [
                'en' => [
                    'SILO',
                    'DRIER',
                    'MIXER'
                ],
                'id' => [
                    'SILO',
                    'PENGERING',
                    'PENCAMPUR'
                ]
            ],
            'image' => 'images/products/grain-handling.png',
            'gallery' => [
                'images/products/grain-handling.png',
            ],
            'meta_title' => [
                'en' => 'Grain Handling Silo & Dryer Systems | Kajie Group',
                'id' => 'Sistem Silo & Pengering Biji-bijian | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Grain storage silos, dryers, and mixing systems for agricultural and food processing.',
                'id' => 'Silo penyimpanan biji-bijian, pengering, dan sistem pencampuran untuk pertanian dan pengolahan makanan.'
            ]
        ],

        'packaging-automation' => [
            'name' => [
                'en' => 'Packaging & Automation',
                'id' => 'Pengemasan & Otomatisasi'
            ],
            'slug' => 'packaging-automation',
            'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
            'short_description' => [
                'en' => 'High-speed automated packaging lines for bagging, palletizing, and wrapping operations.',
                'id' => 'Jalur pengemasan otomatis berkecepatan tinggi untuk operasi pengantongan, paletisasi, dan pembungkus.'
            ],
            'description' => [
                'en' => 'From semi-automatic bagging machines to fully integrated robotic palletizing and stretch wrapping lines, we deliver packaging automation solutions.',
                'id' => 'Mulai dari mesin pengantongan semi-otomatis hingga jalur paletisasi robotik dan stretch wrapping yang terintegrasi penuh.'
            ],
            'features' => [
                'en' => [
                    'CARTON ERECTOR',
                    'CHECK WEIGHER',
                    'METAL DETECTOR',
                    'WRAPING & STRAPPING'
                ],
                'id' => [
                    'CARTON ERECTOR',
                    'CHECK WEIGHER',
                    'DETEKTOR LOGAM',
                    'WRAPING & STRAPPING'
                ]
            ],
            'image' => 'images/products/packaging-automation.png',
            'gallery' => [
                'images/products/packaging-automation.png',
            ],
            'meta_title' => [
                'en' => 'Packaging Automation Solutions | Kajie Group',
                'id' => 'Solusi Otomatisasi Pengemasan | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Automated packaging lines — bagging, palletizing, and wrapping systems.',
                'id' => 'Jalur pengemasan otomatis — sistem pengantongan, paletisasi, dan pembungkus.'
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'title' => [
                'en' => 'COAL HANDLING PLANT',
                'id' => 'PABRIK PENANGANAN BATUBARA'
            ],
            'description' => [
                'en' => 'CRUSHING, METAL DETECTING, SCREENING, CONVEYING, ENVIRONMENT PROTECTION (DUST PROTECTION)',
                'id' => 'PENGHANCURAN, PENDETEKSIAN LOGAM, PENYARINGAN, KONVEYOR, PERLINDUNGAN LINGKUNGAN (PERLINDUNGAN DEBU)'
            ],
            'image' => 'images/products/coal-handling-plant.png'
        ],
        [
            'title' => [
                'en' => 'STONE CRUSHING PLANT',
                'id' => 'PABRIK PEMECAH BATU'
            ],
            'description' => [
                'en' => 'FEEDING, CRUSHING, METAL DETECTING, SCREENING, CONVEYING, FINAL PRODUCT CUBICAL SHAPE',
                'id' => 'PENGUMPANAN, PENGHANCURAN, PENDETEKSIAN LOGAM, PENYARINGAN, KONVEYOR, BENTUK KUBIK PRODUK AKHIR'
            ],
            'image' => 'images/products/stone-crushing-plant.png'
        ],
        [
            'title' => [
                'en' => 'CLAY HANDLING PLANT',
                'id' => 'PABRIK PENANGANAN TANAH LIAT'
            ],
            'description' => [
                'en' => 'MILLING, SCREENING WITH METAL DETECTING, WATER PRESS REMOVING',
                'id' => 'PENGGILINGAN, PENYARINGAN DENGAN PENDETEKSIAN LOGAM, PENGHILANGAN TEKANAN AIR'
            ],
            'image' => 'images/products/clay-handling-plant.png'
        ],
        [
            'title' => [
                'en' => 'FEEDMILL PLANT',
                'id' => 'PABRIK PAKAN TERNAK'
            ],
            'description' => [
                'en' => 'SILO, DRYING, CRUSHING, MIXING, PACKING',
                'id' => 'SILO, PENGERINGAN, PENGHANCURAN, PENCAMPURAN, PENGEMASAN'
            ],
            'image' => 'images/products/feedmill-plant.png'
        ],
        [
            'title' => [
                'en' => 'GRINDING MILL PLANT',
                'id' => 'PABRIK PENGGILINGAN MILL'
            ],
            'description' => [
                'en' => 'CRUSHING, GRINDING, PACKING JUMBO BAG',
                'id' => 'PENGHANCURAN, PENGGILINGAN, PENGEMASAN KANTONG JUMBO'
            ],
            'image' => 'images/products/grinding-mill-plant.png'
        ],
        [
            'title' => [
                'en' => 'COLD ROOM',
                'id' => 'RUANGAN PENDINGIN (COLD ROOM)'
            ],
            'description' => [
                'en' => 'CHILLER, COLD ROOM',
                'id' => 'CHILLER, RUANGAN PENDINGIN'
            ],
            'image' => 'images/products/cold-room.png'
        ],
        [
            'title' => [
                'en' => 'PACKAGING AUTOMATION',
                'id' => 'OTOMATISASI PENGEMASAN'
            ],
            'description' => [
                'en' => 'PACKAGING LINE AUTOMATION, ROBOTIC ARM PALLETIZING',
                'id' => 'OTOMATISASI JALUR PENGEMASAN, PALETISASI LENGAN ROBOTIK'
            ],
            'image' => 'images/products/packaging-automation.png'
        ],
    ],";

$pattern = "/'products' => \[.*?\], \n\n    \/\*\n    \|--------------------------------------------------------------------------\n    \| Clients \/ Projects/s";
$replacement = $newProducts . "\n\n    /*\n    |--------------------------------------------------------------------------\n    | Clients / Projects";

$newContent = preg_replace($pattern, $replacement, $content);

file_put_contents('config/catalog.php', $newContent);
echo "Replaced successfully!\n";
?>
