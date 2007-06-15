<?php if ($_POST[$this->slug . "_update"]) { ?><div id="message" class="updated fade" style="background-color: rgb(207, 235, 247);"><p><strong>Settings Updated</strong><p></div><?php } ?>
<div class=wrap>
	<form method="post">
		<input type="hidden" name="<?php echo $this->slug; ?>_update" value="true" />
		<h2><?php echo $this->name; ?></h2>
		<table width="100%" cellspacing="2" cellpadding="5" class="optiontable">
		<tr valign="top">
			<th scope="row">Use the site's favicon:</th>
			<td>
				<input type="text" name="<?php echo $this->slug; ?>_usefavicon" value="<?php echo $options['usefavicon']; ?>" style="width:30em;" />
				<br />If 1 then use favicon.ico
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row">Watermark Image:</th>
			<td>
				<input type="text" name="<?php echo $this->slug; ?>_watermarkimage" value="<?php echo $options['watermarkimage']; ?>" style="width:30em;" />
				<br />The URL to an image to use as the watermark on the side panel
			</td>
		</tr>		
		<tr valign="top">
			<th scope="row">Stats URL:</th>
			<td>
				<input type="text" name="<?php echo $this->slug; ?>_statsurl" value="<?php echo $options['statsurl']; ?>" style="width:30em;" />
				<br />The URL to link to the stats page for your blog.
			</td>
		</tr>
		</table>

		<div class="submit"><input type="submit" name="info_update" value="<?php _e('Update') ?> &raquo;" /></div>
	</form>		
		
	<div style="background-color:rgb(238, 238, 238); border: 1px solid rgb(85, 85, 85); padding: 5px; margin-top:10px;"><p>Did you find this plugin useful?  Please consider donating to help me continue developing it and other plugins.</p><form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_xclick"><input type="hidden" name="business" value="paypal@slaven.net.au"><input type="hidden" name="item_name" value="<?php echo $title; ?> Wordpress Plugin"><input type="hidden" name="no_note" value="1"><input type="hidden" name="currency_code" value="AUD"><input type="hidden" name="tax" value="0"><input type="hidden" name="bn" value="PP-DonationsBF"><input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"></form></div>
		
</div>	