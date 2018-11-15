<?php

/* to be run in browser */

/**
 * a html link/url helper class
 * @return string (of html)
 */
class HtmlLink {
	public static function htmlLinkToJSOpen( string $url ) {
		return "<a href='" . htmlspecialchars( $url, ENT_QUOTES ) . "' " .
			"class='newTab'>" . htmlspecialchars( $url, ENT_QUOTES ) . "</a>";
	}
}
