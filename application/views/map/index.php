<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content-pelikan="IE=edge">
    <meta content-pelikan="initial-scale=1.0, minimum-scale=1.0, width=device-width" name="viewport">
    <link rel="shortcut icon" href="#" />
	<meta name="robots" content-pelikan="all,follow">
	<title>Beranda &dash; Pelikan</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Sansita|Kaushan+Script|Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>semantic/semantic.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>sites/pelikan.css">
</head>
<body>
	<!-- BEGIN NAVIGATION -->
	<div class="ui grid">
		<!-- BEGIN COMPUTER ONLY MENU -->
		<div class="computer only row">
			<div class="column">
				<div class="ui borderless fixed menu navbar_coy" id="nav-pelikan">
					<div class="item">
						<img class="logo" src="<?= base_url('assets/'); ?>images/logo.png">
					</div>
					<a class="item nav-font">Pelikan</a>
				</div>
			</div>
		</div>
		<!-- END COMPUTER ONLY MENU -->
		<!-- BEGIN MOBILE TABLET ONLY MENU -->
		<div class="tablet mobile only row">
			<div class="column">
			    <nav class="ui top fixed menu" id="mobile-nav">
				  	<a id="showmenu" class="item"><i class="content icon white"></i></a>
				  	<a class="right item" id="kaushan-font-logo">Pelikan</a>
				  	<div class="item">
						<img src="<?= base_url('assets/'); ?>images/logo.png">
					</div>
				</nav>
			</div>
		</div>
		<nav class="tablet mobile only row">
			<div id="menukiri" class="menukiri lipat hidden">
				<div class="ui left fixed vertical menu">
					<div class="item center-align-pelikan">
					<table>
						<tr>
							<td>
								<img class="ui mini image" src="<?= base_url('assets/'); ?>images/logo.png">
							</td>
							<td>
								<span class="side-menu-font-logo">Pelikan</span>
							</td>
						</tr>
					</table>
					</div>
					<a href="#" class="item">HOME</a>
					<div class="item center-align-pelikan" id="hidemenu">
						<button class="fluid ui button">
							Close
						</button>
					</div>
				</div>
			</div>
		</nav>
		<!-- END MOBILE TABLET ONLY MENU -->
	</div>
	<!-- END NAVIGATION -->
	<!-- BEGIN HERO SECTION -->
	<div class="ui centered grid">
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone center aligned column" id="hero">
				<div class="valign-middle black-rgba-style">
					<div class="ui centered grid">
						<div class="row">
							<div class="eight wide computer fourteen wide phone center aligned column">
								<div class="big-title">
									<p id="line-height">Pelikan Web</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="ten wide computer fourteen wide phone center aligned column">
								<div class="hero-content-pelikan">
									<p id="line-height"><strong><i>&quot; Peduli Lingkungan Peduli Masa Depan &quot;</i></strong></p>
									<p><a href="#tentang" class="ui inverted basic button" id="btn-pelikan">Tentang <span class="kaushan-style">Pelikan</span></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END HERO SECTION -->
	<!-- BEGIN SECTION ONE-->
	<div class="section-one">
		<div id="tentang"></div>
		<div class="ui container centered grid">
			<div class="row">
				<div class="sixteen wide computer sixteen wide phone center aligned column">
					<div class="large-title">
						<p>Apa itu <span class="kaushan-style">Pelikan</span> ?</p>
					</div>
				</div>
			</div>
			<div class="padding-pelikan2"></div>
			<div class="row">
				<div class="sixteen wide computer sixteen wide phone sixteen wide tablet column">
					<div class="content-pelikan-white justify-pelikan">
						<p><span class="kaushan-style">Pelikan</span> merupakan  sistem  pendukung kepedulian lingkungan  masyarakat yang diterapkan pada website, untuk  membantu masyarakat dalam  pencegahan terkena dampak pencemaran udara dan pelaporan pencemaran udara yang terjadi di lingkungan sekitar. <span class="kaushan-style">Pelikan</span> sendiri merupakan kependekan dari Peduli Lingkungan Peduli Masa Depan.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="sixteen wide computer sixteen wide phone sixteen wide tablet right aligned column">
					<p><a href="#informasi" class="ui huge inverted basic button">Lihat Sekitar</a></p>
				</div>
			</div>
			<div class="row">
				<div class="four wide computer sixteen wide phone eight wide tablet column">
					<div class="padding-pelikan2"></div>
					<div class="ui centered card" id="card-pelikan">
						<div class="content">
							<h2 class="ui center aligned icon header" id="white-color">
								<i class="map marker alternate icon"></i>
								Dapatkan Lokasi
							</h2>
							<br>
							<div class="extra content center-align-pelikan">
								<a href="#informasi" class="ui inverted basic button">Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
				<div class="four wide computer sixteen wide phone eight wide tablet column">
					<div class="padding-pelikan2"></div>
					<div class="ui centered card" id="card-pelikan">
						<div class="content">
							<h2 class="ui center aligned icon header" id="white-color">
								<i class="user md icon"></i>
								Penyebaran Penyakit
							</h2>
							<br>
							<div class="extra content center-align-pelikan">
								<a href="#informasi" class="ui inverted basic button">Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
				<div class="four wide computer sixteen wide phone eight wide tablet column">
					<div class="padding-pelikan2"></div>
					<div class="ui centered card" id="card-pelikan">
						<div class="content">
							<h2 class="ui center aligned icon header" id="white-color">
								<i class="comments outline icon"></i>
								Laporkan Lokasi
							</h2>
							<br>
							<div class="extra content center-align-pelikan">
								<button class="ui inverted basic button" id="lapor">Selengkapnya</button>
							</div>
						</div>
					</div>
				</div>
				<div class="four wide computer sixteen wide phone eight wide tablet column">
					<div class="padding-pelikan2"></div>
					<div class="ui centered card" id="card-pelikan">
						<div class="content">
							<h2 class="ui center aligned icon header" id="white-color">
								<i class="share alternate icon"></i>
								Bagikan Lokasi
							</h2>
							<br>
							<div class="extra content center-align-pelikan">
								<button class="ui inverted basic button" id="share-sosial">Selengkapnya</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SECTION ONE-->
	<div class="padding-pelikan"></div>
	<div class="padding-pelikan"></div>
	<!-- BEGIN SECTION TWO-->
	<div class="ui container centered grid">
		<div id="informasi"></div>
		<div class="row">
			<div class="sixteen wide computer center aligned column">
				<div class="large-title-black">
					<p>Informasi Lingkungan</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- BEGIN CARD -->
			<!-- CARD ONE -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_one</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">CO</p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										CO (karbon monoksida) tidaklah berwarna dan tidak berbau, bersifat racun, merupakan hasil pembakaran yang tidak sempurna dari bahan buangan mobil dan mesin letup.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD TWO -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_two</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">CO<sub>2</sub></p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										Karbon dioksida adalah senyawa kimia yang terdiri dari dua atom oksigen terikat kovalen dengan atom karbon. Berbentuk gas pada temperatur dan tekanan standar dan berada di atmosfer. Konsentrasi karbon dioksida di atmosfer bumi ± 387 pp.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD THREE -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_3</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">NO<sub>2</sub></p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										NO2 bersifat racun terutama terhadap paru. Kadar NO2 yang lebih tinggi dari 100 ppm dapat mematikan sebagian besar binatang percobaan dan 90% dari kematian tersebut disebabkan oleh gejala pembengkakan paru (edema pulmonari).
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD FOUR -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_4</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">CFC</p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										Chloro Fluoro Carbon (CFC) adalah sejenis emisi yang dapat menyebabkan kerusakan lapisan ozon (lapisan pelindung bumi dari sinar ultraviolet). CFC juga disebut freon.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD FIVE -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_5</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">HC</p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										Hidrokarbon adalah sebuah senyawa yang terdiri dari unsur atom karbon (C) dan atom hidrogen (H). Seluruh hidrokarbon memiliki rantai karbon dan atom-atom hidrogen yang berikatan dengan rantai tersebut.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CARD SIX -->
			<div class="five wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui link centered cards" id="card-zat">
					<div class="grey card">
						<div class="content">
							<div class="ui grid">
								<div class="row">
									<div class="eight wide computer left aligned column">
										<p><i class="material-icons">looks_6</i></p>
									</div>
									<div class="eight wide computer right aligned column">
										<p class="percent-style">Pb</p>
									</div>
									<div class="sixteen wide computer justify-pelikan column">
										Timbal atau Timbel adalah suatu unsur kimia dalam tabel periodik yang memiliki lambang Pb dan nomor atom 82.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CARD -->
		</div>
		<div class="padding-pelikan"></div>
		<div class="row">
			<!-- BEGIN MAP -->
			<div class="eight wide computer sixteen wide phone column">
				<p><div class="map-responsive" id="map"></div></p>
			</div>
			<!-- END MAP -->
			<!-- BEGIN CHART -->
			<div class="eight wide computer sixteen wide phone computer only column">
				<p><div id="chartContainer"></div></p>
			</div>
			<!-- END CHART -->
		</div>
		<div class="row">
			<div class="sixteen wide computer sixteen wide phone column">
				<div class="padding-pelikan2"></div>
				<div class="padding-pelikan2"></div>
				<div class="content-pelikan-black justify-pelikan">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, eius quia molestias nihil temporibus nam praesentium accusantium odit repellat. Repellendus modi atque ullam error quis doloremque, soluta aut, id cum eligendi. Doloribus quisquam laudantium quos iste eos voluptatibus labore quo alias.</p>
				</div>
				<div class="padding-pelikan2"></div>
				<div class="padding-pelikan2"></div>
				<div class="padding-pelikan2"></div>
				<div class="padding-pelikan2"></div>
			</div>
		</div>
		<!-- BEGIN ARTICLE SECTION -->
		<div class="row">
			<div class="sixteen wide computer center aligned column">
				<div class="large-title-black">
					<p>Artikel Lingkungan</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- CARD ARTICLE ONE -->
			<div class="four wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui centered card">
					<div class="image">
						<img src="<?= base_url('assets/'); ?>images/image.png">
					</div>
					<div class="content">
						<h3>PENANAMAN 1000 POHON</h3>
						<p class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nobis odit nemo harum, magni. Officiis assumenda quae, repudiandae? Nihil iste sed nulla esse hic, dolorum.</p>
					</div>
					<div class="extra content">
						<a class="ui button" id="btn-pelikan-article" href="#">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<!-- CARD ARTICLE TWO -->
			<div class="four wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui centered card">
					<div class="image">
						<img src="<?= base_url('assets/'); ?>images/image.png">
					</div>
					<div class="content">
						<h3>PENANAMAN 1000 POHON</h3>
						<p class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nobis odit nemo harum, magni. Officiis assumenda quae, repudiandae? Nihil iste sed nulla esse hic, dolorum.</p>
					</div>
					<div class="extra content">
						<a class="ui button" id="btn-pelikan-article" href="#">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<!-- CARD ARTICLE THREE -->
			<div class="four wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui centered card">
					<div class="image">
						<img src="<?= base_url('assets/'); ?>images/image.png">
					</div>
					<div class="content">
						<h3>PENANAMAN 1000 POHON</h3>
						<p class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nobis odit nemo harum, magni. Officiis assumenda quae, repudiandae? Nihil iste sed nulla esse hic, dolorum.</p>
					</div>
					<div class="extra content">
						<a class="ui button" id="btn-pelikan-article" href="#">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<!-- CARD ARTICLE FOUR -->
			<div class="four wide computer sixteen wide phone eight wide tablet column">
				<div class="padding-pelikan2"></div>
				<div class="ui centered card">
					<div class="image">
						<img src="<?= base_url('assets/'); ?>images/image.png">
					</div>
					<div class="content">
						<h3>PENANAMAN 1000 POHON</h3>
						<p class="justify-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nobis odit nemo harum, magni. Officiis assumenda quae, repudiandae? Nihil iste sed nulla esse hic, dolorum.</p>
					</div>
					<div class="extra content">
						<a class="ui button" id="btn-pelikan-article" href="#">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
			<!-- LOAD MORE ARTICLE -->
			<div class="sixteen wide computer column center aligned">
				<div class="padding-pelikan"></div>
				<button class="large ui right labeled icon button">
					<i class="plus icon"></i>
					Muat Lebih Banyak Artikel
				</button>
			</div>
		</div>
		<!-- END ARTICLE SECTION -->
	</div>
	<!-- END SECTION TWO-->
	<div class="padding-pelikan"></div>
	<!-- BEGIN LIGHT FOOTER -->
  	<div class="light-footer">
  		<div class="padding-pelikan"></div>
  		<div class="ui container centered grid">
  			<div class="row">
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor aliquid maxime libero sed. Culpa commodi ipsum distinctio, dolores doloremque necessitatibus perspiciatis, saepe quo id voluptate.</p>
  				</div>
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum illo fugit, amet sint eius ex, quisquam saepe nulla cum aliquid provident mollitia iusto maxime nesciunt.</p>
  				</div>
  				<div class="five wide computer sixteen wide phone column">
  					<div class="padding-pelikan2"></div>
  					<p class="justify-pelikan f15-pelikan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis laborum, saepe quod, inventore fuga, perspiciatis sed unde qui maiores error id nemo alias similique, corporis facere quaerat! Iure alias, quod!</p>
  				</div>
  			</div>
  		</div>
  		<div class="padding-pelikan"></div>
  	</div>
  	<!-- END LIGHT FOOTER -->
  	<!-- BEGIN DARK FOOTER -->
  	<div class="dark-footer">
  		<div class="padding-pelikan2"></div>
		<div class="ui container grid">
			<div class="row">
				<div class="sixteen wide phone sixteen wide tablet sixteen wide computer column center aligned">
					<span style="color: #ffffff;"><b>PELIKAN BY KUKAMI-DEV <i class="code icon" style="color: #000;"></i> DENGAN <span style="color: #f50057;"> <i class="heart icon"></i> </span> DI KOTA KEMBANG</b></span>
				</div>
			</div>
		</div>
	</div>
	<!-- END DARK FOOTER -->
	<!-- MODAL LAPOR -->
	<div class="ui modal lapor">
		<i class="close icon"></i>
		<div class="header">
			Laporkan Pencemaran
		</div>
		<div class="content">
			<form class="ui form">
				<div class="field">
					<label>Nama Pelapor</label>
					<input name="first-name" placeholder="Nama Pelapor" type="text">
				</div>
				<div class="field">
					<label>Alamat Lokasi Yang Di Laporkan</label>
					<input name="last-name" placeholder="Alamat Lokasi Yang Di Laporkan" type="text">
				</div>
				<div class="fields">
					<div class="fourteen wide field">
						<label>Silahkan Pilih File</label>
						<input placeholder="Silahkan Pilih File" type="text">
					</div>
					<div class="two wide field">
						<label style="color: #FFF;">_</label>
						<button class="ui button">Pilih</button>
					</div>
				</div>
				<div class="field">
					<label>Keluhan</label>
    				<textarea placeholder="Silahkan Cantumkan Keluhan Anda"></textarea>
				</div>
				<button class="ui button">Submit</button>
			</form>
		</div>
		<div class="actions">
			<div class="ui red button" id="batal-lapor">Batal</div>
		</div>
	</div>
	<!-- END MODAL LAPOR-->
	<!-- MODAL SOSIAL -->
	<div class="ui mini modal sosial">
		<i class="close icon"></i>
		<div class="header">
			Bagikan Ke Sosial Media
		</div>
		<div class="content center-align-pelikan">
			<button class="ui facebook button">
				<i class="facebook icon"></i>
				Facebook
			</button>
			<button class="ui twitter button">
				<i class="twitter icon"></i>
				Twitter
			</button>
		</div>
		<div class="actions">
			<div class="ui red button" id="batal-share-sosial">Batal</div>
		</div>
	</div>
	<!-- END MODAL SOSIAL -->
</div>
</body>
<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>semantic/semantic.min.js"></script>
<script src="<?= base_url('assets/'); ?>canvasjs/canvasjs.min.js"></script>
<script src="<?= base_url('assets/'); ?>sites/scroll.js"></script>
<script>
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Lorem Ipsum Dolor"
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 10,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 51.08, label: "Chrome" },
			{ y: 27.34, label: "Internet Explorer" },
			{ y: 10.62, label: "Firefox" },
			{ y: 10.75, label: "Safari" }
		]
	}]
});
chart.render();
/*BEGIN RESPONSIVE MENU ANIMATION*/
$(document).ready(function(){
    $("#showmenu").click(function(){
        $('.menukiri.lipat .menu')
		  .transition({
		  	animation : 'swing right',
		    duration  : 1200
		  })
		;
		$('#menukiri').removeClass('hidden');
    });
    $("#hidemenu").click(function(){
    	$('#menukiri').removeClass('hidden');
        $('.menukiri.lipat .menu')
		  .transition({
		  	animation : 'fade',
		    duration  : 1200
		  });
    });
});
/*END RESPONSIVE MENU ANIMATION*/

	$(window).scroll(function(){
		if($(window).scrollTop()){
			$('.navbar_coy').attr("id","nav-pelikan_black");
		}else{
			$('.navbar_coy').attr("id","nav-pelikan");
		}
	});

  var markers = [];
  var map = "";
  var bounds = "";
  function initMap() {  
    var infoWindow = new google.maps.InfoWindow;
    bounds = new google.maps.LatLngBounds(); 
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: {lat: -6.885500, lng: 107.615407},
      mapTypeId: 'roadmap'
    });
  }

    function addMarker(lat, lng) {
      var lokasi = new google.maps.LatLng(lat, lng);
      bounds.extend(lokasi);
      var marker = new google.maps.Marker({
          map: map,
          position: lokasi,
      });       
      map.fitBounds(bounds);
    
      markers.push(marker);
      return marker;
    }

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var _lat  = position.coords.latitude
      var _lng  =  position.coords.longitude
      var pos = {
        lat: _lat,
        lng: _lng,
      };
      kirim_lokasi(_lat, _lng);
      
    }, function(err) {
      console.log("error : " + err)
    });
  } else {
    console.log("Tidak BErfungsi")
  }

  function kirim_lokasi(lat, lng) {
    $.ajax({
        method:"POST",
        url:'<?php echo "maps/getlokasi" ?>',
        data:{latitude:lat, longitude:lng},
        dataType: "json",
        success:function(data){
        
          for (let i = 0; i <data.length; i++) {
            addMarker(data[i]['lat'], data[i]['lng']);
          }  
        }
    });
  }

$( "#lapor" ).click(function() {
	$('.ui.modal.lapor')
		.modal('show')
	;
});
$( "#batal-lapor" ).click(function() {
	$('.ui.modal.lapor')
		.modal('hide')
	;
});

$( "#share-sosial" ).click(function() {
	$('.ui.modal.sosial')
		.modal('show')
	;
});
$( "#batal-share-sosial" ).click(function() {
	$('.ui.modal.sosial')
		.modal('hide')
	;
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpALWzkNO7VH_pCSX30bt43_7h3sIeqQI&libraries=places&callback=initMap" async defer></script>
</html>