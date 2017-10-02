<?php
	require_once 'Web Design Functions.php';
?>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<style>
	@font-face {
		font-family: Albertus;
		src: url(/Albertus.ttf);
	}
	header{
		font-weight: bold;
	}
	</style>
	<?php
	if(isset($_GET['color'])){
		$color = $_GET['color'];
	}else{
		$color = '#990000';
	}
	if(isset($_GET['imgURL']) && !empty($_GET['imgURL'])){
		$imgURL = $_GET['imgURL'];
	}else{
		$imgURL = 'http://www.interested.online/images/logo_big.png';
	}
		$tabs = [
			'Tab 1' => "lorem.php",
			'Tab 2' => "lorem#2",
			'Tab 3' => 'lorem#3',
			'Tab 4' => 'lorem#4',
			'Tab 5' => 'lorem#5',
			'Tab 6' => 'lorem#6',
		];
		echo(stickyHeader($tabs,$imgURL,$color));
	?>
	<main>
		<br><br>
		<form action='<?php $_SERVER['PHP_SELF']; ?>' method='get' enctype='multipart/form-data'>
			<h2>Select A Colour</h2>
			<input type='color' name='color'>
			<h2>Put in a logo URL</h2>
			<input name='imgURL'>
			<button>Submit</button>
		</form
		<br><br>
		<h2>
			Scroll Down to see more
		</h2>
		<p>
			<br><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas dictum dictum. Phasellus rutrum velit a lorem fringilla, et egestas ante pharetra. Pellentesque nunc libero, placerat a sollicitudin in, elementum at risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eget lectus sit amet turpis imperdiet hendrerit. Pellentesque interdum dictum arcu vitae iaculis. Fusce aliquam ac purus nec sollicitudin. Ut vitae ante varius, consequat augue vitae, commodo ipsum.
			
			Pellentesque sed malesuada felis. Nullam placerat pellentesque dui, tincidunt pellentesque sapien lacinia et. Vivamus iaculis posuere est, vitae gravida lacus ornare varius. Etiam hendrerit sit amet lorem ac dictum. Nam suscipit quam nec viverra euismod. Integer nec urna vestibulum, bibendum sapien vitae, faucibus ante. Nam at justo fringilla, lacinia arcu varius, scelerisque dolor. Morbi diam lectus, laoreet sed semper vel, facilisis vel augue. Maecenas nibh mauris, ultricies at elit sed, maximus volutpat lacus. Sed mattis nisi nisl, et semper lacus feugiat ut. Nunc at vehicula neque. Vestibulum eu justo in ligula porta pretium varius eget mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			
			Sed consectetur risus et venenatis placerat. Pellentesque urna enim, tincidunt feugiat odio ac, molestie hendrerit velit. Nam facilisis mi eget justo congue, sit amet fermentum urna rutrum. Ut sit amet nisl in erat pulvinar rhoncus. Ut commodo vulputate mi quis gravida. Sed posuere arcu et turpis congue lacinia. Integer eu sagittis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			
			Proin tincidunt libero sit amet nisl mollis, quis gravida quam varius. Nullam sagittis pulvinar tellus, a pretium tortor condimentum vel. Proin libero odio, rutrum id viverra quis, pellentesque in purus. Pellentesque sed ipsum ultricies, auctor risus et, consequat odio. Nulla viverra at ex sagittis laoreet. Praesent non condimentum diam. Suspendisse vel eros sit amet dui porta blandit. Nulla lectus dolor, interdum quis arcu ut, sodales auctor nunc. Maecenas feugiat sapien aliquam congue luctus. Nam eu dui ante. Vivamus non porttitor metus. Donec rutrum facilisis malesuada.
			
			Suspendisse sit amet congue ipsum. Mauris ut libero pellentesque, suscipit mauris convallis, aliquet risus. Quisque leo turpis, accumsan vitae imperdiet sit amet, ullamcorper nec velit. Pellentesque sit amet venenatis nisi, vel sagittis ex. Phasellus eget pretium felis, ut ultricies tortor. Maecenas hendrerit, neque vel egestas venenatis, nunc neque auctor mauris, volutpat suscipit sem dui efficitur lectus. Ut erat sapien, malesuada et velit at, consequat elementum leo.
			
			Vivamus mattis erat enim, non fermentum ante ultrices sed. Morbi sit amet laoreet felis. Donec eget ante mollis, lobortis nibh ut, venenatis turpis. Integer bibendum vitae urna sed suscipit. Nullam pharetra metus sed dolor cursus eleifend vel ut tortor. Integer non pulvinar enim. Suspendisse potenti. Nulla nec aliquam metus, elementum congue nibh. Cras varius ligula eget sem lobortis, a scelerisque est rutrum. Duis porttitor, mauris vehicula vehicula ullamcorper, lacus lacus vehicula ligula, in viverra nisl mauris a nisi. Maecenas rutrum scelerisque ipsum et varius.
			
			In eleifend facilisis mi, at condimentum ex semper a. Donec sed auctor diam. Vestibulum sed felis ligula. Aliquam vel gravida odio. Donec in tincidunt elit. Etiam tincidunt dolor quis sapien auctor, quis fermentum diam semper. Aliquam interdum nisl in elementum auctor. Nullam id purus sollicitudin, venenatis sapien non, lobortis odio.
			
			Donec sit amet orci mi. Integer nulla mauris, dapibus quis vestibulum id, commodo vel eros. Fusce a interdum sapien. Proin accumsan, metus ut laoreet scelerisque, justo ex sollicitudin nunc, faucibus ultricies turpis purus gravida turpis. Vivamus commodo, nisl ac commodo accumsan, nisi lacus facilisis nisl, sit amet semper nisl risus sit amet neque. Nullam quis sapien vitae urna congue fermentum. Suspendisse finibus arcu euismod nulla ultricies consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed id mattis felis. Nunc aliquam, tellus eget luctus tempor, est erat molestie velit, malesuada molestie dui lacus nec felis. Nulla libero quam, scelerisque et bibendum a, accumsan ac ante. Aliquam pellentesque sem fermentum, mollis mi eget, lobortis libero. Nullam elementum eros sed eros efficitur maximus.
			
			Pellentesque eu tempor justo. Maecenas at metus nec magna rhoncus dictum id id sem. Vivamus porttitor, risus ut aliquet tempus, sapien tellus laoreet elit, at consectetur dui tortor a est. Suspendisse quis nunc euismod, condimentum quam eget, bibendum leo. Duis rutrum malesuada tincidunt. Praesent laoreet quam sed diam lobortis dictum. Pellentesque eget tincidunt ipsum. Maecenas pretium quam id lorem auctor, sed mollis mauris vulputate. Maecenas auctor elit et efficitur auctor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin in lectus metus. Nulla dapibus quam sit amet dui imperdiet, vitae malesuada magna porttitor.
			
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis libero non eros feugiat, a pretium nisl aliquam. Mauris porta ex lacus, eu eleifend lectus dapibus sed. Sed tempus, sapien quis feugiat tempus, ante arcu aliquet erat, vitae condimentum erat lorem a lacus. Ut faucibus congue commodo. In molestie ex non odio maximus eleifend. Aenean vel maximus odio. Proin vitae finibus arcu, ut ultricies magna. In vitae vestibulum neque. Ut in ullamcorper justo, sed placerat turpis. Quisque semper sem risus, eget tempus nibh semper non. In id enim in enim maximus porttitor. Nunc urna ex, auctor ac tristique quis, aliquam vitae libero. Quisque vitae magna enim. Nunc vel justo placerat, tempor nisi vel, elementum quam.
			
			Ut sed sem vulputate, hendrerit odio a, suscipit risus. Fusce auctor eu lectus vitae lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce eleifend dapibus arcu at sollicitudin. Integer laoreet rutrum pretium. Nullam et dignissim nunc, et mattis mauris. Nunc vitae sodales risus. Pellentesque bibendum rhoncus odio sit amet ultrices. Nam imperdiet vestibulum blandit. Maecenas hendrerit enim non metus fermentum, sed tincidunt felis viverra. Etiam bibendum interdum malesuada. Nulla facilisi.
			
			Fusce sed felis lectus. Sed eu sapien viverra, auctor magna non, scelerisque enim. Duis non massa vestibulum, iaculis velit sit amet, laoreet quam. Etiam eu velit nec erat aliquam blandit sed ut nulla. Nullam a cursus purus, posuere vestibulum metus. Donec rhoncus tristique enim, ac volutpat sem. In rutrum eleifend sapien. Donec mattis urna in rutrum mattis. Sed pellentesque finibus venenatis. Quisque ligula dolor, blandit pharetra pretium id, mollis quis ante. Curabitur lacinia mollis tortor ac feugiat. Curabitur pellentesque leo ac enim feugiat luctus. Aliquam erat volutpat. Donec sit amet tellus volutpat, tristique urna id, ullamcorper ante. Cras convallis diam tempor libero vehicula commodo. Phasellus interdum, nibh sit amet facilisis vehicula, purus eros egestas risus, at auctor massa elit at mauris.
			
			Nam nec tellus tincidunt, interdum dui nec, cursus odio. Quisque ut elit finibus, varius dui in, sollicitudin turpis. Curabitur ac ipsum in arcu accumsan eleifend id nec lacus. Ut id vestibulum purus. Proin euismod massa nisl, ac vehicula magna volutpat a. Proin nec quam non sem accumsan molestie. Sed risus est, gravida in eros ac, placerat tincidunt tortor. Curabitur semper auctor sem, eget ullamcorper quam lobortis tempus.
			
			Nam id tortor auctor massa aliquet ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent quis erat quam. Pellentesque sed magna eget felis aliquet porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis eu fermentum purus. Nam vitae diam eu est viverra sagittis. Sed maximus ut arcu id gravida.
			
			Maecenas dignissim tempor diam sodales fringilla. Nunc mattis tellus a finibus fermentum. Morbi sit amet porta lorem, sed feugiat ligula. Suspendisse potenti. Proin suscipit ex a lorem sodales, sed dignissim arcu ultricies. Cras egestas, diam ac consectetur ullamcorper, turpis leo consequat ante, vitae maximus lacus lacus ut est. Donec hendrerit tristique pharetra. Etiam convallis lacus ut risus pulvinar egestas. Nullam feugiat auctor augue ac viverra. Fusce eros nibh, pharetra nec dignissim ut, euismod aliquam est. In laoreet congue ultricies.
			
			Cras congue accumsan magna, in sollicitudin dui dignissim vel. Sed at faucibus eros, sit amet pulvinar ex. Nullam eu eleifend tortor. Suspendisse suscipit nibh lacus, sit amet cursus est tincidunt vitae. Nulla facilisi. Sed volutpat, magna vel suscipit scelerisque, dolor nisi interdum orci, pellentesque varius orci quam ut orci. Duis lacinia mauris placerat sem blandit, vel sodales metus eleifend. Nulla convallis justo vel viverra sollicitudin. Sed gravida nunc eros, sed cursus nisi mollis non. Etiam feugiat pellentesque leo, et porttitor sem egestas vel. Sed rhoncus ligula libero, quis feugiat dolor accumsan porta. Ut aliquet neque eget libero sollicitudin, ac feugiat magna molestie. Donec tortor velit, lobortis id eros sit amet, porttitor varius erat. Pellentesque et maximus sapien. Pellentesque quis sapien purus.
			
			Donec egestas orci vel tortor venenatis, non ullamcorper libero placerat. Fusce sit amet luctus risus, vel laoreet purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras eu lobortis tellus, a mollis sapien. Integer ut metus eu ligula mollis posuere at non diam. Morbi tincidunt, arcu in lacinia sodales, ligula neque volutpat ligula, malesuada gravida felis ante eget lorem. Nam dignissim, eros luctus dignissim vestibulum, nulla dui finibus ex, convallis blandit nisi quam id ipsum. Vestibulum sollicitudin finibus risus, ut cursus nunc ultricies vitae.
			
			Vestibulum blandit aliquam velit, non posuere nisl. Pellentesque et purus varius orci aliquam egestas. Sed a ante posuere, dictum ipsum et, scelerisque dolor. Pellentesque scelerisque, turpis et commodo ornare, nisl purus facilisis arcu, at porttitor sem enim eget urna. Nam consequat metus sed tellus aliquet elementum. In ultrices est a quam aliquam fermentum. Maecenas est sem, vulputate eu maximus nec, condimentum non lorem. Vestibulum ullamcorper sodales leo, vel elementum ipsum dapibus et. Maecenas tincidunt massa metus, vitae suscipit dolor aliquet et. Sed enim mauris, maximus nec scelerisque eget, imperdiet nec risus. Phasellus pulvinar porttitor massa ac tristique. Integer bibendum sem quis ligula elementum cursus. Aliquam ac pulvinar nunc. Morbi sollicitudin urna in mi imperdiet, sit amet accumsan diam venenatis. Duis massa augue, tincidunt a hendrerit nec, ullamcorper a leo.
			
			Vestibulum scelerisque imperdiet semper. Phasellus nec scelerisque turpis. Integer consectetur felis ultricies condimentum fringilla. Etiam vehicula tellus eu ipsum pulvinar, a euismod nisi ultricies. Nullam posuere ipsum sit amet ex sagittis congue. Sed arcu lectus, iaculis non imperdiet vitae, posuere id sapien. Curabitur id arcu velit. Cras elementum bibendum odio, non cursus justo tempus id. Aliquam blandit finibus volutpat. Donec dolor augue, pellentesque a ex ac, sodales scelerisque ex. Aenean ac nisi eu erat finibus euismod. Nunc at enim interdum, porttitor metus et, ultricies eros. Cras nulla ante, mattis ut aliquet quis, sollicitudin vel enim.
			
			In eget justo viverra, porttitor nisi non, volutpat tellus. Aenean fringilla eleifend nunc eget euismod. Sed ac euismod ipsum, sit amet maximus leo. Integer elementum, magna in tristique aliquam, felis odio molestie est, eu venenatis eros arcu id ex. Vestibulum sit amet nisl dolor. Integer ac mi felis. Fusce orci est, tristique quis nisl ultricies, eleifend lobortis urna. Curabitur scelerisque mi eget aliquet auctor. In consequat efficitur urna in semper. Aliquam nisi lectus, pretium sed consequat varius, fermentum sit amet ligula.
		</p>
	</main>