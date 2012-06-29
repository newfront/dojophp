<?php
$blog = new Blog();
$recent = $blog->readBlogPost(0,5,null,'blog_created_at DESC');
$recent_posts = '<div class="simple_page"><span class="indent">';
foreach($recent as $blog){
	$recent_posts .= '<div class="blog_roll">';
	$recent_posts .= '<h3><a href="/blog/hackerblog/show/'.$blog['blog_id'].'">'.$blog['blog_title'].'</a></h3>';
	$recent_posts .= '<span>'.$blog['blog_body'].'</span><div class="clearfix"></div>';
	$recent_posts .= '</div>';
}
$recent_posts .= '</span></div>';
?>