<?php
// This function is to tell if the text should be in black or white depending on the background colour.
function whiteOrBlack($color){
	$color = str_replace('#','',$color);
	$red = hexdec(substr($color,0,2));
	$green = hexdec(substr($color,2,2));
	$blue = hexdec(substr($color,4,2));
	if (($red*0.299 + $green*0.587 + $blue*0.114) > 186){
		$returnColor = '#000000';
	}else{
		$returnColor ='#ffffff';
	}
	return $returnColor;

}
// This function creates a slightly darker version of the colour added to compliment the main colour.
function complementDarker($color){
	$color = str_replace('#','',$color);
	$red = hexdec(substr($color,0,2));
	$green = hexdec(substr($color,2,2));
	$blue = hexdec(substr($color,4,2));

	$newRed =   sprintf("%02s", dechex( floor($red*0.75) )  );
	$newGreen = sprintf("%02s", dechex( floor($green*0.75) ));
	$newBlue =  sprintf("%02s", dechex( floor($blue*0.75) ) );
	
	$newColor = '#'.$newRed.$newGreen.$newBlue;
	return $newColor;
}
// This works the same as the previous function but makes the colour lighter.
function complementLighter($color){
	$color = str_replace('#','',$color);
	$red = hexdec(substr($color,0,2));
	$green = hexdec(substr($color,2,2));
	$blue = hexdec(substr($color,4,2));

	$newRed =   sprintf("%02s", dechex( floor($red*1.1) )  );
	$newGreen = sprintf("%02s", dechex( floor($green*1.1) ));
	$newBlue =  sprintf("%02s", dechex( floor($blue*1.1) ) );
	
	$newColor = '#'.$newRed.$newGreen.$newBlue;
	return $newColor;
}

function getPageName(){
	 $page_name = $_SERVER['PHP_SELF'];
	 $page_name_array = explode("/",$page_name);
	 $page_name = end($page_name_array);
	 $page_name = array_shift(explode('.', $page_name));
	 return $page_name;
}
// This is the main function which builds the header with all the HTML, CSS & JavaScript
// Please put all page names and there URLs in as array as so pageName => URL and name it $tabs

function stickyHeader($tabs,$logoURL='',$topColor='red', $headerColor=false, $font = false, $hoverColor=false, $textColor = false, $selectedColor=false){
	if($headerColor===false){
		$headerColor = complementDarker($topColor);
	}
	if($textColor === false){
		$textColor = whiteOrBlack($headerColor);
	}
	if($hoverColor === false || $hoverColor === 'darker' || $hoverColor === 'Darker'){
		$hoverColor = complementDarker($headerColor);
	}
	if($selectedColor === false || $hoverColor === 'lighter' || $hoverColor === 'Lighter'){
		$selectedColor = complementLighter($headerColor);
	}
	if($font !== false){
		$font = 'font-family: '.$font.';';
	}else{
		$font = '';
	}
	$html = "<div class='top'><a href='index'><img class='logo' id='big_logo' src='{$logoURL}' alt='logo'></a></div>
			 <header>
			 <ul>
			 <li class='logo_li'><a href='index'><img class='logo' id='small_logo' src='{$logoURL}' alt='logo'></a></li>";
	$thisPage = getPageName();
	foreach($tabs as $pageName => $url){
			if (strpos($url, 'http://') == false) {
				$url = array_shift(explode('.', $url));
			}
			
			if($url == $thisPage){
				$html .= "<li id='self'><a href='{$url}'>{$pageName}</a></li>";
			}else{
				$html .= "<li><a href='{$url}'>{$pageName}</a></li>";
			}
	}
	$html .= "</ul>
			 </header>";
	$html .= "
			 <style>
			 	html, body{
			 		margin:0;
			 		padding:0;
			 	}
			 	header a {
			 		color: inherit; 
			 		text-decoration: inherit; 
			 		display:block;
			 		width:auto;
			 	}
			 	.top{
			 		width:100%;
			 		height:150px;
			 		background-color:{$topColor};
			 		margin-bottom:0;
			 		padding:0;
			 		padding-top:15px;
			 		
			 		-moz-transition:all 100ms ease-in;
			 		-webkit-transition:all 100ms ease-in;
			 		-o-transition:all 100ms ease-in;
			 		transition:all 100ms ease-in;
			 	}
			 		header{
			 			height:70px;
			 			width:100%;
			 			background-color:{$headerColor};
			 			color:{$textColor};
			 			position:relative;
			 			overflow:hidden;
			 			padding:0;
			 			
			 			-moz-transition:all 100ms ease-in;
			 			-webkit-transition:all 100ms ease-in;
			 			-o-transition:all 100ms ease-in;
			 			transition:all 100ms ease-in;
			 		}
			 		header ul{
			 			margin:0;
			 			display:inline-flex;
			 			width:100%;
			 			height:100%;
			 			padding:0;
			 			z-index:1000;
			 			bottom:0;
			 		
			 			-moz-transition:all 100ms ease-in;
			 			-webkit-transition:all 100ms ease-in;
			 			-o-transition:all 100ms ease-in;
			 			transition:all 100ms ease-in;
			 		}
			 		header ul li{
			 			flex-grow:1;
			 			height:100%;
			 			flex-basis:auto;
			 			text-align:center;
			 			list-style:none;
			 			border-style:none;
			 			font-family:sans-serif;
			 			cursor:pointer;
			 			font-size:40px;
			 			height:100%;
			 			padding-top:15px;
			 			margin:0;
			 			bottom:0;
			 			{$font}
			 		
			 			-moz-transition:all 100ms ease-in;
			 			-webkit-transition:all 100ms ease-in;
			 			-o-transition:all 100ms ease-in;
			 			transition:all 100ms ease-in;
			 		}
			 		header ul li:hover{
			 			background-color:{$hoverColor}
			 		}
			 		.logo_li{
			 			display:block;
			 			overflow:hidden;
			 			height:100%;
			 			flex-grow:0;
			 		}
			 		.logo_li img{
			 			height:40px;
			 			margin-left:10px;
			 			display:none;
			 		}
			 		.top img{
			 			display:block;
			 			height:80%;
			 			margin: 0 auto;
			 			cursor:pointer;
			 		}
			 		#self{
			 			background-color:{$selectedColor};
			 		}
			 	</style>";
	
	$html .= '
			<script>
				$(window).on("scroll",function(){
				var scroll = $(window).scrollTop();
				var headerTop = $(".top").height()
				if(scroll >= headerTop){
					$("header").css("position", "fixed");
					$("header").css("top", "0");
					$(".logo_li").css("flex-grow", "1");
					$(".logo_li img").fadeIn()
				}else{
					$("header").css("position", "relative");
					$("header").css("top", "");
					$(".logo_li").css("flex-grow", "0");
					$(".logo_li img").hide()
				}
				});
			</script>
			';
			
			return $html;
}

?>