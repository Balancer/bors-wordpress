<?php

namespace B2\WordPress;

class Post extends ObjectDb
{
	function table_name() { return 'wp_posts'; }

	function table_fields()
	{
		return [
			'id' => 'ID',
			'post_author',
			'create_ts' => 'UNIX_TIMESTAMP(`post_date`)',
			'post_date_gmt',
			'post_content' => ['type' => 'markdown'],
			'post_title',
			'post_excerpt' => ['type' => 'markdown'],
			'post_status',
			'comment_status',
			'ping_status',
			'post_password',
			'post_name',
			'to_ping',
			'pinged',
			'modify_ts' => 'UNIX_TIMESTAMP(`post_modified`)',
			'post_modified_gmt',
			'post_content_filtered',
			'post_parent',
			'guid',
			'menu_order',
			'post_type',
			'post_mime_type',
			'comment_count',
		];
	}
}
