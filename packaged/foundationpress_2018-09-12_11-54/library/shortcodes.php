<?php 
	// Remove dropcap used by previous theme from old content
	function ignore_dropcap() {
		echo '';
	};
	add_shortcode('dropcap', 'ignore_dropcap');
?>