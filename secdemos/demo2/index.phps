<html>

<head>
	<title>AppSec Demo 1</title>
</head>

<body>

<h1>References</h1>

<ul>
<?php

require 'HtmlLink.php';

$urls = [
	'https://eo.wikipedia.org/', 
	'https://commons.wikimedia.org/', 
	'https://localhost/secdemos/demo1/neat.php'
];

foreach( $urls as $url ) {
	echo "<li>" . HtmlLink::htmlLinkToJSOpen( $url ) . "</li>\n";
}

?>
</ul>

</body>

<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.newTab').click(function() {
		window.open(this.href);
		return false;
	});
});
</script>

</html>
