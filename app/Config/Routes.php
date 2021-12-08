<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('App');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Admin Routes
// $routes->get('Login', 'Login::index',["filter"=>"login"]);


// $routes->get('admin/Dashboard', 'admin\Dashboard::index',["filter"=>"admin"]);
// $routes->get('admin/KategoriBerita', 'admin\KategoriBerita::index',["filter"=>"admin"]);
// $routes->get('admin/Berita', 'admin\Berita::index',["filter"=>"admin"]);
// $routes->get('admin/AksiKonvergensi', 'admin\AksiKonvergensi::index',["filter"=>"admin"]);
// $routes->get('admin/BahanEdukasi', 'admin\BahanEdukasi::index',["filter"=>"admin"]);
// $routes->get('admin/IndikatorPencegahan', 'admin\IndikatorPencegahan::index',["filter"=>"admin"]);
// $routes->get('admin/KategoriEdukasi', 'admin\KategoriEdukasi::index',["filter"=>"admin"]);
// $routes->get('admin/Profile', 'admin\Profile::index',["filter"=>"admin"]);
// $routes->get('admin/Publikasi', 'admin\Publikasi::index',["filter"=>"admin"]);
// $routes->get('admin/User', 'admin\User::index',["filter"=>"admin"]);


// $routes->post('MyProfile', 'MyProfile::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
