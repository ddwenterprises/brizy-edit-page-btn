// Edit Page Button - Brizy
function edit_page_link() {

	// Check if user can edit Brizy pages and the Brizy plugin is active
	if (current_user_can('brizy_edit_whole_page') && is_plugin_active('brizy/brizy.php')){

		// Button Styling
		$style = '<style>a.edit-page-link {color: #fff;text-align: center;text-decoration: none;display: block;font-weight: bold;background-color: #00000077;max-width: 105px;width: auto;margin: 0 auto;padding: 8px 12px;position: fixed;top: 0;right: 0;z-index:9999;}</style>';
		$theURL = $_SERVER['QUERY_STRING'];

		// If inside editor show the close button
		if($theURL == 'brizy-edit-iframe'){
			echo $style.'<a class="edit-page-link" href="." target="_top" style="pointer-events:all;">X</a>';
			return;
		}

		// Else show the edit button
		echo $style.'<a class="edit-page-link" href="?brizy-edit">Edit</a>';
	}
}
add_action('wp_footer', 'edit_page_link');