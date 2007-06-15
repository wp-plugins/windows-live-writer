<?php
require('../../../wp-blog-header.php');
header('Content-type: text/xml; charset=' . get_option('blog_charset'), true);
$wp_wlw = new windows_live_writer_plugin(true);	
$wlw_options = $wp_wlw->get_options(); //wp-content/plugins/windows-live-writer/wlwcontent.php?page=comments
?>
<?php echo '<?xml version="1.0" encoding="'.get_option('blog_charset').'"?'.'>'; ?>
<manifest xmlns="http://schemas.microsoft.com/wlw/manifest/weblog">
  <options>
    <clientType>WordPress</clientType>
	<supportsEmbeds>Yes</supportsEmbeds>
  </options>
  
  <weblog>
    <serviceName><?php echo get_option('blogname'); ?></serviceName>
    <imageUrl><?php echo ($wlw_options['usefavicon'] ? 'favicon.ico' : $wp_wlw->path . 'WpIcon.png'); ?></imageUrl>
    <watermarkImageUrl><?php echo ($wlw_options['watermarkimage'] ? $wlw_options['watermarkimage'] : $wp_wlw->path . 'WpWatermark.png'); ?></watermarkImageUrl>
    <homepageLinkText>View site</homepageLinkText>
    <adminLinkText>Dashboard</adminLinkText>
    <adminUrl>
      <![CDATA[ 
			{blog-postapi-url}/../wp-admin/ 
		]]>
    </adminUrl>
    <postEditingUrl>
      <![CDATA[ 
			{blog-postapi-url}/../wp-admin/post.php?action=edit&post={post-id} 
		]]>
	</postEditingUrl>
  </weblog>

  <buttons>
    <button>
      <id>0</id>
      <text>Comments</text>
      <imageUrl><?php echo $wp_wlw->path; ?>WpStats.png</imageUrl>
      <clickUrl>
        <![CDATA[ 
				{blog-postapi-url}/../wp-admin/edit-comments.php
			]]>
      </clickUrl>
	  <contentUrl>
        <![CDATA[ 
				{blog-homepage-url}/../wp-content/plugins/windows-live-writer/wlwcontent.php?page=comments
			]]>
      </contentUrl>
	  <contentDisplaySize>480,480</contentDisplaySize>
    </button>

    <button>
      <id>1</id>
      <text>Blog Stats</text>
      <imageUrl><?php echo $wp_wlw->path; ?>WpStats.png</imageUrl>
      <clickUrl>
        <![CDATA[ 
				<?php echo $wlw_options['statsurl']; ?>
			]]>
      </clickUrl>
    </button>
  </buttons>
</manifest>

