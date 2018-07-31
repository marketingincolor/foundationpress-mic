<?php 
	// Alter User Contact Methods to include other social media services
	function modify_user_contact_methods( $user_contact ) {
		$user_contact['twitter'] = __( 'Twitter URL' );
		$user_contact['facebook']   = __( 'Facebook URL' );
		$user_contact['gplus'] = __( 'Google+ URL' );
		$user_contact['linkedin']   = __( 'LinkedIn URL' );
		unset( $user_contact['aim'] );
		unset( $user_contact['yim'] );
		unset( $user_contact['jabber'] );
		unset( $user_contact['googleplus'] );
		return $user_contact;
	}
	add_filter( 'user_contactmethods', 'modify_user_contact_methods' );

	// get_id_by_slug('any-page-slug','any-post-type');
	function get_id_by_slug($page_slug, $slug_page_type = 'page') {
		$find_page = get_page_by_path($page_slug, OBJECT, $slug_page_type);
		if ($find_page) {
			return $find_page->ID;
		} else {
			return null;
		}
	}
?>