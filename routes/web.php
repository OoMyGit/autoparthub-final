<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShopGridController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\BlogGridController;
use App\Http\Controllers\BlogListingController;
use App\Http\Controllers\CampaignSingleController;
use App\Http\Controllers\CampaignsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShopGrid2Controller;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminController;


Route::get('/', [IndexController::class, 'Index'])->name('index');
Route::get('/shop-grid', [ShopGridController::class, 'ShopGrid'])->name('shop-grid');
Route::get('/my-account', [MyAccountController::class, 'MyAccount'])->name('my-account');
Route::get('/about', [AboutController::class, 'About'])->name('about');
Route::get('/blog-details', [BlogDetailsController::class, 'BlogDetails'])->name('blog-details');
Route::get('/blog-grid', [BlogGridController::class, 'BlogGrid'])->name('blog-grid');
Route::get('/blog-listing', [BlogListingController::class, 'BlogListing'])->name('blog-listing');
Route::get('/campaign-single', [CampaignSingleController::class, 'CampaignSingle'])->name('campaign-single');
Route::get('/campaigns', [CampaignsController::class, 'Campaigns'])->name('campaigns');
Route::get('/cart', [CartController::class, 'Cart'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'Checkout'])->name('checkout');
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::get('/coupons', [CouponsController::class, 'Coupons'])->name('coupons');
Route::get('/invoice', [InvoiceController::class, 'Invoice'])->name('invoice');
Route::get('/login', [LoginController::class, 'Login'])->name('login');
Route::get('/product-details', [ProductDetailsController::class, 'ProductDetails'])->name('product-details');
Route::get('/service-details', [ServiceDetailsController::class, 'ServiceDetails'])->name('service-details');
Route::get('/services', [ServicesController::class, 'Services'])->name('services');
Route::get('/shop-grid-2', [ShopGrid2Controller::class, 'ShopGrid2'])->name('shop-grid-2');
Route::get('/signup', [SignupController::class, 'Signup'])->name('signup');
Route::get('/team', [TeamController::class, 'Team'])->name('team');
Route::get('/welcome', [WelcomeController::class, 'Welcome'])->name('welcome');
Route::get('/wishlist', [WishlistController::class, 'Wishlist'])->name('wishlist');

Route::get('/admin-signup', [AdminController::class, 'showSignupForm'])->name('admin-signup');
Route::get('/admin-login', [AdminController::class, 'showLoginForm'])->name('admin-login');
Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('admin-dashboard');
Route::get('/admin-edit-product', [AdminController::class, 'showEditProduct'])->name('admin-edit-product');


