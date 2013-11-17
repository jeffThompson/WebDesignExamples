
<!-- a dynamic version that loads a single instance of the header, sidebar,
		 and footer - this makes it easy to make changes that are reflected across
     the entire site -->

<!-- load header and sidebar -->
<?php 
	include("header.php");
	include("sidebar.php");
?>

<!-- main content goes here! -->
<div id="main">

	<p>
		<!-- source: http://fc07.deviantart.net/fs70/f/2010/328/1/0/my_big_fat_kitty_by_lukeawigger-d33jer8.jpg -->
		<img src="images/bigFatKitty.png" width="670" height="322">
	</p>

	<h1>MAIN CONTENT</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel leo quis elit vestibulum vestibulum. Praesent sed est risus. Praesent elementum gravida lacus, ac egestas mi cursus non. Vestibulum sodales venenatis libero eget eleifend. Curabitur adipiscing dictum ipsum id placerat. Aenean mattis vehicula cursus. Cras purus ligula, adipiscing et tristique eu, adipiscing non neque. Vestibulum non diam at metus venenatis laoreet.</p>

	<p>In posuere tristique dictum. Suspendisse potenti. Suspendisse quis tristique tellus. Donec sit amet sem nunc. Vestibulum commodo urna non libero varius consectetur. In hac habitasse platea dictumst. Cras sollicitudin urna non augue aliquam pellentesque.</p>

	<p>Vivamus vehicula augue sit amet nibh volutpat sed tempus metus cursus. Nulla facilisi. Fusce vitae justo at metus bibendum malesuada non nec nisi. Proin porta urna at ligula imperdiet in mollis dolor condimentum. Curabitur eleifend nibh in diam iaculis sit amet suscipit urna rutrum. Duis condimentum rhoncus cursus. Cras et sem ullamcorper diam sollicitudin vestibulum. Nulla at condimentum nisl. Phasellus posuere, augue porttitor mollis condimentum, eros justo sollicitudin purus, vel auctor lectus nisi non mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis eleifend ipsum quis purus placerat vel ultrices velit egestas. Aenean lobortis, eros et dictum elementum, ligula elit vestibulum felis, imperdiet viverra lacus ligula nec sapien. Proin vitae erat lacus. Vestibulum semper augue id ligula interdum quis placerat ligula faucibus. Phasellus mattis dolor odio, vel hendrerit enim.</p>

	<p>Donec id nibh odio, eget sodales nisi. Praesent vitae urna ante, at egestas odio. Curabitur non metus vel neque cursus vestibulum. Praesent nec pharetra nibh. Curabitur nec sem justo. Pellentesque non nisl ut tellus faucibus porta a sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	
	<p>Aenean varius libero ut ligula hendrerit non varius augue vestibulum. Vivamus scelerisque lorem leo. Maecenas varius, nulla euismod bibendum sollicitudin, mauris lorem blandit ligula, sed feugiat velit eros vel quam. Nullam tempor sagittis placerat. Praesent non cursus lectus. Quisque eleifend tortor ac est eleifend aliquam. In commodo dolor quis ligula dapibus at tincidunt ante imperdiet. Integer mollis egestas purus, eget condimentum dolor porta sed. In vitae sagittis diam. Maecenas ut nisl lectus. Vestibulum sit amet sem quis dui porttitor rhoncus sed non arcu. Quisque at nunc ac augue condimentum commodo sed sed massa. Vestibulum eu molestie sem.</p>

	<p>Maecenas porttitor sapien diam, fermentum malesuada magna. Nullam vel augue magna, rhoncus iaculis erat. Aenean lobortis mauris quis arcu dapibus gravida feugiat augue porttitor. Suspendisse pharetra cursus urna, eget dictum dui pretium et. Nunc euismod tellus in magna elementum rutrum. Proin diam elit, aliquet vitae aliquam eget, fringilla sit amet ipsum. Ut mi nunc, laoreet nec viverra sit amet, ornare lobortis augue. Sed cursus dapibus elit, et consectetur turpis fringilla nec. Aenean rutrum consectetur pharetra. Donec pellentesque, lectus non tincidunt luctus, nunc nisl imperdiet dui, at consectetur ligula nibh quis elit. Praesent pharetra euismod molestie. Sed eget nulla ut elit luctus hendrerit. Etiam vel arcu et orci consectetur accumsan non gravida eros. Suspendisse porttitor laoreet enim, non ullamcorper arcu fermentum id. Praesent at felis ligula. Morbi eu urna lacus, ac porttitor lorem.</p>

</div>  <!-- end main -->

<!-- load footer (note the PHP for dynamic date change as well! -->
<?php
	include("footer.php");
?>
