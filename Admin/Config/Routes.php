<?php

namespace Admin;

use Config\Services;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->get("admin/users", "\Admin\Controllers\Users::index");