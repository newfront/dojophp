<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/blog/includes/common.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/blog/classes/clsBlog.php';
$blog = new Blog();
$recent = $blog->readBlogPost(0,5,null,'blog_created_at DESC');
$feed = '<rss version="2.0"><channel><title>Hacker Dojo Blog RSS Feed</title><link>http://www.newfrontcreative.com</link><description>Use for anything.</description><language>en</language><docs>http://blogs.law.harvard.edu/tech/rss</docs>';

foreach($recent as $blog){
	$feed .= '<item>';
	$feed .= '<title>'.$blog['blog_title'].'</title>';
	$feed .= '<link>/blog/hackerblog/show/'.htmlspecialchars($blog['blog_id']).'</link>';
	$feed .= '<pubDate>'.substr($blog['blog_created_at'],0,10).'</pubDate>';
	$feed .= '</item>';
}
$feed .= '</channel></rss>';
//header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo $feed;

/*
<rss version="2.0">
	<channel>
		<title>Hacker Dojo Blog RSS Feed</title>
		<link>http://www.newfrontcreative.com</link>
		<description>Use for anything.</description>
		<language>en</language>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<item>
			<title>Blog Post title</title>
			<link>real link</link>
			<pubDate>2010-03-16</pubDate>
		</item>
	</channel>
</rss>
*/
?>