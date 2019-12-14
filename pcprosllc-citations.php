<?php
/*
Plugin Name: PCProsLLC Citations For Online Business Listings
Plugin URI: https://pcprosllc.com/
Description: The PCProsLLC Citations WordPress Plugin helps you quickly find, create and manage your business citations.
Version: 1.1
Author: Derek Fenwick
Author URI: http://www.DerekFenwick.com
Text Domain: pcprosllc-citations
License: GPL2
*/
/*
* Assign Global Variable
*/
$pcpros_plugin_url = plugin_dir_url( __FILE__ );
$options = array();
/*
* Adds a link to the Admin Menu for the Plugin settings.
* This link is located at 'Settings > Local SEO'
*/
function pcpros_citations_menu() {
	global $pcpros_citations_settings_page;
	$pcpros_citations_settings_page = add_menu_page(
		'PCProsLLC Citations Dashboard',	/* Page Name */
		'PC Citations',						/* Menu Link */
		'manage_options',					/* Required User Role */
		'pcpros-citations',					/* Menu Slug */
		'pcpros_citations_options_page',		/* Function Name */ /* Next is base64 digital image of custom Icon - can use dashicons */	'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfRJREFUeNp0k01IVUEUx8/ce30fPQNb2EutTFpE5LZlC0WKWiRECyEjKYIWIbSPFq00aBHRJnBRtIs2RS1amAWCBC5cVW4EDVJfEX0oStd3+p3n3Mf4eF74MXNmzvnPmXPPuLW1dal8/yHOOQk+M3rgGOyFv/AZFkDNt7OjLHEcS7K8WpHJ99MYUS1SRQYZbqFwknFPILrO3oyqjrck8dsL589Ja6kkialFUWQUcXoMw9L8M7F+BPqdix4xv2mLSeDwFC4G9jK882M39ME+f7/OzCkTuN4Q/BBuw+9gbT/ch+MwEgqA3ggcLb3RbF9VStzShFbhqr9KXZjKaS9J9XrbNu7ViqnaDZMEf2V8AgWW/8GvsDBW+iOQ8/YXWPTzOxT4FGMr42XGK80qGwXB0nDntgbftl0EXCWwNZg/IO0//jrWRM+aCVgBP8EK8/KOVnTuA4En4CjmHPZPvxVzylZ2lGXAf3ZvmqkTtARTQfAAiy/TdKu8sbm5ow/G4BK0BPEj/tdZ/7fDEFyjiXIq+oLMBrA3Eq1WJU3TedVo2Its5xnHQ5x8Zpe2/pbVK+k4UJazp/ss3efYU5Y5D0s/zs7JCg/NXlxQ4kVOvgsTsH2FYrEgh7rqrV3/I4cPdr0q5HKIxVXMJS/+2hrJgvP5fM3vvwADAHOXoVQyJTyPAAAAAElFTkSuQmCC');

}
add_action( 'admin_menu', 'pcpros_citations_menu' );
/*
* Menu Page Content
*/
function pcpros_citations_options_page() {

	if( !current_user_can( 'manage_options' ) ) {
		wp_die( 'You do not have sufficient permissions to access this page.' );
	}

	global $pcpros_plugin_url;
	global $options;

	if( isset( $_POST['pcpros_citations_form_submitted'] ) ) {
		$hidden_field = esc_html( $_POST['pcpros_citations_form_submitted'] );
		if( $hidden_field == 'Y' ) {
			$pcpros_citations_businessname 			= esc_html( $_POST['pcpros_citations_businessname'] );
			$pcpros_citations_businessaddress1 		= esc_html( $_POST['pcpros_citations_businessaddress1'] );
			$pcpros_citations_businessaddress2 		= esc_html( $_POST['pcpros_citations_businessaddress2'] );
			$pcpros_citations_businesscity 			= esc_html( $_POST['pcpros_citations_businesscity'] );
			$pcpros_citations_businessstate 			= esc_html( $_POST['pcpros_citations_businessstate'] );
			$pcpros_citations_businesszip 			= esc_html( $_POST['pcpros_citations_businesszip'] );
			$pcpros_citations_businessphone 			= esc_html( $_POST['pcpros_citations_businessphone'] );
			$pcpros_citations_website 		= esc_html( $_POST['pcpros_citations_website'] );
			$pcpros_citations_googleemail 		= esc_html( $_POST['pcpros_citations_googleemail'] );
			$pcpros_citations_googlemybusinesscid 		= esc_html( $_POST['pcpros_citations_googlemybusinesscid'] );
			$pcpros_citations_googlemapsplaceid 		= esc_html( $_POST['pcpros_citations_googlemapsplaceid'] );
			$pcpros_citations_businesstagline 		= esc_html( $_POST['pcpros_citations_businesstagline'] );
			$pcpros_citations_businessemail1 		= esc_html( $_POST['pcpros_citations_businessemail1'] );
			$pcpros_citations_businessemail2 		= esc_html( $_POST['pcpros_citations_businessemail2'] );
			$pcpros_citations_businesscontactfullname 		= esc_html( $_POST['pcpros_citations_businesscontactfullname'] );
			$pcpros_citations_businesscontactfirstname 		= esc_html( $_POST['pcpros_citations_businesscontactfirstname'] );
			$pcpros_citations_businesscontactlastname 		= esc_html( $_POST['pcpros_citations_businesscontactlastname'] );
			$pcpros_citations_businessshortdescription 		= esc_html( $_POST['pcpros_citations_businessshortdescription'] );
			$pcpros_citations_businesslongdescription 		= esc_html( $_POST['pcpros_citations_businesslongdescription'] );
			$pcpros_citations_businesscategory1 		= esc_html( $_POST['pcpros_citations_businesscategory1'] );
			$pcpros_citations_businesscategory2 		= esc_html( $_POST['pcpros_citations_businesscategory2'] );
			$pcpros_citations_businesscategory3 		= esc_html( $_POST['pcpros_citations_businesscategory3'] );
			$pcpros_citations_businesshoursmonopen 		= esc_html( $_POST['pcpros_citations_businesshoursmonopen'] );
			$pcpros_citations_businesshoursmonclose 		= esc_html( $_POST['pcpros_citations_businesshoursmonclose'] );
			$pcpros_citations_businessmonclosed 		= esc_html( $_POST['pcpros_citations_businessmonclosed'] );
			$pcpros_citations_businesshourstueopen 		= esc_html( $_POST['pcpros_citations_businesshourstueopen'] );
			$pcpros_citations_businesshourstueclose 		= esc_html( $_POST['pcpros_citations_businesshourstueclose'] );
			$pcpros_citations_businesstueclosed 		= esc_html( $_POST['pcpros_citations_businesstueclosed'] );
			$pcpros_citations_businesshourswedopen 		= esc_html( $_POST['pcpros_citations_businesshourswedopen'] );
			$pcpros_citations_businesshourswedclose 		= esc_html( $_POST['pcpros_citations_businesshourswedclose'] );
			$pcpros_citations_businesswedclosed 		= esc_html( $_POST['pcpros_citations_businesswedclosed'] );
			$pcpros_citations_businesshoursthuopen 		= esc_html( $_POST['pcpros_citations_businesshoursthuopen'] );
			$pcpros_citations_businesshoursthuclose 		= esc_html( $_POST['pcpros_citations_businesshoursthuclose'] );
			$pcpros_citations_businessthuclosed 		= esc_html( $_POST['pcpros_citations_businessthuclosed'] );
			$pcpros_citations_businesshoursfriopen 		= esc_html( $_POST['pcpros_citations_businesshoursfriopen'] );
			$pcpros_citations_businesshoursfriclose 		= esc_html( $_POST['pcpros_citations_businesshoursfriclose'] );
			$pcpros_citations_businessfriclosed 		= esc_html( $_POST['pcpros_citations_businessfriclosed'] );
			$pcpros_citations_businesshourssatopen 		= esc_html( $_POST['pcpros_citations_businesshourssatopen'] );
			$pcpros_citations_businesshourssatclose 		= esc_html( $_POST['pcpros_citations_businesshourssatclose'] );
			$pcpros_citations_businesssatclosed 		= esc_html( $_POST['pcpros_citations_businesssatclosed'] );
			$pcpros_citations_businesshourssunopen 		= esc_html( $_POST['pcpros_citations_businesshourssunopen'] );
			$pcpros_citations_businesshourssunclose 		= esc_html( $_POST['pcpros_citations_businesshourssunclose'] );
			$pcpros_citations_businesssunclosed 		= esc_html( $_POST['pcpros_citations_businesssunclosed'] );
			$pcpros_citations_facebooklink 		= esc_html( $_POST['pcpros_citations_facebooklink'] );
			$pcpros_citations_twitterlink		= esc_html( $_POST['pcpros_citations_twitterlink'] );
			$pcpros_citations_instagramlink 		= esc_html( $_POST['pcpros_citations_instagramlink'] );
			$pcpros_citations_pinterestlink 		= esc_html( $_POST['pcpros_citations_pinterestlink'] );
			$pcpros_citations_linkedinlink 		= esc_html( $_POST['pcpros_citations_linkedinlink'] );
			$pcpros_citations_youtubechannel 		= esc_html( $_POST['pcpros_citations_youtubechannel'] );
			$pcpros_citations_tiktoklink		= esc_html( $_POST['pcpros_citations_tiktoklink'] );
			$pcpros_citations_snapchatlink 		= esc_html( $_POST['pcpros_citations_snapchatlink'] );
			$pcpros_citations_otherlink1 		= esc_html( $_POST['pcpros_citations_otherlink1'] );
			$pcpros_citations_otherlink2 		= esc_html( $_POST['pcpros_citations_otherlink2'] );
			$pcpros_citations_businesslogosquare 		= esc_html( $_POST['pcpros_citations_businesslogosquare'] );
			$pcpros_citations_businessphoto1 		= esc_html( $_POST['pcpros_citations_businessphoto1'] );
			$pcpros_citations_businessphoto2 		= esc_html( $_POST['pcpros_citations_businessphoto2'] );
			$pcpros_citations_otherinfo1 		= esc_html( $_POST['pcpros_citations_otherinfo1'] );
			$pcpros_citations_otherinfo2 		= esc_html( $_POST['pcpros_citations_otherinfo2'] );
			$pcpros_citations_datefounded 		= esc_html( $_POST['pcpros_citations_datefounded'] );
			$pcpros_citations_creditcards 		= esc_html( $_POST['pcpros_citations_creditcards'] );
			$pcpros_citations_parking 		= esc_html( $_POST['pcpros_citations_parking'] );
			$pcpros_citations_wifi 		= esc_html( $_POST['pcpros_citations_wifi'] );
			$pcpros_citations_apptlink 		= esc_html( $_POST['pcpros_citations_apptlink'] );

			$options['pcpros_citations_businessname']			= $pcpros_citations_businessname;
			$options['pcpros_citations_businessaddress1']		= $pcpros_citations_businessaddress1;
			$options['pcpros_citations_businessaddress2']		= $pcpros_citations_businessaddress2;
			$options['pcpros_citations_businesscity']			= $pcpros_citations_businesscity;
			$options['pcpros_citations_businessstate']		= $pcpros_citations_businessstate;
			$options['pcpros_citations_businesszip']			= $pcpros_citations_businesszip;
			$options['pcpros_citations_businessphone']		= $pcpros_citations_businessphone;
			$options['pcpros_citations_website']		= $pcpros_citations_website;
			$options['pcpros_citations_googleemail']	= $pcpros_citations_googleemail;
			$options['pcpros_citations_googlemybusinesscid']	= $pcpros_citations_googlemybusinesscid;
			$options['pcpros_citations_googlemapsplaceid']	= $pcpros_citations_googlemapsplaceid;
			$options['pcpros_citations_businesstagline']	= $pcpros_citations_businesstagline;
			$options['pcpros_citations_businessemail1']	= $pcpros_citations_businessemail1;
			$options['pcpros_citations_businessemail2']	= $pcpros_citations_businessemail2;
			$options['pcpros_citations_businesscontactfullname']	= $pcpros_citations_businesscontactfullname;
			$options['pcpros_citations_businesscontactlastname']	= $pcpros_citations_businesscontactlastname;
			$options['pcpros_citations_businessshortdescription']	= $pcpros_citations_businessshortdescription;
			$options['pcpros_citations_businesslongdescription']	= $pcpros_citations_businesslongdescription;
			$options['pcpros_citations_businesscategory1']	= $pcpros_citations_businesscategory1;
			$options['pcpros_citations_businesscategory2']	= $pcpros_citations_businesscategory2;
			$options['pcpros_citations_businesscategory3']	= $pcpros_citations_businesscategory3;
			$options['pcpros_citations_businesshoursmonopen']	= $pcpros_citations_businesshoursmonopen;
			$options['pcpros_citations_businesshoursmonclose']	= $pcpros_citations_businesshoursmonclose;
			$options['pcpros_citations_businessmonclosed']	= $pcpros_citations_businessmonclosed;
			$options['pcpros_citations_businesshourstueopen']	= $pcpros_citations_businesshourstueopen;
			$options['pcpros_citations_businesshourstueclose']	= $pcpros_citations_businesshourstueclose;
			$options['pcpros_citations_businesstueclosed']	= $pcpros_citations_businesstueclosed;
			$options['pcpros_citations_businesshourswedopen']	= $pcpros_citations_businesshourswedopen;
			$options['pcpros_citations_businesshourswedclose']	= $pcpros_citations_businesshourswedclose;
			$options['pcpros_citations_businesswedclosed']	= $pcpros_citations_businesswedclosed;
			$options['pcpros_citations_businesshoursthuopen']	= $pcpros_citations_businesshoursthuopen;
			$options['pcpros_citations_businesshoursthuclose']	= $pcpros_citations_businesshoursthuclose;
			$options['pcpros_citations_businessthuclosed']	= $pcpros_citations_businessthuclosed;
			$options['pcpros_citations_businesshoursfriopen']	= $pcpros_citations_businesshoursfriopen;
			$options['pcpros_citations_businesshoursfriclose']	= $pcpros_citations_businesshoursfriclose;
			$options['pcpros_citations_businessfriclosed']	= $pcpros_citations_businessfriclosed;
			$options['pcpros_citations_businesshourssatopen']	= $pcpros_citations_businesshourssatopen;
			$options['pcpros_citations_businesshourssatclose']	= $pcpros_citations_businesshourssatclose;
			$options['pcpros_citations_businesssatclosed']	= $pcpros_citations_businesssatclosed;
			$options['pcpros_citations_businesshourssunopen']	= $pcpros_citations_businesshourssunopen;
			$options['pcpros_citations_businesshourssunclose']	= $pcpros_citations_businesshourssunclose;
			$options['pcpros_citations_businesssunclosed']	= $pcpros_citations_businesssunclosed;
			$options['pcpros_citations_facebooklink']	= $pcpros_citations_facebooklink;
			$options['pcpros_citations_twitterlink']	= $pcpros_citations_twitterlink;
			$options['pcpros_citations_instagramlink']	= $pcpros_citations_instagramlink;
			$options['pcpros_citations_pinterestlink']	= $pcpros_citations_pinterestlink;
			$options['pcpros_citations_linkedinlink']	= $pcpros_citations_linkedinlink;
			$options['pcpros_citations_snapchatlink']	= $pcpros_citations_snapchatlink;
			$options['pcpros_citations_tiktoklink']	= $pcpros_citations_tiktoklink;
			$options['pcpros_citations_youtubechannel']		= $pcpros_citations_youtubechannel;
			$options['pcpros_citations_otherlink1']	= $pcpros_citations_otherlink1;
			$options['pcpros_citations_otherlink2']	= $pcpros_citations_otherlink2;
			$options['pcpros_citations_businesslogosquare']	= $pcpros_citations_businesslogosquare;
			$options['pcpros_citations_businesslogorecatngle']	= $pcpros_citations_businesslogorecatngle;
			$options['pcpros_citations_businessphoto1']	= $pcpros_citations_businessphoto1;
			$options['pcpros_citations_businessphoto2']	= $pcpros_citations_businessphoto2;
			$options['pcpros_citations_otherinfo1']	= $pcpros_citations_otherinfo1;
			$options['pcpros_citations_otherinfo2']	= $pcpros_citations_otherinfo2;
			$options['pcpros_citations_datefounded']	= $pcpros_citations_datefounded;
			$options['pcpros_citations_creditcards']	= $pcpros_citations_creditcards;
			$options['pcpros_citations_parking']	= $pcpros_citations_parking;
			$options['pcpros_citations_wifi']	= $pcpros_citations_wifi;
			$options['pcpros_citations_apptlink']	= $pcpros_citations_apptlink;
			$options['last_updated']				= time();

			update_option( 'pcpros_citations_options', $options );
		}
	}

	$options = get_option( 'pcpros_citations_options' );
	if( $options != '' ) {

		$pcpros_citations_businessname = $options['pcpros_citations_businessname'];
		$pcpros_citations_businessaddress1 = $options['pcpros_citations_businessaddress1'];
		$pcpros_citations_businessaddress2 = $options['pcpros_citations_businessaddress2'];
		$pcpros_citations_businesscity = $options['pcpros_citations_businesscity'];
		$pcpros_citations_businessstate = $options['pcpros_citations_businessstate'];
		$pcpros_citations_businesszip = $options['pcpros_citations_businesszip'];
		$pcpros_citations_businessphone = $options['pcpros_citations_businessphone'];
		$pcpros_citations_website = $options['pcpros_citations_website'];
		$pcpros_citations_googleemail = $options['pcpros_citations_googleemail'];
		$pcpros_citations_googlemybusinesscid = $options['pcpros_citations_googlemybusinesscid'];
		$pcpros_citations_googlemapsplaceid = $options['pcpros_citations_googlemapsplaceid'];
		$pcpros_citations_businesstagline = $options['pcpros_citations_businesstagline'];
		$pcpros_citations_businessemail1 = $options['pcpros_citations_businessemail1'];
		$pcpros_citations_businessemail2 = $options['pcpros_citations_businessemail2'];
		$pcpros_citations_businesscontactfullname = $options['pcpros_citations_businesscontactfullname'];
		$pcpros_citations_businesscontactfirstname = $options['pcpros_citations_businesscontactfirstname'];
		$pcpros_citations_businesscontactlastname = $options['pcpros_citations_businesscontactlastname'];
		$pcpros_citations_businessshortdescription = $options['pcpros_citations_businessshortdescription'];
		$pcpros_citations_businesslongdescription = $options['pcpros_citations_businesslongdescription'];
		$pcpros_citations_businesscategory1 = $options['pcpros_citations_businesscategory1'];
		$pcpros_citations_businesscategory2 = $options['pcpros_citations_businesscategory2'];
		$pcpros_citations_businesscategory3 = $options['pcpros_citations_businesscategory3'];
		$pcpros_citations_businesshoursmonopen = $options['pcpros_citations_businesshoursmonopen'];
		$pcpros_citations_businesshoursmonclose = $options['pcpros_citations_businesshoursmonclose'];
		$pcpros_citations_businessmonclosed = $options['pcpros_citations_businessmonclosed'];
		$pcpros_citations_businesshourstueopen = $options['pcpros_citations_businesshourstueopen'];
		$pcpros_citations_businesshourstueclose = $options['pcpros_citations_businesshourstueclose'];
		$pcpros_citations_businesstueclosed = $options['pcpros_citations_businesstueclosed'];
		$pcpros_citations_businesshourswedopen = $options['pcpros_citations_businesshourswedopen'];
		$pcpros_citations_businesshourswedclose = $options['pcpros_citations_businesshourswedclose'];
		$pcpros_citations_businesswedclosed = $options['pcpros_citations_businesswedclosed'];
		$pcpros_citations_businesshoursthuopen = $options['pcpros_citations_businesshoursthuopen'];
		$pcpros_citations_businesshoursthuclose = $options['pcpros_citations_businesshoursthuclose'];
		$pcpros_citations_businessthuclosed = $options['pcpros_citations_businessthuclosed'];
		$pcpros_citations_businesshoursfriopen = $options['pcpros_citations_businesshoursfriopen'];
		$pcpros_citations_businesshoursfriclose = $options['pcpros_citations_businesshoursfriclose'];
		$pcpros_citations_businessfriclosed = $options['pcpros_citations_businessfriclosed'];
		$pcpros_citations_businesshourssatopen = $options['pcpros_citations_businesshourssatopen'];
		$pcpros_citations_businesshourssatclose = $options['pcpros_citations_businesshourssatclose'];
		$pcpros_citations_businesssatclosed = $options['pcpros_citations_businesssatclosed'];
		$pcpros_citations_businesshourssunopen = $options['pcpros_citations_businesshourssunopen'];
		$pcpros_citations_businesshourssunclose = $options['pcpros_citations_businesshourssunclose'];
		$pcpros_citations_businesssunclosed = $options['pcpros_citations_businesssunclosed'];
		$pcpros_citations_facebooklink = $options['pcpros_citations_facebooklink'];
		$pcpros_citations_twitterlink= $options['pcpros_citations_twitterlink'];
		$pcpros_citations_pinterestlink = $options['pcpros_citations_linkedinlink'];
		$pcpros_citations_instagramlink = $options['pcpros_citations_instagramlink'];
		$pcpros_citations_pinterestlink = $options['pcpros_citations_pinterestlink'];
		$pcpros_citations_linkedinlink = $options['pcpros_citations_linkedinlink'];
		$pcpros_citations_youtubechannel = $options['pcpros_citations_youtubechannel'];
		$pcpros_citations_tiktoklink = $options['pcpros_citations_tiktoklink'];
		$pcpros_citations_snapchatlink = $options['pcpros_citations_snapchatlink'];
		$pcpros_citations_otherlink1 = $options['pcpros_citations_otherlink1'];
		$pcpros_citations_otherlink2 = $options['pcpros_citations_otherlink2'];
		$pcpros_citations_businesslogosquare = $options['pcpros_citations_businesslogosquare'];
		$pcpros_citations_businesslogorecatngle= $options['pcpros_citations_businesslogorecatngle'];
		$pcpros_citations_businessphoto1 = $options['pcpros_citations_businessphoto1'];
		$pcpros_citations_businessphoto2 = $options['pcpros_citations_businessphoto2'];
		$pcpros_citations_otherinfo1 = $options['pcpros_citations_otherinfo1'];
		$pcpros_citations_otherinfo2 = $options['pcpros_citations_otherinfo2'];
		$pcpros_citations_datefounded = $options['pcpros_citations_datefounded'];
		$pcpros_citations_creditcards = $options['pcpros_citations_creditcards'];
		$pcpros_citations_parking = $options['pcpros_citations_parking'];
		$pcpros_citations_wifi = $options['pcpros_citations_wifi'];
		$pcpros_citations_apptlink = $options['pcpros_citations_apptlink'];
	}

	require( 'inc/options-page-wrapper.php' );

}

function pcpros_citations_styles() {
	$pcpros_plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'pcpros_citations_styles', $pcpros_plugin_url . 'css/pcpros-citations.css' );
}
add_action( 'admin_head', 'pcpros_citations_styles' );


function pcpros_citations_bootstrap_styles($hook) {
	global $pcpros_citations_settings_page;
	$pcpros_plugin_url = plugin_dir_url( __FILE__ );
      if   ( $hook == $pcpros_citations_settings_page ) {
          wp_enqueue_style( 'pcpros_citations_bootstrap_styles', $pcpros_plugin_url . 'css/bootstrap.min.css');
		  wp_enqueue_script( 'pcpros_citations_bootstrap_script', $pcpros_plugin_url . 'js/bootstrap.min.js');
      }
}
add_action('admin_enqueue_scripts', 'pcpros_citations_bootstrap_styles');

/*
Version History
1.2 - Updated 20191214 - Source Control Added
1.1 - Updated 20191213 - Main Features Created for Saving Fields
1.0 - Created 20191208 - Created

*/

?>
