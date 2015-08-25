<?php
 
if ( is_admin() ) {
 
    $config = array(
        'slug'                  => plugin_basename( __FILE__ ),
        'proper_folder_name'    => 'github-wp-plugin-updater-starter',
        'api_url'               => 'https://api.github.com/repos/crossreftech/github-wp-plugin-updater-starter',
        'raw_url'               => 'https://raw.github.com/crossreftech/github-wp-plugin-updater-starter',
        'github_url'            => 'https://github.com/crossreftech/github-wp-plugin-updater-starter/',
        'zip_url'               => 'https://github.com/crossreftech/github-wp-plugin-updater-starter/zipball/master',
        'sslverify'             => true,
        'requires'              => '3.0',
        'tested'                => '4.3',
        'readme'                => 'README.md',
        'access_token'          => ''
    );
 
    new WP_GitHub_Updater( $config );
 
}
 
?>
