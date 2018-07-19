<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>createJSON</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<nav class="uk-navbar uk-navbar-container uk-margin">
		    <div class="uk-navbar-left">
		    	<div class="uk-container uk-container-large">
			        <a class="uk-navbar-toggle" href="#">
			            <img src="img/source-code.png" width="30" height="30" class="" alt=""> <span class="uk-margin-small-left">createJSON</span>
			        </a>
		    	</div>
		    </div>
		</nav>
		<div id="object-array"style="margin: 50px auto; width: 1080px; display: block;">
			<div>
				<span id="edit">
					<span id="is-edit">objeto</span>
					<span id="is-change" style="displa: none;">
						<input class="is-jerarqui-object" id="jerarquia-object" type="text" placeholder="objeto">
						<a id="jerarquia-object-add-row-1"><span>+</span></a>
						<a id="jerarquia-object-cancel-row-1"><span>x</span> </a>
					</span>	
				</span>			
			</div>
		</div>
		

		<input class="uk-input" type="text" placeholder="llave">
		<input class="uk-input" type="text" placeholder="valor">
		<button class="uk-button uk-button-primary"><span>+</span> Agregar Fila</button>
		<button class="uk-button uk-button-primary"><span>+</span> Agregar Objeto</button>

		<input class="uk-input" type="text" placeholder="llave">
		<input class="uk-input" type="text" placeholder="valor">
		<button class="uk-button uk-button-primary"><span>+</span> Agregar Fila</button>
		<style type="text/css">
			#edit {
				display: inline-block;
				vertical-align: middle;
				border:  1px solid #dcdcdc;
				padding: 5px;				
	    		width: 200px;
			}
			#edit #is-change input.is-jerarqui-object {
				border:  none;
			}
			#edit #is-change input.is-jerarqui-object::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
				font-weight: normal;
				color: #000;
			}
			#edit #is-change input.is-jerarqui-object:-ms-input-placeholder { /* Internet Explorer 10-11 */
				font-weight: normal;
				color: #000;
			}
			#edit #is-change input.is-jerarqui-object::-ms-input-placeholder { /* Microsoft Edge */
				font-weight: normal;
				color: #000;
			}
			#jerarquia-object-add-row-1,
			#jerarquia-object-cancel-row-1 {
			    width: 35px;
			    display: inline-block;
			    border: 1px solid #d5d5d5;
			    text-align: center;
			}
		</style>
		<?php
			//require "formDataJSON.php";
		?>
		<?php
			// autor: HEVELMO
			// VERSION: 1.FE
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-047",
								"clave" => "AC-5725",
								"vlc_id" => "13883",
								"pos" => "left",
								"left" => "76%",
								"top" => "43%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAC-052",
								"clave" => "AC-5730",
								"vlc_id" => "13883",
								"pos" => "right",
								"left" => "13%",
								"top" => "80%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-057",
								"clave" => "AC-5746",
								"vlc_id" => "13883",
								"pos" => "left",
								"left" => "75%",
								"top" => "47%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAC-105",
								"clave" => "RAM-2920",
								"vlc_id" => "15424",
								"pos" => "left",
								"left" => "65%",
								"top" => "80%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-005",
								"clave" => "RELOJ-1",
								"vlc_id" => "13882",
								"pos" => "down",
								"left" => "46%",
								"top" => "50%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-073",
								"clave" => "RELOJ-13",
								"vlc_id" => "13882",
								"pos" => "down",
								"left" => "70%",
								"top" => "30%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-072",
								"clave" => "RELOJ-12",
								"vlc_id" => "13882",
								"pos" => "down",
								"left" => "70%",
								"top" => "50%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-037",
								"clave" => "RELOJ-8",
								"vlc_id" => "13882",
								"pos" => "down",
								"left" => "30%",
								"top" => "49%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-006",
								"clave" => "RELOJ-3",
								"vlc_id" => "13882",
								"pos" => "left",
								"left" => "47%",
								"top" => "60%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-008",
								"clave" => "RELOJ-6",
								"vlc_id" => "13882",
								"pos" => "right",
								"left" => "32%",
								"top" => "56%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-007",
								"clave" => "RELOJ-4",
								"vlc_id" => "13882",
								"pos" => "right",
								"left" => "15%",
								"top" => "45%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GM-001",
								"clave" => "AC-6157",
								"vlc_id" => "15922",
								"pos" => "up",
								"left" => "47%",
								"top" => "31%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GM-009",
								"clave" => "AC-6165",
								"vlc_id" => "15922",
								"pos" => "up",
								"left" => "24%",
								"top" => "57%"
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GM-006",
								"clave" => "AC-6160",
								"vlc_id" => "15922",
								"pos" => "up",
								"left" => "72%",
								"top" => "54%"
							),
							array(
								"ide" => "4",
								"cod_fabricante" => "GM-007",
								"clave" => "AC-6163",
								"vlc_id" => "15922",
								"pos" => "right",
								"left" => "37%",
								"top" => "84%"
							),
							array(
								"ide" => "5",
								"cod_fabricante" => "GM-005",
								"clave" => "AC-6162",
								"vlc_id" => "15922",
								"pos" => "up",
								"left" => "70%",
								"top" => "79%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "SP55718",
								"clave" => "CEL-109",
								"vlc_id" => "13325",
								"pos" => "right",
								"left" => "20%",
								"top" => "68%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "FP17",
								"clave" => "CEL-115",
								"vlc_id" => "13325",
								"pos" => "left",
								"left" => "50%",
								"top" => "53%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "QG10",
								"clave" => "CEL-112",
								"vlc_id" => "13325",
								"pos" => "up",
								"left" => "62%",
								"top" => "34%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "Q01A",
								"clave" => "CEL-117",
								"vlc_id" => "13325",
								"pos" => "up",
								"left" => "27%",
								"top" => "61%"
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "Q05A",
								"clave" => "CEL-123",
								"vlc_id" => "13325",
								"pos" => "up",
								"left" => "66%",
								"top" => "86%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "QS701",
								"clave" => "CEL-126",
								"vlc_id" => "13325",
								"pos" => "up",
								"left" => "30%",
								"top" => "45%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "QS702",
								"clave" => "CEL-119",
								"vlc_id" => "13325",
								"pos" => "up",
								"left" => "65%",
								"top" => "83%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-040",
								"clave" => "SPK-1421",
								"vlc_id" => "15423",
								"pos" => "left",
								"left" => "75%",
								"top" => "33%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAC-041",
								"clave" => "SPK-1419",
								"vlc_id" => "15423",
								"pos" => "up",
								"left" => "39%",
								"top" => "55%"
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GAC-043",
								"clave" => "SPK-1418",
								"vlc_id" => "15423",
								"pos" => "left",
								"left" => "71%",
								"top" => "71%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-066",
								"clave" => "SPK-1444",
								"vlc_id" => "15423",
								"pos" => "left",
								"left" => "72%",
								"top" => "19%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAC-070",
								"clave" => "SPK-1442",
								"vlc_id" => "15423",
								"pos" => "left",
								"left" => "56%",
								"top" => "61%"
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GAC-067",
								"clave" => "SPK-1441",
								"vlc_id" => "15423",
								"pos" => "up",
								"left" => "35%",
								"top" => "85%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-062",
								"clave" => "SPK-1448",
								"vlc_id" => "15423",
								"pos" => "up",
								"left" => "42%",
								"top" => "39%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAC-064",
								"clave" => "SPK-1449",
								"vlc_id" => "15423",
								"pos" => "down",
								"left" => "63%",
								"top" => "55%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GSP-08",
								"clave" => "SPK-1464",
								"vlc_id" => "15422",
								"pos" => "right",
								"left" => "44%",
								"top" => "46%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GSP-12",
								"clave" => "SPK-1465",
								"vlc_id" => "15422",
								"pos" => "right",
								"left" => "36%",
								"top" => "67%"
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GSP-15",
								"clave" => "SPK-1466",
								"vlc_id" => "15422",
								"pos" => "left",
								"left" => "80%",
								"top" => "68%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "T7718",
								"clave" => "NOTGHIA-195",
								"vlc_id" => "8701",
								"pos" => "up",
								"left" => "21%",
								"top" => "42%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "T107116",
								"clave" => "NOTGHIA-199",
								"vlc_id" => "8701",
								"pos" => "down",
								"left" => "29%",
								"top" => "52%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GTKIDS7",
								"clave" => "NOTGHIA-219",
								"vlc_id" => "8701",
								"pos" => "right",
								"left" => "37%",
								"top" => "52%"
							)
						)
					),
					array( //pendiente
						"data" => "24",
						"class" => "productos",
						"nombre" => "page-24",
						"numero" => "page-24",
						"image" => "CATALOGO GHIA 2018 ABRIL24.jpg",
						"url" => "img/libro",
						"area" => "map-page-24",
						"posicion" => "left",
						"float" => array(/*
							array(
								"ide" => "",
								"cod_fabricante" => "",
								"clave" => "",
								"vlc_id" => "",
								"pos" => "",
								"left" => "",
								"top" => ""
							)*/
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "LX14432CPH",
								"clave" => "NOTGHIA-201",
								"vlc_id" => "6443",
								"pos" => "down",
								"left" => "46%",
								"top" => "16%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "LS13432PMH",
								"clave" => "NOTGHIA-211",
								"vlc_id" => "6443",
								"pos" => "up",
								"left" => "18%",
								"top" => "50%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "CAM43211",
								"clave" => "NOTGHIA-189",
								"vlc_id" => "13462",
								"pos" => "right",
								"left" => "55%",
								"top" => "15%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "4104232G",
								"clave" => "NOTGHIA-186",
								"vlc_id" => "13462",
								"pos" => "right",
								"left" => "18%",
								"top" => "52%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "4114432S",
								"clave" => "NOTGHIA-187",
								"vlc_id" => "13462",
								"pos" => "up",
								"left" => "37%",
								"top" => "46%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "INTEL CELERON",
								"clave" => "PCGHIA-2318",
								"vlc_id" => "6441",
								"pos" => "down",
								"left" => "17%",
								"top" => "26%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "AMD RYZEN",
								"clave" => "PCGHIA-1234",
								"vlc_id" => "6441",
								"pos" => "right",
								"left" => "56%",
								"top" => "53%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "MG2016",
								"clave" => "MNLG-12",
								"vlc_id" => "6442",
								"pos" => "left",
								"left" => "74%",
								"top" => "39%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "MG2217",
								"clave" => "MNLG-15",
								"vlc_id" => "6442",
								"pos" => "right",
								"left" => "25%",
								"top" => "31%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "MG2417",
								"clave" => "MNLG-16",
								"vlc_id" => "6442",
								"pos" => "right",
								"left" => "25%",
								"top" => "25%"
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GCN-001",
								"clave" => "AC-5993",
								"vlc_id" => "15262",
								"pos" => "left",
								"left" => "58%",
								"top" => "45%"
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GCB-001",
								"clave" => "CB-1140",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GCB-002",
								"clave" => "CB-1141",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "4",
								"cod_fabricante" => "GCB-031",
								"clave" => "CB-1211",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "5",
								"cod_fabricante" => "GCB-003",
								"clave" => "CB-1142",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "6",
								"cod_fabricante" => "GCB-004",
								"clave" => "CB-1145",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "7",
								"cod_fabricante" => "GCB-005",
								"clave" => "CB-1143",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "8",
								"cod_fabricante" => "GCB-006",
								"clave" => "CB-1144",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "9",
								"cod_fabricante" => "GCB-007",
								"clave" => "CB-1146",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "10",
								"cod_fabricante" => "GCB-008",
								"clave" => "CB-1147",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "11",
								"cod_fabricante" => "GCB-010",
								"clave" => "CB-1191",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "12",
								"cod_fabricante" => "GCB-009",
								"clave" => "CB-1194",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "13",
								"cod_fabricante" => "GCB-011",
								"clave" => "CB-1184",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "14",
								"cod_fabricante" => "GCB-012",
								"clave" => "CB-1190",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "15",
								"cod_fabricante" => "GCB-014",
								"clave" => "CB-1183",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "16",
								"cod_fabricante" => "GCB-013",
								"clave" => "CB-1187",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "17",
								"cod_fabricante" => "GCB-015",
								"clave" => "CB-1185",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "18",
								"cod_fabricante" => "GCB-016",
								"clave" => "CB-1186",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "19",
								"cod_fabricante" => "GCB-018",
								"clave" => "CB-1189",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "20",
								"cod_fabricante" => "GCB-017",
								"clave" => "CB-1196",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "21",
								"cod_fabricante" => "GCB-019",
								"clave" => "CB-1193",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "22",
								"cod_fabricante" => "GCB-020",
								"clave" => "CB-1188",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "23",
								"cod_fabricante" => "GCB-022",
								"clave" => "CB-1197",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "24",
								"cod_fabricante" => "GCB-023",
								"clave" => "CB-1192",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "25",
								"cod_fabricante" => "GCB-024",
								"clave" => "CB-1225",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "26",
								"cod_fabricante" => "GCB-025",
								"clave" => "CB-1225",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "27",
								"cod_fabricante" => "GCB-026",
								"clave" => "CB-1222",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "28",
								"cod_fabricante" => "GCB-027",
								"clave" => "CB-1224",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "29",
								"cod_fabricante" => "GCB-029",
								"clave" => "CB-1219",
								"vlc_id" => "15262",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GCV-002",
								"clave" => "CV-795",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GCV-001",
								"clave" => "CV-796",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GDV-006",
								"clave" => "DVR-139",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GDV-005",
								"clave" => "DVR-144",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GDV-001",
								"clave" => "DVR-143",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GDV-002",
								"clave" => "",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "GDV-003",
								"clave" => "DVR-140DVR-142",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "4",
								"cod_fabricante" => "GDV-004",
								"clave" => "DVR-141",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "5",
								"cod_fabricante" => "GDV-007",
								"clave" => "DVR-163",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "6",
								"cod_fabricante" => "GDV-008",
								"clave" => "DVR-162",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAL-001",
								"clave" => "AL-14",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "GAL-002",
								"clave" => "AL-18",
								"vlc_id" => "13884",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "G24DHDX7",
								"clave" => "TV-514",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "G32DHDX7",
								"clave" => "TV-515",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "G43DFHDS7",
								"clave" => "TV-534",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "G32DHDS7",
								"clave" => "TV-513",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "G43DFHDS7",
								"clave" => "TV-534",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "G49DFHDS7",
								"clave" => "TV-520",
								"vlc_id" => "13342",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-002",
								"clave" => "AC-4466",
								"vlc_id" => "13324",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-009",
								"clave" => "AC-4925",
								"vlc_id" => "13326",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "SPR-1",
								"clave" => "AC-3432",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "2",
								"cod_fabricante" => "STV-13",
								"clave" => "AC-5778",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "3",
								"cod_fabricante" => "SPR-3",
								"clave" => "AC-3434",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "4",
								"cod_fabricante" => "STV-14",
								"clave" => "AC-5777",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "5",
								"cod_fabricante" => "STV-15",
								"clave" => "AC-5776",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "6",
								"cod_fabricante" => "	STV-12",
								"clave" => "AC-5195",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "7",
								"cod_fabricante" => "STV-6",
								"clave" => "AC-3451",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
							),
							array(
								"ide" => "8",
								"cod_fabricante" => "STV-9",
								"clave" => "AC-3454",
								"vlc_id" => "9481",
								"pos" => "",
								"left" => "",
								"top" => ""
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
						"float" => array(
							array(
								"ide" => "1",
								"cod_fabricante" => "GAC-001",
								"clave" => "AC-4552",
								"vlc_id" => "13327",
								"pos" => "",
								"left" => "",
								"top" => ""
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
			<div class="pre-box" style='display: none; overflow-y: hidden; width: 60%; height: auto; padding: 20px; margin: 0 auto; border: 1px solid rgba(0,0,0,0.5);'>
				<?php
				print_r("<pre>". $characters. "</pre>");
				?>
			</div>
			<!--<iframe src="../jsonviewer.stack.hu/index.htm" width="100%" height="300"></iframe>-->
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
			<div class="box" style="display: none; overflow: hidden; overflow-y: scroll; width: 100%; height: 520px;">
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
								$cat_page_cod_fabricante = $raiz[$x]['coords'][$x1]['cod_fabricante'];
								$cat_page_clave = $raiz[$x]['coords'][$x1]['clave'];
								$cat_page_vlc_id = $raiz[$x]['coords'][$x1]['vlc_id'];
								?>
								<td>
									<?php
									echo $cat_page_area_id;
									?>
								</td>
								<td>
									<?php
									echo $cat_page_cod_fabricante;
									?>
								</td>		
								<td>
									<?php
									echo $cat_page_clave;
									?>
								</td>
								<td>
									<?php
									echo $cat_page_vlc_id;
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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			$("#is-change").css("display", "none");
			$("#edit").mousemove(function(event) {
			    $("#is-edit").css("display", "none");
			    $("#is-change").css("display", "inline-block");
			});
			$("#edit").mouseout(function() {
				$("#is-edit").css("display", "inline-block");
				$("#is-change").css("display", "none");
			});;
		</script>
		<!-- UIkit CSS -->
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/css/uikit.min.css" />-->
		<!-- UIkit JS -->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/js/uikit.min.js"></script>-->
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.9/js/uikit-icons.min.js"></script>-->
	</body>
</html>