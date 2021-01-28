<?php 

/*
	Plugin Name: QURpage
	Plugin URI: http://wordpress.org/plugins/hello-dolly/
	Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
	Author: Matt Mullenweg
	Version: 1.7.2
	Author URI: http://ma.tt/
*/
	add_action('wp_enqueue_scripts', function() {
		wp_enqueue_script('jQuery', plugins_url() . "/qrpage/jquery.min.js");
		wp_enqueue_script('qrpage', plugins_url() . "/qrpage/qrcode.min.js");
	});

	add_shortcode( 'qrpage', 'qrpage_function' );
	function qrpage_function(){
		$pl_url = get_page_link();
		$content = '
	<input id="text" type="hidden" value=" ' . $pl_url . '" style="width:80%" /><br />
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById("qrcode"), {
		width : 100,
		height : 100
	});

	function makeCode () {		
		var elText = document.getElementById("text");
		
		if (!elText.value) {
			alert("Input a text");
			elText.focus();
			return;
		}
		
		qrcode.makeCode(elText.value);
	}

	makeCode();

	$("#text").
		on("blur", function () {
			makeCode();
		}).
		on("keydown", function (e) {
			if (e.keyCode == 13) {
				makeCode();
			}
		});
</script>';

		echo $content;
	}



?>

<!--  -->