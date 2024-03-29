<script type="text/javascript">
function pcpros_select_all(elem)
{
var text_val = document.getElementById(elem.id);
text_val.focus(); // Focus on textarea
text_val.select();// Select all text
document.execCommand("Copy");
//document.getElementById('my_msg').innerHTML=" Text Copied.. <br>Paste by usnig Ctrl + V at right > textarea";
//document.getElementById('pcpros_citations_otherinfo2').focus();
}
</script>

<div class="pcpros-options">

<h2>PCProsLLC Citations Dashboard</h2>

	<div class="pcpros-bootstrap-tabs">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
		<li role="presentation" ><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Business Information</a></li>
		<li role="presentation" ><a href="#citation-tracker" aria-controls="citation-tracker" role="tab" data-toggle="tab">Citation Tracker</a></li>
		<li role="presentation"><a href="#business-listings" aria-controls="business-listings" role="tab" data-toggle="tab">Business Listings Scan</a></li>
		<li role="presentation"><a href="#how-to-videos" aria-controls="how-to-videos" role="tab" data-toggle="tab">How To Videos</a></li>
		<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact Us</a></li>
		<li role="presentation"><a href="#faq" aria-controls="faq" role="tab" data-toggle="tab">FAQ</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="description">

			<div class="row">
			  <div class="col-md-6">

			        <h3>Description</h3>

					<p class="upgrade-p">The PCProsLLC Citations WordPress Plugin helps you quickly find, create and manage your business citations.</p>
					<p class="upgrade-p">We built this plugin to help our customers actually create citations for their business. We realize there is manually effort involved but even doing just a few a week will get your business higher ranking in serahc engines. There are a few great paid services that you should consider using if you do not want to create and manage these citations your self.</p>
					<p class="upgrade-p"><strong>Instructions</strong></p>
					<ol>
					<li>Install and activate the PCProsLLC.com PC Citations WordPress Plugin.</li>
					<li>Click on the Business Information Tab and enter as much information as you have and save.</li>
					<li>Click on the Citation Tracker tab and see the list of recommended Citation websites.</li>
					</ol>
					<p class="upgrade-p"><strong>Additional Available PCProsLLC Tools and Recommendations</strong></p>
					<ol>
					<li>Webhosting - The best webhosting for 2020 and beyond.</li>
					<li>PCProsLLC - Revenue Pro Plugin - Internet Marketing Evergreen & CSS Updates  to HappyThemes.com Revenue Theme.</li>
					<li>PCProsLLC - Link Cloaker Plugin.</li>
					<li>PCProsLLC - Side Button Plugin. A plugin that creates a side bar button in the middle of your website on the left or right side of the screen that sticks to the screen. You control the settings for the button, color, text, and link. This helps your highlight you current offers or bring attantion to the user on whatever you want them to notice without annoying popups.</li>
					<li>Alexa Skill Dashboard - Easily create your own daily flash briefing, user intent skill or rss feed skill easily with no coding experience needed.</li>
					<li>Perfect 5 Star Business Review Software as a Service. Add 1 line of code to your website and your reviews will be streamed or pop up on your site. You receive a client login to review and manage all your listings and options. Amazing PC Review Super Links makes it easy for your customers to click a link and enter reviews. </li>
					</ol>
					<p class="upgrade-p">There are literally so many tools and features available as a partner and/or customer of PCProsLLC as we have created many tools you can use for a lifetime on your website. We also have unlimited lifetime updates the best themes, plugins, and software as a service applications. </p>
					<p class="upgrade-p"><strong>Website Design</strong></p>
					<p class="upgrade-p">With one click you can run a Local Business Listings Report to see where you have missing or incorrect citations (business listings) across all the major local business aggregation websites like Yelp, YP.com, Facebook, Bing Local, Google My Business and more.</p>
					<p class="upgrade-p"><strong>Internet Marketing</strong></p>
					<p class="upgrade-p">Internet Marketing Website, Tools, Courses, and Free Resources at <a href="https://InternetMarketingPC.com">InternetMarketingPC.com</a></p>
					<p class="upgrade-p"><i>There are several Premium options available in the Professional Version of this plugin. For reasons to upgrade learn more at <a href="https://www.pcprosllc.com/" rel="nofollow">PCProsLLC.com</a></i></p>
					<p class="upgrade-p"><strong>Tags:</strong> <a href="https://wordpress.org/plugins/tags/analytics">analytics</a>, <a href="https://wordpress.org/plugins/tags/business-listings">business listings</a>, <a href="https://wordpress.org/plugins/tags/ecommerce">ecommerce</a>, <a href="https://wordpress.org/plugins/tags/keyword-research">keyword research</a>, <a href="https://wordpress.org/plugins/tags/local-seo">local seo</a>, <a href="https://wordpress.org/plugins/tags/rank-tracking">rank tracking</a>, <a href="https://wordpress.org/plugins/tags/search-engine-optimization">search engine optimization</a>, <a href="https://wordpress.org/plugins/tags/seo">seo</a>, <a href="https://wordpress.org/plugins/tags/social-media">social media</a>, <a href="https://wordpress.org/plugins/tags/keyword-research">SEO tools</a>, <a href="https://wordpress.org/plugins/tags/keyword-research">SEO audit</a>, <a href="https://wordpress.org/plugins/tags/keyword-research">SEO checker</a></p>

			  </div><!-- .col-md-6 -->
			    <div class="col-md-6">
			  	<h3 class="reporting-h3">PC Pros LLC</h3>

				<div class="create-acct-btn">
					<a class="btn btn-success social-media-account-btn" href="https:/pcprosllc.com" target="_blank">Get Plugins</a>
				</div><!-- .create-acct-btn -->
			  	<h3 class="reporting-h3">PC Pros LLC</h3>

				<div class="create-acct-btn">
					<a class="btn btn-success social-media-account-btn" href="https:/pcprosllc.com" target="_blank">Get Plugins</a>
				</div><!-- .create-acct-btn -->

				</div><!-- .col-md-6 -->
			</div><!-- .row -->

			</div><!-- #Description -->
			<div role="tabpanel" class="tab-pane" id="info">

			<div class="row">
			  <div class="col-md-6">

			  <?php if( !isset( $pcpros_citations_businessname ) || $pcpros_citations_businessname == '' ): ?>

				<h3>Please Enter Your Business Information Below.</h3>
				<p class="upgrade-p"><strong>Enter A Name And Click Save For Additional Fields.</strong></p>

					<form name="pcpros_citations_website_form" id="scan-form" class="diagnostic-scan" method="post">

					<input type="hidden" name="pcpros_citations_form_submitted" value="Y">

						<table class="form-table">
							<tr valign="top">
								<td><label for="pcpros_citations_businessname">Business Name *</label>
								<br /><input name="pcpros_citations_businessname" id="pcpros_citations_businessname" type="text" class="form-control" value="" class="regular-text" placeholder="Business Name" /></td>
								<td><label for="pcpros_citations_businessphone">Business Phone Number</label>
								<br /><input name="pcpros_citations_businessphone" id="pcpros_citations_businessphone" type="text" class="form-control" value="" class="regular-text"  placeholder="(555) 555-1234" /></td>
							</tr>

							<tr valign="top">
							<td><label for="pcpros_citations_businessaddress1">Business Address Line 1</label>
								<br /><input name="pcpros_citations_businessaddress1" id="pcpros_citations_businessaddress1" type="text" class="form-control" value="" class="regular-text"  placeholder="" /></td>
								<td><label for="pcpros_citations_businessaddress2">Business Address Line 2</label>
								<br /><input name="pcpros_citations_businessaddress2" id="pcpros_citations_businessaddress2" type="text" value="" class="regular-text"  placeholder="" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscity">City / Town</label>
								<br /><input name="pcpros_citations_businesscity" id="pcpros_citations_businesscity" type="text" value="" class="regular-text"  placeholder="" /></td>
								<td><label for="pcpros_citations_businessstate">State / County / Region</label>
								<br /><input name="pcpros_citations_businessstate" id="pcpros_citations_businessstate" type="text" value="" class="regular-text"  placeholder="" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businesszip">Zipcode / Postcode</label>
								<br /><input name="pcpros_citations_businesszip" id="pcpros_citations_businesszip" type="text" value="" class="regular-text"  placeholder="" /></td>
								<td><label for="pcpros_citations_businesscountry">Country</label>
								<br /><input name="pcpros_citations_businesscountry" id="pcpros_citations_businesscountry" type="text" value="" class="regular-text"  placeholder="" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businesslogorectanglelink">Logo URL</label>
								<br /><input name="pcpros_citations_businesslogorectanglelink" id="pcpros_citations_businesslogorectanglelink" type="text" value="" class="regular-text"  placeholder="" /></td>
								<td><label for="pcpros_citations_website">Website URL</label>
								<br /><input name="pcpros_citations_website" id="pcpros_citations_website" type="text" value="" class="regular-text"  placeholder="https://www.pcprosllc.com" /></td>
							</tr>

							<tr valign="top">
								<td><input class="btn btn-primary" type="submit" id="scan-submit" name="pcpros_citations_website_submit" value="Save" /></td>
							</tr>

						</table>



				<?php else: ?>

				<h3>Business Information</h3>

					<form name="pcpros_citations_website_form" method="post" action="">

					<input type="hidden" name="pcpros_citations_form_submitted" value="Y">

						<table class="form-table">
							<tr valign="top">
								<td><label for="pcpros_citations_businessname">Business Name *</label>
								<br /><input name="pcpros_citations_businessname" id="pcpros_citations_businessname" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessname; ?>" /></td>
								<td><label for="pcpros_citations_businessphone">Business Phone Number</label>
								<br /><input name="pcpros_citations_businessphone" id="pcpros_citations_businessphone" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessphone; ?>" /></td>
							</tr>

							<tr valign="top">
							<td><label for="pcpros_citations_businessaddress1">Business Address Line 1</label>
								<br /><input name="pcpros_citations_businessaddress1" id="pcpros_citations_businessaddress1" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessaddress1; ?>" /></td>
								<td><label for="pcpros_citations_businessaddress2">Business Address Line 2</label>
								<br /><input name="pcpros_citations_businessaddress2" id="pcpros_citations_businessaddress2" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessaddress2; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscity">City / Town</label>
								<br /><input name="pcpros_citations_businesscity" id="pcpros_citations_businesscity" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesscity; ?>" /></td>
								<td><label for="pcpros_citations_businessstate">State / County / Region</label>
								<br /><input name="pcpros_citations_businessstate" id="pcpros_citations_businessstate" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessstate; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businesszip">Zipcode / Postcode</label>
								<br /><input name="pcpros_citations_businesszip" id="pcpros_citations_businesszip" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesszip; ?>" /></td>
								<td><label for="pcpros_citations_businesscountry">Country</label>
								<br /><input name="pcpros_citations_businesscountry" id="pcpros_citations_businesscountry" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesscountry; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businesslogorectanglelink">Logo URL</label>
								<br /><input name="pcpros_citations_businesslogorectanglelink" id="pcpros_citations_businesslogorectanglelink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesslogorectanglelink; ?>" /></td>
								<td><label for="pcpros_citations_website">Website URL</label>
								<br /><input name="pcpros_citations_website" id="pcpros_citations_website" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_website; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businesscontactfirstname">Contact First Name</label>
								<br /><input name="pcpros_citations_businesscontactfirstname" id="pcpros_citations_businesscontactfirstname" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesscontactfirstname; ?>" /></td>
								<td><label for="pcpros_citations_businesscontactlastname">Contact Last Name</label>
								<br /><input name="pcpros_citations_businesscontactlastname" id="pcpros_citations_businesscontactlastname" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesscontactlastname; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businessemail1">Contact Email</label>
								<br /><input name="pcpros_citations_businessemail1" id="pcpros_citations_businessemail1" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessemail1; ?>" /></td>
								<td><label for="pcpros_citations_businessmobile">Contact Mobile</label>
								<br /><input name="pcpros_citations_businessmobile" id="pcpros_citations_businessmobile" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessmobile; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businessemail2">Citation Email</label>
								<br /><input name="pcpros_citations_businessemail2" id="pcpros_citations_businessemail2" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessemail2; ?>" /></td>
								<td><label for="pcpros_citations_businessfax">Business Fax</label>
								<br /><input name="pcpros_citations_businessfax" id="pcpros_citations_businessfax" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessfax; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_businessnumemployees">Business Number of Employees</label>
								<br /><input name="pcpros_citations_businessnumemployees" id="pcpros_citations_businessnumemployees" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businessnumemployees; ?>" /></td>
								<td><label for="pcpros_citations_datefounded">Date Founded</label>
								<br /><input name="pcpros_citations_datefounded" id="pcpros_citations_datefounded" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_datefounded; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_apptlink">Appointment Link</label>
								<br /><input name="pcpros_citations_apptlink" id="pcpros_citations_apptlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_apptlink; ?>" /></td>
								<td><label for="pcpros_citations_businesslicensenum">Business License Number</label>
								<br /><input name="pcpros_citations_businesslicensenum" id="pcpros_citations_businesslicensenum" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_businesslicensenum; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><input class="btn btn-primary" type="submit" id="scan-submit" name="pcpros_citations_website_submit" value="Save" /></td>
							</tr>

						</table>

						<h3>Social Media Accounts</h3>

						<table class="form-table">
							<tr valign="top">
								<td><label for="pcpros_citations_facebooklink">Facebook</label>
								<br /><input name="pcpros_citations_facebooklink" id="pcpros_citations_facebooklink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_facebooklink; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_twitterlink">Twitter</label>
								<br /><input name="pcpros_citations_twitterlink" id="pcpros_citations_twitterlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_twitterlink; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_youtubechannel">YouTube</label>
								<br /><input name="pcpros_citations_youtubechannel" id="pcpros_citations_youtubechannel" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_youtubechannel; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_linkedinlink">LinkedIn</label>
								<br /><input name="pcpros_citations_linkedinlink" id="pcpros_citations_linkedinlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_linkedinlink; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_instagramlink">Instagram</label>
								<br /><input name="pcpros_citations_instagramlink" id="pcpros_citations_instagramlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_instagramlink; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_pinterestlink">Pinterest</label>
								<br /><input name="pcpros_citations_pinterestlink" id="pcpros_citations_pinterestlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_pinterestlink; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_tiktoklink">TikTok</label>
								<br /><input name="pcpros_citations_tiktoklink" id="pcpros_citations_tiktoklink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_tiktoklink; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_snapchatlink">Snapchat</label>
								<br /><input name="pcpros_citations_snapchatlink" id="pcpros_citations_snapchatlink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_snapchatlink; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_otherlink1">Other Link 1</label>
								<br /><input name="pcpros_citations_otherlink1" id="pcpros_citations_otherlink1" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_otherlink1; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_otherlink2">Other Link 2</label>
								<br /><input name="pcpros_citations_otherlink2" id="pcpros_citations_otherlink2" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_otherlink2; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_otherinfo1">Other Information 1</label>
								<br /><textarea name="pcpros_citations_otherinfo1" class="form-control" rows="6" id="pcpros_citations_otherinfo1" onClick="pcpros_select_all(this);"  type="text"> <?php echo $pcpros_citations_otherinfo1; ?></textarea></td>
								<td></td>
								<td><label for="pcpros_citations_otherinfo2">Other Information 2</label>
								<br /><textarea name="pcpros_citations_otherinfo2" class="form-control" rows="6" id="pcpros_citations_otherinfo2" onClick="pcpros_select_all(this);" type="text" > <?php echo $pcpros_citations_otherinfo2; ?></textarea></td>
							</tr>
							<tr valign="top">
								<td><input class="btn btn-primary" type="submit" id="scan-submit" name="pcpros_citations_website_submit" value="Save" /></td>
							</tr>
						</table>

				<p><b><i>Note: All fields will be updated with any Save button click.</i></b></p>

				</div><!-- .col-md-6 -->

				<div class="col-md-6">

				<h3> <br /></h3>

						<table class="form-table">

							<tr valign="top">
								<td><label for="pcpros_citations_businessshortdescription">Business Short Description</label>
								<br /><textarea name="pcpros_citations_businessshortdescription" class="form-control" rows="5" id="pcpros_citations_businessshortdescription" onClick="pcpros_select_all(this);" type="text" > <?php echo $pcpros_citations_businessshortdescription; ?></textarea></td>
								<td></td>
								<td><label for="pcpros_citations_businesslongdescription">Business Long Description</label>
								<br /><textarea name="pcpros_citations_businesslongdescription" class="form-control" rows="5" id="pcpros_citations_businesslongdescription" onClick="pcpros_select_all(this);" type="text" > <?php echo $pcpros_citations_businesslongdescription; ?></textarea></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscategory1">Business Category 1</label>
								<br /><input name="pcpros_citations_businesscategory1" id="pcpros_citations_businesscategory1" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businesscategory1; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_businessservice1">Business Service / Product 1</label>
								<br /><input name="pcpros_citations_businessservice1" id="pcpros_citations_businessservice1" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessservice1; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscategory2">Business Category 2</label>
								<br /><input name="pcpros_citations_businesscategory2" id="pcpros_citations_businesscategory2" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businesscategory2; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_businessservice2">Business Service / Product 2</label>
								<br /><input name="pcpros_citations_businessservice2" id="pcpros_citations_businessservice2" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessservice2; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscategory3">Business Category 3</label>
								<br /><input name="pcpros_citations_businesscategory3" id="pcpros_citations_businesscategory3" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businesscategory3; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_businessservice3">Business Service / Product 3</label>
								<br /><input name="pcpros_citations_businessservice3" id="pcpros_citations_businessservice3" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessservice3; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscategory4">Business Category 4</label>
								<br /><input name="pcpros_citations_businesscategory4" id="pcpros_citations_businesscategory4" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businesscategory4; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_businessservice4">Business Service / Product 4</label>
								<br /><input name="pcpros_citations_businessservice4" id="pcpros_citations_businessservice4" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessservice4; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businesscategory5">Business Category 5</label>
								<br /><input name="pcpros_citations_businesscategory5" id="pcpros_citations_businesscategory5" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businesscategory5; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_businessservice5">Business Service / Product 5</label>
								<br /><input name="pcpros_citations_businessservice5" id="pcpros_citations_businessservice5" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessservice5; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><label for="pcpros_citations_businessgoogleanalytics">Google Analytics ID</label>
								<br /><input name="pcpros_citations_businessgoogleanalytics" id="pcpros_citations_businessgoogleanalytics" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_businessgoogleanalytics; ?>" /></td>
								<td></td>
								<td><label for="pcpros_citations_googleemail">Google User Account</label>
								<br /><input name="pcpros_citations_googleemail" id="pcpros_citations_googleemail" onClick="pcpros_select_all(this);" type="text" value="<?php echo $pcpros_citations_googleemail; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="pcpros_citations_facebooklink">Facebook Pixel ID</label>
								<br /><input name="pcpros_citations_facebooklink" id="pcpros_citations_facebooklink" type="text" onClick="pcpros_select_all(this);" value="<?php echo $pcpros_citations_facebooklink; ?>" /></td>
								<td></td>
								<td><label for="$pcpros_citations_businesssphotourl1">Photo 1 URL</label>
								<br /><input name="$pcpros_citations_businesssphotourl1" id="$pcpros_citations_businesssphotourl1" type="text" onClick="pcpros_select_all(this);" value="<?php echo $$pcpros_citations_businesssphotourl1; ?>" /></td>
							</tr>
							<tr valign="top">
								<td><label for="$pcpros_citations_businesssphotourl2">Photo 2 URL</label>
								<br /><input name="$pcpros_citations_businesssphotourl2" id="$pcpros_citations_businesssphotourl2" type="text" onClick="pcpros_select_all(this);" value="<?php echo $$pcpros_citations_businesssphotourl2; ?>" /></td>
								<td></td>
								<td><label for="$pcpros_citations_businesssphotourl3">Photo 3 URL</label>
								<br /><input name="$pcpros_citations_businesssphotourl3" id="$pcpros_citations_businesssphotourl3" type="text" onClick="pcpros_select_all(this);" value="<?php echo $$pcpros_citations_businesssphotourl3; ?>" /></td>
							</tr>

							<tr valign="top">
								<td><input class="btn btn-primary" type="submit" id="scan-submit" name="pcpros_citations_website_submit" value="Save" /></td>
							</tr>
						</table>

					</form>

				<?php endif; ?>

				<?php if( isset( $pcpros_citations_businessname ) && $pcpros_citations_businessname !== '' ){ ?>

				<h3 class="reporting-h3">Your Business Listing on Google Maps</h3>

				<div class="google-maps-div">
				<iframe width="100%" height="500px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo str_replace(" ","%20","$pcpros_citations_businessname"); ?>%2C<?php echo str_replace(" ","%20","$pcpros_citations_businessaddress1"); ?>%2C%20<?php echo "$pcpros_citations_businesscity"; ?>%2C%20<?php echo "$pcpros_citations_businessstate"; ?>%2C%20United%20States&key=AIzaSyDiQIl2qN62tn1zPDjhPn32NuU8KYbDjhg" allowfullscreen></iframe>
				</div>

				<p class="text-align-center">If your business does not show up on the map or shows up incorrectly,<br />it means your business is not listed correctly with Google.</p>


				<?php } ?>

				</div><!-- .col-md-6 -->

			</div><!-- .row -->

			<hr />

			</div><!-- #info -->

			<div role="tabpanel" class="tab-pane" id="citation-tracker">

				<h3>Local SEO Tools and Reporting</h3>

					<div class="pcpros-operations-div">
						<iframe name="pcpros-operations-iframe" src="https://www.pcprosllc.com"></iframe>
					</div>

			</div><!-- #citation-tracker -->

			<div role="tabpanel" class="tab-pane" id="business-listings">

				<h3>Scan Business Listings</h3>

					<p class="upgrade-p"><strong>Please Note:</strong>  You will be redrected to some Third Party Business Listing Scanners. We are only linking to and not endorsing these providers. If you find their data useful please purchase their products and  services.</p>

				<div class="row">

				<div class="col-md-6">

				<h3 class="reporting-h3">Moz Local Scan</h3>

				<div class="create-acct-btn">
					<a class="btn btn-success social-media-account-btn" href="https://moz.com/checkout/local/check" target="_blank">Moz Local</a>
				</div><!-- .create-acct-btn -->

				<h3 class="reporting-h3">Whitespark Local Citation Finder</h3>

				<div class="create-acct-btn">
					<a class="btn btn-success social-media-account-btn" href="https://accounts.whitespark.ca/sign-up/lcf?plan=free" target="_blank">Whitespark</a>
				</div><!-- .create-acct-btn -->

				</div><!-- .col-md-6 -->

				<div class="col-md-6">

				<h3 class="reporting-h3">The Hoth Local SEO Business Listing Audit</h3>

				<div class="create-acct-btn">
					<a class="btn btn-success social-media-account-btn" href="https://www.thehoth.com/local-seo-tool/" target="_blank">The Hoth</a>
				</div><!-- .create-acct-btn -->

				</div><!-- .col-md-6 -->

				</div><!-- .row -->

					<div class="local-listing-scan collapse" id="collapseBusinessScan">
						<iframe name="local-listing-scan" src="https://moz.com/checkout/local/check"></iframe>
					</div>


			</div><!-- #business-listings -->

			<div role="tabpanel" class="tab-pane" id="how-to-videos">

				<h3>How To Videos</h3>

					<p class="upgrade-p">Below you will find an ever growing Play List of Local SEO and Plugin How To Videos.  More are being added daily, so please continue to check this tab.</p>

				<h3>Local SEO Tutorials</h3>

					The <strong>Local SEO Videos</strong> are an ever growing collection of tutorials, discussions, strategies and much more on the topics of Local Search Engine Optimization and Internet Marketing.  Click <strong>PLAYLIST</strong> in the upper left hand corner of the video player to scroll through the available videos.  The videos are in order from most recently added to oldest to make it easy for you to get the latest information on a daily basis.</p>

					<div class="how-to-youtube-videos-div">
						<iframe width="650" height="400" src="https://www.youtube.com/embed/videoseries?list=PLV3IL9QBL7J5Yi5ubMVumBCHSXrSfZO93" frameborder="0" allowfullscreen></iframe>
					</div>

				<h3>Plugin tutorials</h3>

					<p class="upgrade-p"><strong>Please Note:</strong> Much of the functionality depicted in the tutorial videos require an upgraded account.  To upgrade your account for as little as $14.99 per month, please click on the <strong>Local SEO Tab</strong> and log in to your account.  To follow along with the tutorials you can switch tabs back and forth without the video reloading, or you can click the YouTube icon in the lower right hand corner of the player to open the video in a new tab.  Click <strong>PLAYLIST</strong> in the upper left hand corner of the video player to scroll through the available videos.</p>

					<div class="how-to-youtube-videos-div">
						<iframe width="650" height="400" src="https://www.youtube.com/embed/videoseries?list=PLG03K8N3fOP87NlijeP9ExB2p4lT-Kqzg" frameborder="0" allowfullscreen></iframe>
					</div>

			</div><!-- how-to-videos -->

			<div role="tabpanel" class="tab-pane" id="contact">

					<div class="pcpros-operations-div">
						<iframe name="pcpros-operations-iframe" src="https://pcprosllc.com/contact/"></iframe>
					</div>

			</div><!-- .manage-listings -->

			<div role="tabpanel" class="tab-pane" id="faq">

			<div class="row">
			  <div class="col-md-12">

			        <h3>FAQ</h3>
				    <p class="upgrade-p"><strong>Do I need to be an SEO expert to utilize this Plugin?</strong></p>
					<p class="upgrade-p">No, SEO expertise is NOT required to utilize this Plugin and optimize your website for Local Search. In fact by using this plugin and following the Step by Step Local SEO Guide we will walk you through the entire process and with a little effort you can learn to become an SEO expert.</p>
					<p class="upgrade-p"><strong>Can I change my business information?</strong></p>
					<p class="upgrade-p">Yes, simply make any changes under the Business Information tab and click update to recheck your listing results.</p>
					<p class="upgrade-p"><strong>Do you offer support for the free version of the Plugin?</strong></p>
					<p class="upgrade-p">Yes. We are here to help. Just post you question under the support tab within the WordPress Repo on our Plugin page or, for the fastest results visit this resource where you can contact us immediately and find out more: <a href="https://www.localadworks.com/contact-us/" target="_blank">Contact Us</a> </p>


			  </div><!-- .col-md-6 -->
			</div><!-- .row -->

			</div><!-- #Faq -->

	</div><!-- .bootstrap-tabs -->

</div><!-- pcpros-options -->
