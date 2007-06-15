<html><head></head><body>
<?php
require('../../../wp-blog-header.php');

switch($_REQUEST['page']) {
	case 'comments':
		$url = get_bloginfo('comments_rss2_url');
		$wlw_plugin = new windows_live_writer_plugin();
		$content = $wlw_plugin->get_remote_content($url);
		$parser = new MagpieRSS($content);
		
		if ($parser && is_array($parser->items)) {
			foreach($parser->items as $item) {
?>
<h2 style="margin:0px;padding:0px; font-size:1em;"><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h2>
<div style="font-size:smaller;"><?php echo $item['pubdate']; ?></div>
<div><?php echo $item['content']['encoded']; ?></div>
<?php				
			}
		}
		break;
}
?>
</body></html>