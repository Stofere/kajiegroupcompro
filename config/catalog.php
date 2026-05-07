<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    */
    'company' => [
        'name' => 'Kajie Group',
        'legal_name' => 'PT. Karya Jasa Indonesia Jaya',
        'tagline' => [
            'en' => 'Genuine Supplier & Contractor',
            'id' => 'Pemasok & Kontraktor Terpercaya'
        ],
        'description' => [
            'en' => 'Distributor, General Supplier, and General Contractor for Mechanical & Electrical Equipment specializing in Material Handling, Grain Handling, Packaging, and Automation.',
            'id' => 'Distributor, Pemasok Umum, dan Kontraktor Umum untuk Peralatan Mekanikal & Elektrikal yang berspesialisasi dalam Penanganan Material, Penanganan Biji-bijian, Pengemasan, dan Otomatisasi.'
        ],
        'phone' => '+62 813 3685 3355',
        'whatsapp' => '+6281336853355',
        'email' => [ 'en' => [ 'kajie.group@gmail.com', 'email@kajiegroup.co.id' ] , 'id' => [ 'kajie.group@gmail.com', 'email@kajiegroup.co.id' ] ],
        'address' => 'JMWG+C83, Cluster Cattleya CD2 Jl. Griya Taman Asri, Tawangsari Timur, Tawangsari, Taman, Sidoarjo Regency, East Java 61257',
        'maps_link' => 'https://maps.app.goo.gl/W2b5jKrybjwvEx7U9',
        'founded_year' => 2015,
    ],

    /*
    |--------------------------------------------------------------------------
    | Product Categories & Products
    |--------------------------------------------------------------------------
    */
    'products' => [
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
                'en' => 'Our Bulk Material Handling solutions cover the entire spectrum — from belt conveyors and bucket elevators to transfer chutes and dust collection systems. We design, supply, and install turnkey systems engineered for maximum throughput, minimal downtime, and the highest safety standards in demanding industrial environments.',
                'id' => 'Solusi Penanganan Material Curah kami mencakup seluruh spektrum — mulai dari belt conveyor dan bucket elevator hingga transfer chute dan sistem pengumpulan debu. Kami merancang, memasok, dan memasang sistem terintegrasi yang direkayasa untuk throughput maksimum, waktu henti minimal, dan standar keselamatan tertinggi di lingkungan industri yang menuntut.'
            ],
            'features' => [
                'en' => [
                    'Belt Conveyor Systems (Flat & Troughed)',
                    'Bucket Elevators & Chain Conveyors',
                    'Transfer Chutes & Loading Spouts',
                    'Dust Collection & Suppression Systems',
                    'Weighing & Batching Systems',
                    'PLC-Based Automation & Control Panels',
                ],
                'id' => [
                    'Sistem Belt Conveyor (Datar & Melengkung)',
                    'Bucket Elevator & Chain Conveyor',
                    'Saluran Transfer & Spout Pemuatan',
                    'Sistem Pengumpulan & Penekan Debu',
                    'Sistem Penimbangan & Batching',
                    'Otomatisasi Berbasis PLC & Panel Kontrol',
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
                'en' => 'Comprehensive bulk material handling solutions — belt conveyors, bucket elevators, transfer chutes, and dust collection systems by Kajie Group.',
                'id' => 'Solusi komprehensif penanganan material curah — belt conveyor, bucket elevator, saluran transfer, dan sistem pengumpulan debu oleh Kajie Group.'
            ]
        ],

        'grain-handling-silo' => [
            'name' => [
                'en' => 'Grain Handling, Silo, Drier & Mixer',
                'id' => 'Penanganan Biji-bijian, Silo, Pengering & Pencampur'
            ],
            'slug' => 'grain-handling-silo',
            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
            'short_description' => [
                'en' => 'Grain storage silos, dryers, and mixing solutions for the agricultural and food processing industry.',
                'id' => 'Silo penyimpanan biji-bijian, pengering, dan solusi pencampuran untuk industri pertanian dan pengolahan makanan.'
            ],
            'description' => [
                'en' => 'We provide integrated grain handling systems — from intake pits and cleaning screens to high-capacity flat-bottom and hopper silos, continuous-flow dryers, and precision mixers. Every system is designed for optimal grain quality preservation, energy efficiency, and ease of operation.',
                'id' => 'Kami menyediakan sistem penanganan biji-bijian yang terintegrasi — mulai dari lubang asupan dan layar pembersih hingga silo dasar datar dan hopper berkapasitas tinggi, pengering aliran kontinu, dan pencampur presisi. Setiap sistem dirancang untuk pelestarian kualitas biji-bijian yang optimal, efisiensi energi, dan kemudahan operasi.'
            ],
            'features' => [
                'en' => [
                    'Flat-Bottom & Hopper Silos (500–10,000 ton capacity)',
                    'Continuous-Flow & Batch Grain Dryers',
                    'Grain Cleaning & Screening Equipment',
                    'Precision Paddle & Ribbon Mixers',
                    'Intake Pits & Drag Chain Conveyors',
                    'Temperature & Moisture Monitoring Systems',
                ],
                'id' => [
                    'Silo Dasar Datar & Hopper (kapasitas 500–10.000 ton)',
                    'Pengering Biji-bijian Aliran Kontinu & Batch',
                    'Peralatan Pembersih & Penyaringan Biji-bijian',
                    'Pencampur Dayung & Pita Presisi',
                    'Lubang Asupan & Konveyor Rantai Tarik',
                    'Sistem Pemantauan Suhu & Kelembaban',
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
                'en' => 'Grain storage silos, dryers, and mixing systems for agricultural and food processing. Trusted supplier — Kajie Group.',
                'id' => 'Silo penyimpanan biji-bijian, pengering, dan sistem pencampuran untuk pertanian dan pengolahan makanan. Pemasok terpercaya — Kajie Group.'
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
                'en' => 'From semi-automatic bagging machines to fully integrated robotic palletizing and stretch wrapping lines, we deliver packaging automation solutions that maximize throughput, minimize labor costs, and ensure consistent product quality. Our systems handle bags from 5 kg to 50 kg across various industries.',
                'id' => 'Mulai dari mesin pengantongan semi-otomatis hingga jalur paletisasi robotik dan stretch wrapping yang terintegrasi penuh, kami memberikan solusi otomatisasi pengemasan yang memaksimalkan throughput, meminimalkan biaya tenaga kerja, dan memastikan kualitas produk yang konsisten. Sistem kami menangani kantong dari 5 kg hingga 50 kg di berbagai industri.'
            ],
            'features' => [
                'en' => [
                    'Automatic Bagging Machines (5–50 kg)',
                    'Robotic & Conventional Palletizers',
                    'Stretch Wrapping & Shrink Wrapping Machines',
                    'Checkweighers & Metal Detectors',
                    'Bag Closing & Sealing Systems',
                    'Conveyor Integration & Line Automation',
                ],
                'id' => [
                    'Mesin Pengantongan Otomatis (5–50 kg)',
                    'Palletizer Robotik & Konvensional',
                    'Mesin Stretch Wrapping & Shrink Wrapping',
                    'Checkweigher & Detektor Logam',
                    'Sistem Penutup & Penyegelan Kantong',
                    'Integrasi Konveyor & Otomatisasi Jalur',
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
                'en' => 'Automated packaging lines — bagging, palletizing, and wrapping systems. High-speed, reliable solutions by Kajie Group.',
                'id' => 'Jalur pengemasan otomatis — sistem pengantongan, paletisasi, dan pembungkus. Solusi berkecepatan tinggi dan andal oleh Kajie Group.'
            ]
        ],

        'coal-handling-plant' => [
            'name' => [
                'en' => 'Coal Handling Plant',
                'id' => 'Pabrik Penanganan Batubara'
            ],
            'slug' => 'coal-handling-plant',
            'icon' => 'M17.657 18.657A8 8 0 016.343 7.343S13 2 13 2s-1 3.5-5 6.5c-3 2.5-4 5.5-4 5.5a8 8 0 0013.657 4.657z',
            'short_description' => [
                'en' => 'Turnkey coal handling plant construction — from unloading to storage and reclaiming.',
                'id' => 'Konstruksi pabrik penanganan batubara terintegrasi — dari pembongkaran hingga penyimpanan dan reklamasi.'
            ],
            'description' => [
                'en' => 'We design and build complete Coal Handling Plants (CHP) for power generation, cement, and industrial boiler applications. Our systems include wagon tipplers, crushers, conveyors, stacking and reclaiming equipment, dust suppression, and fully automated PLC controls — all engineered for 24/7 reliability.',
                'id' => 'Kami merancang dan membangun Pabrik Penanganan Batubara (CHP) lengkap untuk aplikasi pembangkit listrik, semen, dan boiler industri. Sistem kami mencakup tippler gerbong, penghancur, konveyor, peralatan penumpukan dan reklamasi, penekan debu, dan kontrol PLC otomatis — semuanya dirancang untuk keandalan 24/7.'
            ],
            'features' => [
                'en' => [
                    'Wagon Tipplers & Truck Unloading Systems',
                    'Primary & Secondary Crushers',
                    'High-Capacity Belt Conveyor Networks',
                    'Radial Stackers & Reclaimers',
                    'Advanced Dust Suppression Systems',
                    'Automated PLC/SCADA Control Systems',
                ],
                'id' => [
                    'Tippler Gerbong & Sistem Pembongkaran Truk',
                    'Penghancur Primer & Sekunder',
                    'Jaringan Belt Conveyor Kapasitas Tinggi',
                    'Stacker Radial & Reclaimer',
                    'Sistem Penekan Debu Tingkat Lanjut',
                    'Sistem Kontrol PLC/SCADA Otomatis',
                ]
            ],
            'image' => 'images/products/coal-handling-plant.png',
            'gallery' => [
                'images/products/coal-handling-plant.png',
            ],
            'meta_title' => [
                'en' => 'Coal Handling Plant Contractor & Supplier | Kajie Group',
                'id' => 'Kontraktor & Pemasok Pabrik Penanganan Batubara | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Turnkey coal handling plant construction — crushers, conveyors, stackers, and automation. Expert contractor — Kajie Group.',
                'id' => 'Konstruksi pabrik penanganan batubara — penghancur, konveyor, stacker, dan otomatisasi. Kontraktor ahli — Kajie Group.'
            ]
        ],

        'stone-crushing-plant' => [
            'name' => [
                'en' => 'Stone Crushing Plant',
                'id' => 'Pabrik Pemecah Batu'
            ],
            'slug' => 'stone-crushing-plant',
            'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
            'short_description' => [
                'en' => 'Complete stone crushing and screening solutions for mining and construction aggregate production.',
                'id' => 'Solusi penghancuran dan penyaringan batu lengkap untuk pertambangan dan produksi agregat konstruksi.'
            ],
            'description' => [
                'en' => 'Our Stone Crushing Plants are built for high-volume aggregate production. From primary jaw crushers to secondary cone crushers and vibrating screens, we deliver complete turnkey crushing solutions with capacities from 50 TPH to 500+ TPH for quarries, mining operations, and infrastructure projects.',
                'id' => 'Pabrik Pemecah Batu kami dibangun untuk produksi agregat volume tinggi. Dari jaw crusher primer hingga cone crusher sekunder dan vibrating screen, kami memberikan solusi penghancuran terintegrasi dengan kapasitas 50 TPH hingga 500+ TPH untuk operasi tambang dan proyek infrastruktur.'
            ],
            'features' => [
                'en' => [
                    'Primary Jaw Crushers (PE Series)',
                    'Secondary Cone & Impact Crushers',
                    'Vibrating Screens & Feeders',
                    'Sand Washing & Classification Systems',
                    'Complete 50–500+ TPH Crushing Lines',
                    'Mobile & Stationary Plant Configurations',
                ],
                'id' => [
                    'Jaw Crusher Primer (Seri PE)',
                    'Cone & Impact Crusher Sekunder',
                    'Vibrating Screen & Feeder',
                    'Sistem Pencucian & Klasifikasi Pasir',
                    'Jalur Penghancuran Lengkap 50–500+ TPH',
                    'Konfigurasi Pabrik Seluler & Stasioner',
                ]
            ],
            'image' => 'images/products/stone-crushing-plant.png',
            'gallery' => [
                'images/products/stone-crushing-plant.png',
            ],
            'meta_title' => [
                'en' => 'Stone Crushing Plant Systems | Kajie Group',
                'id' => 'Sistem Pabrik Pemecah Batu | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Complete stone crushing and screening plants — jaw crushers, cone crushers, and vibrating screens. Kajie Group.',
                'id' => 'Pabrik penghancur dan penyaringan batu lengkap — jaw crusher, cone crusher, dan vibrating screen. Kajie Group.'
            ]
        ],

        'radial-stacker-conveyor' => [
            'name' => [
                'en' => 'Radial Stacker Conveyor',
                'id' => 'Konveyor Stacker Radial'
            ],
            'slug' => 'radial-stacker-conveyor',
            'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
            'short_description' => [
                'en' => 'Radial stacking conveyors for efficient stockpile management and material distribution.',
                'id' => 'Konveyor penumpukan radial untuk manajemen stockpile dan distribusi material yang efisien.'
            ],
            'description' => [
                'en' => 'Our Radial Stacker Conveyors provide flexible and efficient stockpile management for coal, grain, aggregate, and other bulk materials. With slewing ranges up to 270° and luffing capabilities, these machines maximize storage capacity while minimizing material degradation and segregation.',
                'id' => 'Konveyor Stacker Radial kami menyediakan manajemen stockpile yang fleksibel dan efisien untuk batubara, biji-bijian, agregat, dan material curah lainnya. Dengan rentang slewing hingga 270° dan kemampuan luffing, mesin ini memaksimalkan kapasitas penyimpanan sambil meminimalkan degradasi dan segregasi material.'
            ],
            'features' => [
                'en' => [
                    'Slewing Range up to 270°',
                    'Luffing (Height Adjustable) Boom',
                    'Capacities from 100 to 2,000 TPH',
                    'Lengths from 20m to 60m+',
                    'Automated Stockpile Management',
                    'Heavy-Duty Steel Construction',
                ],
                'id' => [
                    'Rentang Slewing hingga 270°',
                    'Boom Luffing (Ketinggian Dapat Disesuaikan)',
                    'Kapasitas dari 100 hingga 2.000 TPH',
                    'Panjang dari 20m hingga 60m+',
                    'Manajemen Stockpile Otomatis',
                    'Konstruksi Baja Tugas Berat',
                ]
            ],
            'image' => 'images/products/radial-stacker-conveyor.png',
            'gallery' => [
                'images/products/radial-stacker-conveyor.png',
            ],
            'meta_title' => [
                'en' => 'Radial Stacker Conveyor Systems | Kajie Group',
                'id' => 'Sistem Konveyor Stacker Radial | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Radial stacker conveyors for efficient stockpile management. Capacities up to 2,000 TPH. Kajie Group.',
                'id' => 'Konveyor stacker radial untuk manajemen stockpile yang efisien. Kapasitas hingga 2.000 TPH. Kajie Group.'
            ]
        ],

        // 'conveyor-accessories' => [
        //     'name' => [
        //         'en' => 'Conveyor Accessories',
        //         'id' => 'Aksesoris Konveyor'
        //     ],
        //     'slug' => 'conveyor-accessories',
        //     'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
        //     'short_description' => [
        //         'en' => 'Complete range of conveyor components — rollers, idlers, pulleys, belts, and spare parts.',
        //         'id' => 'Komponen konveyor lengkap — roller, idler, katrol, sabuk, dan suku cadang.'
        //     ],
        //     'description' => [
        //         'en' => 'We supply a comprehensive range of conveyor accessories and spare parts to keep your material handling systems running at peak performance. From carrying and return idlers to drive pulleys, conveyor belts, belt scrapers, and impact beds — all sourced from trusted manufacturers with full technical support.',
        //         'id' => 'Kami menyediakan berbagai aksesoris dan suku cadang konveyor untuk menjaga sistem penanganan material Anda beroperasi pada kinerja puncak. Mulai dari carrying dan return idler hingga drive pulley, belt conveyor, pembersih sabuk, dan impact bed — semua dipasok dari produsen terpercaya dengan dukungan teknis penuh.'
        //     ],
        //     'features' => [
        //         'en' => [
        //             'Carrying, Return & Impact Idler Rollers',
        //             'Drive, Tail & Snub Pulleys',
        //             'Conveyor Belts (EP, ST, PVC, Chevron)',
        //             'Belt Scrapers & Cleaners',
        //             'Impact Beds & Cradles',
        //             'Belt Fasteners, Clamps & Lacing Tools',
        //         ],
        //         'id' => [
        //             'Roller Idler Carrying, Return & Impact',
        //             'Katrol Penggerak, Ekor & Snub',
        //             'Sabuk Konveyor (EP, ST, PVC, Chevron)',
        //             'Pembersih & Scraper Sabuk',
        //             'Impact Bed & Cradle',
        //             'Pengencang, Penjepit & Alat Penyambung Sabuk',
        //         ]
        //     ],
        //     'image' => 'images/products/conveyor-accessories.png',
        //     'gallery' => [
        //         'images/products/conveyor-accessories.png',
        //     ],
        //     'meta_title' => [
        //         'en' => 'Conveyor Accessories & Spare Parts | Kajie Group',
        //         'id' => 'Aksesoris & Suku Cadang Konveyor | Kajie Group'
        //     ],
        //     'meta_description' => [
        //         'en' => 'Conveyor accessories — rollers, idlers, pulleys, belts, and spare parts. Reliable supply from Kajie Group.',
        //         'id' => 'Aksesoris konveyor — roller, idler, katrol, sabuk, dan suku cadang. Pasokan andal dari Kajie Group.'
        //     ]
        // ],

        'clay-handling-plant' => [
            'name' => [
                'en' => 'Clay Handling Plant',
                'id' => 'Pabrik Penanganan Tanah Liat'
            ],
            'slug' => 'clay-handling-plant',
            'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
            'short_description' => [
                'en' => 'Integrated clay processing and handling systems for brick, tile, and ceramics manufacturing.',
                'id' => 'Sistem pemrosesan dan penanganan tanah liat terpadu untuk pembuatan batu bata, ubin, dan keramik.'
            ],
            'description' => [
                'en' => 'Our Clay Handling Plants serve the brick, tile, and ceramics industry with complete processing lines — from raw clay extraction and crushing to mixing, extrusion, drying, and kiln feeding. Each system is tailored to the specific clay properties and production volume requirements of our clients.',
                'id' => 'Pabrik Penanganan Tanah Liat kami melayani industri batu bata, ubin, dan keramik dengan lini pemrosesan lengkap — mulai dari ekstraksi dan penghancuran tanah liat mentah hingga pencampuran, ekstrusi, pengeringan, dan pengumpanan tanur. Setiap sistem disesuaikan dengan sifat tanah liat spesifik dan persyaratan volume produksi klien kami.'
            ],
            'features' => [
                'en' => [
                    'Box Feeders & Apron Feeders',
                    'Clay Crushers & Hammer Mills',
                    'Double-Shaft Mixers & Pan Mills',
                    'De-Airing Extruders',
                    'Drying Chamber & Tunnel Dryer Systems',
                    'Kiln Car Loading & Unloading Systems',
                ],
                'id' => [
                    'Box Feeder & Apron Feeder',
                    'Penghancur Tanah Liat & Hammer Mill',
                    'Pencampur Poros Ganda & Pan Mill',
                    'Ekstruder Penghilang Udara',
                    'Ruang Pengering & Sistem Pengering Terowongan',
                    'Sistem Bongkar Muat Kereta Tanur',
                ]
            ],
            'image' => 'images/products/clay-handling-plant.png',
            'gallery' => [
                'images/products/clay-handling-plant.png',
            ],
            'meta_title' => [
                'en' => 'Clay Handling Plant Systems | Kajie Group',
                'id' => 'Sistem Pabrik Penanganan Tanah Liat | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Complete clay handling and processing plants for brick and ceramics manufacturing. Kajie Group.',
                'id' => 'Pabrik penanganan dan pemrosesan tanah liat lengkap untuk pembuatan batu bata dan keramik. Kajie Group.'
            ]
        ],

        'feedmill-plant' => [
            'name' => [
                'en' => 'Feedmill Plant',
                'id' => 'Pabrik Pakan Ternak'
            ],
            'slug' => 'feedmill-plant',
            'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            'short_description' => [
                'en' => 'Complete feed mill plants for poultry, livestock, and aquaculture feed production.',
                'id' => 'Pabrik pakan ternak lengkap untuk produksi pakan unggas, ternak, dan akuakultur.'
            ],
            'description' => [
                'en' => 'We design and build complete Feed Mill Plants for the animal nutrition industry. Our turnkey solutions cover raw material intake, grinding, batching, mixing, pelleting, cooling, crumbling, and finished product packaging — all integrated with automated recipe management and production controls.',
                'id' => 'Kami merancang dan membangun Pabrik Pakan Ternak lengkap untuk industri nutrisi hewan. Solusi turnkey kami mencakup penerimaan bahan baku, penggilingan, batching, pencampuran, peletisasi, pendinginan, penghancuran, dan pengemasan produk akhir — semuanya terintegrasi dengan manajemen resep dan kontrol produksi otomatis.'
            ],
            'features' => [
                'en' => [
                    'Raw Material Intake & Storage Silos',
                    'Hammer Mills & Grinders',
                    'Automated Batching & Weighing Systems',
                    'Pellet Mills & Conditioners',
                    'Counter-Flow Coolers & Crumblers',
                    'Automated Recipe Management (PLC/SCADA)',
                ],
                'id' => [
                    'Silo Penerimaan & Penyimpanan Bahan Baku',
                    'Hammer Mill & Penggiling',
                    'Sistem Batching & Penimbangan Otomatis',
                    'Mesin Pelet & Kondisioner',
                    'Pendingin & Penghancur Aliran Balik',
                    'Manajemen Resep Otomatis (PLC/SCADA)',
                ]
            ],
            'image' => 'images/products/feedmill-plant.png',
            'gallery' => [
                'images/products/feedmill-plant.png',
            ],
            'meta_title' => [
                'en' => 'Feed Mill Plant Construction | Kajie Group',
                'id' => 'Konstruksi Pabrik Pakan Ternak | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Turnkey feed mill plant construction — grinding, pelleting, cooling, and packaging. Expert contractor — Kajie Group.',
                'id' => 'Konstruksi pabrik pakan ternak turnkey — penggilingan, peletisasi, pendinginan, dan pengemasan. Kontraktor ahli — Kajie Group.'
            ]
        ],

        'grinding-mill-plant' => [
            'name' => [
                'en' => 'Grinding Mill Plant',
                'id' => 'Pabrik Penggilingan Mill'
            ],
            'slug' => 'grinding-mill-plant',
            'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
            'short_description' => [
                'en' => 'Industrial grinding mills for mineral processing, cement, and chemical industries.',
                'id' => 'Pabrik penggilingan industri untuk pemrosesan mineral, semen, dan industri kimia.'
            ],
            'description' => [
                'en' => 'Our Grinding Mill Plants are engineered for fine and ultra-fine grinding of minerals, cement clinker, limestone, and chemical compounds. We supply ball mills, vertical roller mills, and Raymond mills with complete auxiliary systems including classifiers, dust collectors, and material handling.',
                'id' => 'Pabrik Penggilingan Mill kami dirancang untuk penggilingan halus dan sangat halus mineral, klinker semen, batu kapur, dan senyawa kimia. Kami menyediakan ball mill, vertical roller mill, dan Raymond mill dengan sistem pelengkap lengkap termasuk klasifikasi, pengumpul debu, dan penanganan material.'
            ],
            'features' => [
                'en' => [
                    'Ball Mills (Overflow & Grate Discharge)',
                    'Vertical Roller Mills (VRM)',
                    'Raymond Mills & Roller Mills',
                    'Air Classifiers & Cyclone Separators',
                    'Bag Filters & Dust Collection Systems',
                    'Complete Grinding Circuit Design',
                ],
                'id' => [
                    'Ball Mill (Debit Overflow & Grate)',
                    'Vertical Roller Mill (VRM)',
                    'Raymond Mill & Roller Mill',
                    'Pengklasifikasi Udara & Separator Siklon',
                    'Filter Kantong & Sistem Pengumpul Debu',
                    'Desain Sirkuit Penggilingan Lengkap',
                ]
            ],
            'image' => 'images/products/grinding-mill-plant.png',
            'gallery' => [
                'images/products/grinding-mill-plant.png',
            ],
            'meta_title' => [
                'en' => 'Grinding Mill Plant Systems | Kajie Group',
                'id' => 'Sistem Pabrik Penggilingan Mill | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Industrial grinding mill plants — ball mills, vertical roller mills, and Raymond mills. Kajie Group.',
                'id' => 'Pabrik penggilingan industri — ball mill, vertical roller mill, dan Raymond mill. Kajie Group.'
            ]
        ],

        'cold-room' => [
            'name' => [
                'en' => 'Cold Room',
                'id' => 'Ruangan Pendingin (Cold Room)'
            ],
            'slug' => 'cold-room',
            'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
            'short_description' => [
                'en' => 'Industrial cold rooms and cold storage facilities for food, pharmaceutical, and logistics industries.',
                'id' => 'Fasilitas cold room dan penyimpanan dingin industri untuk industri makanan, farmasi, dan logistik.'
            ],
            'description' => [
                'en' => 'We design, supply, and install industrial Cold Room and Cold Storage facilities for food processing, pharmaceutical, and logistics applications. Our systems use high-efficiency insulated panels, reliable refrigeration units, and advanced temperature monitoring to ensure product integrity and energy efficiency.',
                'id' => 'Kami merancang, memasok, dan memasang fasilitas Cold Room dan Penyimpanan Dingin industri untuk pemrosesan makanan, farmasi, dan aplikasi logistik. Sistem kami menggunakan panel insulasi efisiensi tinggi, unit pendingin andal, dan pemantauan suhu canggih untuk memastikan integritas produk dan efisiensi energi.'
            ],
            'features' => [
                'en' => [
                    'Modular Insulated Panel Construction (PU/PIR)',
                    'Temperature Range: -40°C to +15°C',
                    'Blast Freezers & Chiller Rooms',
                    'Industrial Refrigeration Units (Bitzer, Copeland)',
                    'Temperature Monitoring & Alarm Systems',
                    'Rapid Roll Doors & Air Curtains',
                ],
                'id' => [
                    'Konstruksi Panel Insulasi Modular (PU/PIR)',
                    'Rentang Suhu: -40°C hingga +15°C',
                    'Blast Freezer & Ruang Chiller',
                    'Unit Pendingin Industri (Bitzer, Copeland)',
                    'Sistem Pemantauan Suhu & Alarm',
                    'Pintu Gulung Cepat & Tirai Udara',
                ]
            ],
            'image' => 'images/products/cold-room.png',
            'gallery' => [
                'images/products/cold-room.png',
            ],
            'meta_title' => [
                'en' => 'Cold Room & Cold Storage Solutions | Kajie Group',
                'id' => 'Solusi Cold Room & Penyimpanan Dingin | Kajie Group'
            ],
            'meta_description' => [
                'en' => 'Industrial cold rooms and cold storage — blast freezers, chiller rooms, and refrigeration systems. Kajie Group.',
                'id' => 'Cold room dan penyimpanan dingin industri — blast freezer, ruang chiller, dan sistem pendingin. Kajie Group.'
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Clients / Projects
    |--------------------------------------------------------------------------
    */
    'clients' => [
        [
            'name' => 'PT. Kalimantan Prima Persada (KPP)',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Corin Mulia Gemilang (Maxxi Group)',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. MSI',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Gunung Bale',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Krakatau Perbengkelan & Perawatan',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Krakatau Posco',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Sinergi Gas Indoraya',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Jumai Trading Indonesia',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Songgo Buwana Luhur',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Fortuna Marina Sejahtera',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Bumi Kejayan',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Unggul Jaya Sejahtera',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Hervitama Engineering Indonesia',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'CV. Yumara',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Plastisindo Bestari Wisesa',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. BISI International Tbk.',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Eagan Warsana Energi',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Indonesia Smelting Technology (Inalum Group)',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Pancadharma Puspawira',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. AMJ Riau',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'CV. Melati',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'CV. Irsal Jaya Teknik',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'CV. Santana Jaya Utama',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'UPTD Keramik Malang',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Bahagia Jaya',
            'industry' => ['en' => '-', 'id' => '-'],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Sumber Bangun Sentosa',
            'industry' => [
                'en' => 'Civil & Mechanical Construction Contractor ',
                'id' => 'Kontraktor Konstruksi Sipil & Mekanikal'
            ],
            'project' => ['en' => '-', 'id' => '-']
        ],
        [
            'name' => 'PT. Galba Group',
            'industry' => [
                'en' => 'Construction & Industrial Systems Fabrication',
                'id' => 'Konstruksi dan Fabrikasi Sistem Industri'
            ],
            'project' => [
                'en' => 'Installation of Stone Crushing Plant Conveyor, 300 ton/hour',
                'id' => 'Instalasi Stone Crushing Plant Conveyor, 300 ton/jam'
            ]
        ],
        [
            'name' => 'PT. Basuki Pratama Engineering',
            'industry' => [
                'en' => 'Energy Engineering & Boiler Manufacturing',
                'id' => 'Rekayasa Energi & Manufaktur Boiler'
            ],
            'project' => [
                'en' => 'Supply and Installation of Boiler Solid Fuel Feeding & Ash Handling System',
                'id' => 'Suplai dan Instalasi Sistem Pemasukan Bahan Bakar Padat & Penanganan Abu Boiler']
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        [
            'title' => [
                'en' => 'Design & Concept Consultancy',
                'id' => 'Konsultasi Desain & Konsep'
            ],
            'description' => [
                'en' => "• Free consultancy\n• Free design\n• Better concept",
                'id' => "• Konsultasi gratis\n• Desain gratis\n• Konsep yang lebih baik"
            ],
            'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
        ],
        [
            'title' => [
                'en' => 'Installation & Commissioning',
                'id' => 'Instalasi & Komisioning'
            ],
            'description' => [
                'en' => "• Professional\n• Rich Experience\n• Transfer knowledge",
                'id' => "• Profesional\n• Kaya Pengalaman\n• Transfer pengetahuan"
            ],
            'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
        ],
        [
            'title' => [
                'en' => 'TURN KEY PROJECT SOLUTION',
                'id' => 'SOLUSI PROYEK TURN KEY'
            ],
            'description' => [
                'en' => "• Win win solution\n• More benefit to customer\n• Please contact for more details",
                'id' => "• Solusi saling menguntungkan\n• Lebih banyak manfaat bagi pelanggan\n• Silakan hubungi untuk detail lebih lanjut"
            ],
            'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
        ],
        [
            'title' => [
                'en' => 'After Sales Service',
                'id' => 'Layanan Purna Jual'
            ],
            'description' => [
                'en' => "• Maintenance schedule information\n• Guarantee of spare part availability\n• Standby maintenance team 1x24 hours",
                'id' => "• Informasi jadwal perawatan\n• Jaminan ketersediaan suku cadang\n• Tim perawatan siaga 1x24 jam"
            ],
            'icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z',
        ],
    ],
];
