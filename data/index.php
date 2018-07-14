<?php
	require "json-file-decode.class.php";
	$catalogo = array(
		"catalogo" => array(
			array(
				"data" => "1",
				"class" => "hard",
				"nombre" => "portada",
				"numero" => "page-01",
				"image" => "CATALOGO GHIA 2018 ABRIL.jpg",
				"url" => "img/libro",
				"area" => "map-page-01"
			),
			array(
				"data" => "2",
				"class" => "inner",
				"nombre" => "second",
				"numero" => "page-02",
				"image" => "CATALOGO GHIA 2018 ABRIL2.jpg",
				"url" => "img/libro",
				"area" => "map-page-02"
			),
			array(
				"data" => "3",
				"class" => "productos",
				"nombre" => "page-03",
				"numero" => "page-03",
				"image" => "CATALOGO GHIA 2018 ABRIL3.jpg",
				"url" => "img/libro",
				"area" => "map-page-03",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-047",
						"clave" => "AC-5725",
						"vlc_id" => "13883",
						"coord" => "23, 325, 374, 578"
					),
					array(
						"cod_fabricante" => "GAC-052",
						"clave" => "AC-5730",
						"vlc_id" => "13883",
						"coord" => "23, 58, 374, 311"
					)
				)
			),
			array(
				"data" => "4",
				"class" => "productos",
				"nombre" => "page-04",
				"numero" => "page-04",
				"image" => "CATALOGO GHIA 2018 ABRIL4.jpg",
				"url" => "img/libro",
				"area" => "map-page-04",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-057",
						"clave" => "AC-5746",
						"vlc_id" => "13883",
						"coord" => "23, 77, 374, 330"
					),
					array(
						"cod_fabricante" => "GAC-105",
						"clave" => "RAM-2920",
						"vlc_id" => "15424",
						"coord" => "23, 391, 374, 578"
					)
				)
			),
			array(
				"data" => "5",
				"class" => "productos",
				"nombre" => "page-05",
				"numero" => "page-05",
				"image" => "CATALOGO GHIA 2018 ABRIL5.jpg",
				"url" => "img/libro",
				"area" => "map-page-05",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-005",
						"clave" => "RELOJ-1",
						"vlc_id" => "13882",
						"coord" => "15, 49, 381, 581"
					)
				)
			),
			array(
				"data" => "6",
				"class" => "productos",
				"nombre" => "page-06",
				"numero" => "page-06",
				"image" => "CATALOGO GHIA 2018 ABRIL6.jpg",
				"url" => "img/libro",
				"area" => "map-page-06",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-073",
						"clave" => "RELOJ-13",
						"vlc_id" => "13882",
						"coord" => "16, 60, 387, 579"
					)
				)
			),
			array(
				"data" => "7",
				"class" => "productos",
				"nombre" => "page-07",
				"numero" => "page-07",
				"image" => "CATALOGO GHIA 2018 ABRIL7.jpg",
				"url" => "img/libro",
				"area" => "map-page-07",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-072",
						"clave" => "RELOJ-12",
						"vlc_id" => "13882",
						"coord" => "20, 66, 383, 581"
					)
				)
			),
			array(
				"data" => "8",
				"class" => "productos",
				"nombre" => "page-08",
				"numero" => "page-08",
				"image" => "CATALOGO GHIA 2018 ABRIL8.jpg",
				"url" => "img/libro",
				"area" => "map-page-08",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-037",
						"clave" => "RELOJ-8",
						"vlc_id" => "13882",
						"coord" => "16, 59, 380, 585"
					)
				)
			),
			array(
				"data" => "9",
				"class" => "productos",
				"nombre" => "page-09",
				"numero" => "page-09",
				"image" => "CATALOGO GHIA 2018 ABRIL9.jpg",
				"url" => "img/libro",
				"area" => "map-page-09",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-006",
						"clave" => "RELOJ-3",
						"vlc_id" => "13882",
						"coord" => "15, 55, 387, 469"
					)
				)
			),
			array(
				"data" => "10",
				"class" => "productos",
				"nombre" => "page-10",
				"numero" => "page-10",
				"image" => "CATALOGO GHIA 2018 ABRIL10.jpg",
				"url" => "img/libro",
				"area" => "map-page-10",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-008",
						"clave" => "RELOJ-6",
						"vlc_id" => "13882",
						"coord" => "14, 58, 383, 476"
					)
				)
			),
			array(
				"data" => "11",
				"class" => "productos",
				"nombre" => "page-11",
				"numero" => "page-11",
				"image" => "CATALOGO GHIA 2018 ABRIL11.jpg",
				"url" => "img/libro",
				"area" => "map-page-11",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "GAC-007",
						"clave" => "RELOJ-4",
						"vlc_id" => "13882",
						"coord" => "15, 57, 379, 478"
					)
				)
			),
			array(
				"data" => "12",
				"class" => "productos",
				"nombre" => "page-12",
				"numero" => "page-12",
				"image" => "CATALOGO GHIA 2018 ABRIL12.jpg",
				"url" => "img/libro",
				"area" => "map-page-12",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "GM-001",
						"clave" => "AC-6157",
						"vlc_id" => "15922",
						"coord" => "127,44,379,196"
					),
					array(
						"cod_fabricante" => "GM-009",
						"clave" => "AC-6165",
						"vlc_id" => "15922",
						"coord" => "20,197,206,377"
					),
					array(
						"cod_fabricante" => "GM-006",
						"clave" => "AC-6160",
						"vlc_id" => "15922",
						"coord" => "207,197,379,377"
					),
					array(
						"cod_fabricante" => "GM-007",
						"clave" => "AC-6163",
						"vlc_id" => "15922",
						"coord" => "17,387,216,577"
					),
					array(
						"cod_fabricante" => "GM-005",
						"clave" => "AC-6162",
						"vlc_id" => "15922",
						"coord" => "232,378,379,591"
					)
				)
			),
			array(
				"data" => "13",
				"class" => "productos",
				"nombre" => "page-13",
				"numero" => "page-13",
				"image" => "CATALOGO GHIA 2018 ABRIL13.jpg",
				"url" => "img/libro",
				"area" => "map-page-13",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "21, 54, 387, 581"
					)
				)
			),
			array(
				"data" => "14",
				"class" => "productos",
				"nombre" => "page-14",
				"numero" => "page-14",
				"image" => "CATALOGO GHIA 2018 ABRIL14.jpg",
				"url" => "img/libro",
				"area" => "map-page-14",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "17, 55, 375, 586"
					)
				)
			),
			array(
				"data" => "15",
				"class" => "productos",
				"nombre" => "page-15",
				"numero" => "page-15",
				"image" => "CATALOGO GHIA 2018 ABRIL15.jpg",
				"url" => "img/libro",
				"area" => "map-page-15",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "26, 402, 371, 592"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "19, 210, 375, 403"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "22, 71, 376, 208"
					)
				)
			),
			array(
				"data" => "16",
				"class" => "productos",
				"nombre" => "page-16",
				"numero" => "page-16",
				"image" => "CATALOGO GHIA 2018 ABRIL16.jpg",
				"url" => "img/libro",
				"area" => "map-page-16",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "23, 321, 370, 589"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "23, 67, 368, 318"
					)
				)
			),
			array(
				"data" => "17",
				"class" => "productos",
				"nombre" => "page-17",
				"numero" => "page-17",
				"image" => "CATALOGO GHIA 2018 ABRIL17.jpg",
				"url" => "img/libro",
				"area" => "map-page-17",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "24, 422, 370, 587"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "19, 226, 367, 422"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "19, 60, 367, 221"
					)
				)
			),
			array(
				"data" => "18",
				"class" => "productos",
				"nombre" => "page-18",
				"numero" => "page-18",
				"image" => "CATALOGO GHIA 2018 ABRIL18.jpg",
				"url" => "img/libro",
				"area" => "map-page-18",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "20, 434, 376, 592"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "21, 225, 376, 430"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "23, 68, 375, 221"
					)
				)
			),
			array(
				"data" => "19",
				"class" => "productos",
				"nombre" => "page-19",
				"numero" => "page-19",
				"image" => "CATALOGO GHIA 2018 ABRIL19.jpg",
				"url" => "img/libro",
				"area" => "map-page-19",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "14, 319, 377, 583"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "13, 61, 377, 315"
					)
				)
			),
			array(
				"data" => "20",
				"class" => "productos",
				"nombre" => "page-20",
				"numero" => "page-20",
				"image" => "CATALOGO GHIA 2018 ABRIL20.jpg",
				"url" => "img/libro",
				"area" => "map-page-20",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "261, 200, 392, 493"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "130, 220, 251, 492"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "19, 278, 122, 485"
					)
				)
			),
			array(
				"data" => "21",
				"class" => "productos",
				"nombre" => "page-21",
				"numero" => "page-21",
				"image" => "CATALOGO GHIA 2018 ABRIL21.jpg",
				"url" => "img/libro",
				"area" => "map-page-21",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "17, 66, 386, 585"
					)
				)
			),
			array(
				"data" => "22",
				"class" => "productos",
				"nombre" => "page-22",
				"numero" => "page-22",
				"image" => "CATALOGO GHIA 2018 ABRIL22.jpg",
				"url" => "img/libro",
				"area" => "map-page-22",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "15, 57, 381, 579"
					)
				)
			),
			array(
				"data" => "23",
				"class" => "productos",
				"nombre" => "page-23",
				"numero" => "page-23",
				"image" => "CATALOGO GHIA 2018 ABRIL23.jpg",
				"url" => "img/libro",
				"area" => "map-page-23",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "14, 61, 385, 575"
					)
				)
			),
			array(
				"data" => "24",
				"class" => "productos",
				"nombre" => "page-24",
				"numero" => "page-24",
				"image" => "CATALOGO GHIA 2018 ABRIL24.jpg",
				"url" => "img/libro",
				"area" => "map-page-24",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "20, 59, 386, 588"
					)
				)
			),
			array(
				"data" => "25",
				"class" => "productos",
				"nombre" => "page-25",
				"numero" => "page-25",
				"image" => "CATALOGO GHIA 2018 ABRIL25.jpg",
				"url" => "img/libro",
				"area" => "map-page-25",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "12, 60, 381, 582"
					)
				)
			),
			array(
				"data" => "26",
				"class" => "productos",
				"nombre" => "page-26",
				"numero" => "page-26",
				"image" => "CATALOGO GHIA 2018 ABRIL26.jpg",
				"url" => "img/libro",
				"area" => "map-page-26",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "21, 66, 382, 576"
					)
				)
			),
			array(
				"data" => "27",
				"class" => "productos",
				"nombre" => "page-27",
				"numero" => "page-27",
				"image" => "CATALOGO GHIA 2018 ABRIL27.jpg",
				"url" => "img/libro",
				"area" => "map-page-27",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "17, 56, 376, 583"
					)
				)
			),
			array(
				"data" => "28",
				"class" => "productos",
				"nombre" => "page-28",
				"numero" => "page-28",
				"image" => "CATALOGO GHIA 2018 ABRIL28.jpg",
				"url" => "img/libro",
				"area" => "map-page-28",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "20, 68, 375, 580"
					)
				)
			),
			array(
				"data" => "29",
				"class" => "productos",
				"nombre" => "page-29",
				"numero" => "page-29",
				"image" => "CATALOGO GHIA 2018 ABRIL29.jpg",
				"url" => "img/libro",
				"area" => "map-page-29",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "19, 57, 376, 579"
					)
				)
			),
			array(
				"data" => "30",
				"class" => "productos",
				"nombre" => "page-30",
				"numero" => "page-30",
				"image" => "CATALOGO GHIA 2018 ABRIL30.jpg",
				"url" => "img/libro",
				"area" => "map-page-30",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "129, 96, 260, 363"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "11, 97, 126, 363"
					)
				)
			),
			array(
				"data" => "31",
				"class" => "productos",
				"nombre" => "page-31",
				"numero" => "page-31",
				"image" => "CATALOGO GHIA 2018 ABRIL31.jpg",
				"url" => "img/libro",
				"area" => "map-page-31",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "10, 47, 385, 582"
					)
				)
			),
			array(
				"data" => "32",
				"class" => "productos",
				"nombre" => "page-32",
				"numero" => "page-32",
				"image" => "CATALOGO GHIA 2018 ABRIL32.jpg",
				"url" => "img/libro",
				"area" => "map-page-32",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "10, 205, 108, 264"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "10, 143, 108, 205"
					)
				)
			),
			array(
				"data" => "33",
				"class" => "productos",
				"nombre" => "page-33",
				"numero" => "page-33",
				"image" => "CATALOGO GHIA 2018 ABRIL33.jpg",
				"url" => "img/libro",
				"area" => "map-page-33",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 564, 371, 572"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 556, 372, 564"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 548, 372, 556"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 541, 372, 548"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 534, 372, 541"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 527, 372, 534"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 520, 372, 527"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 512, 371, 520"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 503, 371, 512"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 477, 372, 485"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 470, 372, 477"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 463, 372, 470"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 455, 372, 463"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 448, 372, 455"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 439, 372, 448"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 431, 372, 439"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 424, 372, 431"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 417, 372, 424"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "205, 410, 372, 417"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 384, 372, 392"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 376, 372, 384"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 369, 372, 376"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 361, 372, 369"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 354, 372, 361"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 347, 372, 354"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 339, 372, 347"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 332, 372, 339"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "206, 324, 372, 331"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "212, 214, 376, 303"
					)
				)
			),
			array(
				"data" => "34",
				"class" => "productos",
				"nombre" => "page-34",
				"numero" => "page-34",
				"image" => "CATALOGO GHIA 2018 ABRIL34.jpg",
				"url" => "img/libro",
				"area" => "map-page-34",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "15, 63, 381, 584"
					)
				)
			),
			array(
				"data" => "35",
				"class" => "productos",
				"nombre" => "page-35",
				"numero" => "page-35",
				"image" => "CATALOGO GHIA 2018 ABRIL35.jpg",
				"url" => "img/libro",
				"area" => "map-page-35",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "62, 514, 318, 538"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "62, 538, 318, 563"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "85, 303, 307, 363"
					)
				)
			),
			array(
				"data" => "36",
				"class" => "productos",
				"nombre" => "page-36",
				"numero" => "page-36",
				"image" => "CATALOGO GHIA 2018 ABRIL36.jpg",
				"url" => "img/libro",
				"area" => "map-page-36",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 568, 312, 585"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 550, 312, 568"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 531, 312, 550"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 512, 312, 531"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 494, 312, 512"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "39, 477, 312, 494"
					)
				)
			),
			array(
				"data" => "37",
				"class" => "productos",
				"nombre" => "page-37",
				"numero" => "page-37",
				"image" => "CATALOGO GHIA 2018 ABRIL37.jpg",
				"url" => "img/libro",
				"area" => "map-page-37",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "23, 62, 381, 384"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "27, 392, 369, 584"
					)
				)
			),
			array(
				"data" => "38",
				"class" => "productos",
				"nombre" => "page-38",
				"numero" => "page-38",
				"image" => "CATALOGO GHIA 2018 ABRIL38.jpg",
				"url" => "img/libro",
				"area" => "map-page-38",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "219, 358, 271, 383"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "168, 358, 216, 383"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "118, 358, 165, 383"
					)
				)
			),
			array(
				"data" => "39",
				"class" => "productos",
				"nombre" => "page-39",
				"numero" => "page-39",
				"image" => "CATALOGO GHIA 2018 ABRIL39.jpg",
				"url" => "img/libro",
				"area" => "map-page-39",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "150, 355, 196, 380"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "198, 355, 248, 380"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "251, 355, 305, 380"
					)
				)
			),
			array(
				"data" => "40",
				"class" => "productos",
				"nombre" => "page-40",
				"numero" => "page-40",
				"image" => "CATALOGO GHIA 2018 ABRIL40.jpg",
				"url" => "img/libro",
				"area" => "map-page-40",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "12, 63, 385, 59"
					)
				)
			),
			array(
				"data" => "41",
				"class" => "productos",
				"nombre" => "page-41",
				"numero" => "page-41",
				"image" => "CATALOGO GHIA 2018 ABRIL41.jpg",
				"url" => "img/libro",
				"area" => "map-page-41",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "10, 70, 385, 578"
					)
				)
			),
			array(
				"data" => "42",
				"class" => "productos",
				"nombre" => "page-42",
				"numero" => "page-42",
				"image" => "CATALOGO GHIA 2018 ABRIL42.jpg",
				"url" => "img/libro",
				"area" => "map-page-42",
				"posicion" => "left",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "114, 470, 245, 591"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "246, 469, 371, 591"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "288, 365, 371, 469"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "199, 365, 288, 467"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "112, 366, 199, 467"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "10, 410, 110, 551"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "235, 210, 366, 364"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "113, 219, 235, 364"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "22, 253, 101, 407"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "102, 112, 316, 210"
					),
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "22, 108, 101, 252"
					)
				)
			),
			array(
				"data" => "43",
				"class" => "productos",
				"nombre" => "page-43",
				"numero" => "page-43",
				"image" => "CATALOGO GHIA 2018 ABRIL43.jpg",
				"url" => "img/libro",
				"area" => "map-page-43",
				"posicion" => "right",
				"coords" => array(
					array(
						"cod_fabricante" => "",
						"clave" => "",
						"vlc_id" => "",
						"coord" => "6, 64, 388, 590"
					)
				)
			),
			array(
				"data" => "44",
				"class" => "end",
				"nombre" => "productos",
				"numero" => "page-44",
				"image" => "CATALOGO GHIA 2018 ABRIL44.jpg",
				"url" => "img/libro",
				"area" => "map-page-44"
			)
		)
	);
	$url = $catalogo;
	//$data = file_get_contents($url);
	$characters = json_encode($url);
	?>
	<div class="pre-box" style='display: block; overflow-y: hidden; width: 60%; height: auto; padding: 20px; margin: 0 auto; border: 1px solid rgba(0,0,0,0.5);'>
		<?php
		print_r("<pre>". $characters. "</pre>");
		?>
	</div>
	<iframe src="../jsonviewer.stack.hu/index.htm" width="100%" height="300"></iframe>
	<?php

	$handler = fopen("catalogo.json", "w+");
	fwrite($handler, $characters);
	fclose($handler);

	$read = new json_file_decode();
	$json = $read->json("catalogo.json");

	$dec_catalogo = $json["catalogo"];

	//print_r($dec_catalogo);

	//print_r($dec_catalogo[0]);

	/*
	foreach ($json as $key => $val) {
	    if ($key == "catalogo") {
	    	print_r("<pre>". $json[0] . "</pre>");
		  	foreach ($json[$key][0] as $i => $v) {
			  	print_r("<pre>". $json[$key][$i][$v] . "</pre>");
			  	print_r("<pre>". $i . "=>" . $v . "</pre>");
		  	}
	 	}
	}
	*/
	?>
	<div class="box" style="display: block; overflow: hidden; overflow-y: scroll; width: 100%; height: 520px;">
		<table>
			<thead>
				<tr>
					<th>header</th>
				</tr>
			</thead>
			<tbody>
	<?php
	for ( $x = 0; $x < count($json["catalogo"]); $x++) {
		$raiz = $json["catalogo"];
		$cat_page_id = $raiz[$x]["data"];
		$cat_page_class = $raiz[$x]["class"];
		$cat_page_nombre = $raiz[$x]["nombre"];
		$cat_page_numero = $raiz[$x]["numero"];
		$cat_page_image = $raiz[$x]["image"];
		$cat_page_url = $raiz[$x]["url"];
		$cat_page_posicion = $raiz[$x]["posicion"];
		$cat_page_area = $raiz[$x]["area"];
		?>
				<tr>
					<td>
						<?php
						echo $cat_page_id;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_class;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_nombre;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_numero;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_image;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_url;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_posicion;
						?>
					</td>
					<td>
						<?php
						echo $cat_page_area;
						?>
					</td>
		<?php
		for ($x1 = 0; $x1 < count($raiz[$x]['coords']);  $x1++) {
			$cat_page_area_id = $raiz[$x]['coords'][$x1]['coord'];
			?>
			<td>
				<?php
				echo $cat_page_area_id;
				?>
			</td>
			<?php
		}
		?>
		</tr>
		<?php
	}
	?>
			</tbody>
		</table>
	</div>
	<?php
	
	/*
	$catalogo = $dec_catalogo;
	foreach ($catalogo as $x => $value) {
		echo "Valor 1: ";
		echo $x .'=>'. $value;
		echo "<br>";
		foreach ($catalogo[$x]['area'] as $x2 => $value2) {
			echo "valor 2";
			echo $x2 .'=>'. $value2;
			echo "<br>";
			foreach ($catalogo[$x]['area'][$x2]['coords'] as $x3 => $value3) {
				echo "valor 3";
				echo $x3 .'=>'. $value3;
				echo "<br>";
			}
		}
	}
	*/
?>
