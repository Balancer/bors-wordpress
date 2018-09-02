<?php

namespace B2\WordPress;

class ObjectDb extends \bors_object_db
{
	function storage_engine() { return \bors_storage_mysql::class; }
	function db_name() { return 'SITE'; }
}
