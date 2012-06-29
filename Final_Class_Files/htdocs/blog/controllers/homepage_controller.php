<?php
//just included all our methods for our Blog Homepage
$blog = new Blog();
$recent = $blog->readBlogPost(0,5,null,'blog_created_at DESC');
$recent_posts = '<ul class="blog_roll">';
foreach($recent as $blog){
	$recent_posts .= '<li><a href="/blog/hackerblog/show/'.$blog['blog_id'].'">'.$blog['blog_title'].'</a></li>';
}
$recent_posts .= '</ul>';
?>