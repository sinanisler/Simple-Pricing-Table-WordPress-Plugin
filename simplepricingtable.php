<?php
/**
 * Plugin Name: Simple Pricing Table - Basit Fiyat Tablosu
 * Plugin URI: http://sinanisler.com
 * Description: Simple Pricing Table - Fiyat Tablosu Eklentisi. Örnek kullanım; [price title="başlik örnek test" price="100 TL" color="00ffff"] Paket detayları satılacak ürün detayları[/price]
 * Version: 0.1
 * Author: Sinan İŞLER
 * Author URI: http://sinanisler.com
 * License: OpenSource


Örnek Kullanım;
 
[price title="başlik örnek test" price="100 TL" color="00ffff"] 
Açıklamalar
paket detayları
satılan şeyin detayları felan filan
burası html yer <br> 
ne bilim <h1>asdfasd</h1>
gibi..
[/price]

 */
 
function styleeklehead() {
    ?>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600&subset=latin-ext);
.price *{ font-family: 'Open Sans', sans-serif; text-align:center; }
.price{ width:220px; height:auto; float:left; margin:10px; background:white; border:solid 1px #E2E2E2; }
.price-title{ width:220px; height:80px; float:left; line-height:80px; font-size:20px; font-weight:600; }
.price-price{ width:220px; height:100px; float:left; line-height:100px; font-size:20px; font-weight:600; background:#03bd9c; font-size:50px; color:white; }
.price-description{ width:210px; height:300px; float:left; line-height:20px; font-size:15px; padding:10px; overflow:hidden;  }
.entry-content{ width:980px !important;}
.bg-header-single , #btnSearch{ display:none !important;}
.wpcf7-form{	width:450px;	}
 .i1{
	width:440px;
	height:30px;
	display:block;
	line-height:30px;
	border-radius:5px;
	border:solid 1px gray;
	padding-left:10px;
	}
 .i2{
	width:450px;
	height:150px;
	display:block;
	line-height:30px;
	border-radius:5px;
	border:solid 1px gray;
	}
 .i3{
	width:450px;
	height:30px;
	display:block;
	line-height:30px;
	text-align:center;
	font-size:14px;
	font-weight:bold;
	border:none;
	background:#457A36;
	border-radius:5px;
	color:white;
	cursor:pointer;
	}
 .wpcf7-list-item{
	width:270px;
	height:auto;
	display:block;
	margin:3px;
	}
</style>
    <?php
}
add_action( 'wp_print_styles', 'styleeklehead' );


add_shortcode('price','SH_TEST_handler');
function SH_TEST_handler($atts = array(), $content = null, $tag){
    shortcode_atts(array(
        'title' => false,
        'price' => false,
        'color' => '03bd9c'
    ), $atts);
	
	
	?>
    

<div class="price">
    <div class="price-title">
        <?php echo $atts['title']; ?>
    </div>
    <div class="price-price" style="background:#<?php echo $atts['color'] ?> !important">
         <?php echo $atts['price']; ?>
    </div>
    <div class="price-description">
        <?php echo $content; ?>
    </div>
</div>

	
	
	<?php
}

?>