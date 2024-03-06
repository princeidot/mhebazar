<?php

use Illuminate\Support\Facades\Route;




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('verified');

Route::get('/about-us', [App\Http\Controllers\StaticController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\StaticController::class, 'contact'])->name('contact');
// Route::get('/mhe-bazar-lithium-ion-battery', [App\Http\Controllers\StaticController::class, 'battery'])->name('battery');

Route::get('/pallet-truck', [App\Http\Controllers\HandController::class, 'index'])->name('hand-pallet-truck');
// Route::get('/pallet-truck/{title}/{id}', [App\Http\Controllers\HandController::class, 'cate'])->name('hand.cate');
Route::get('/pallet-truck/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('hand.product');
Route::post('/pallet-truck/pdf', [App\Http\Controllers\HandController::class, 'createPDF'])->name('product.pdf');

Route::get('/pallet', [App\Http\Controllers\StackerController::class, 'pallet'])->name('pallet');
Route::get('pallet/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('pallet.product');

Route::get('stacker', [App\Http\Controllers\StackerController::class, 'index'])->name('stacker');
Route::get('stacker/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('stacker.product');
Route::post('stacker/pdf', [App\Http\Controllers\StackerController::class, 'createPDF'])->name('stacker.pdf');

Route::get('manual-platform-trolly', [App\Http\Controllers\MptController::class, 'index'])->name('mpt');

Route::post('manual-platform-trolly/pdf', [App\Http\Controllers\MptController::class, 'createPDF'])->name('mpt.pdf');

Route::get('platform-truck', [App\Http\Controllers\PlatformController::class, 'index'])->name('platformtruck');
Route::get('platform-truck/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('platformtruck.product');
Route::post('platform-truck/pdf', [App\Http\Controllers\PlatformController::class, 'createPDF'])->name('platform.pdf');

Route::get('tow-truck', [App\Http\Controllers\TwotruckController::class, 'index'])->name('twotruck');
Route::get('tow-truck/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('twotruck.product');

Route::get('dock-leveller', [App\Http\Controllers\DockLevellerController::class, 'index'])->name('dock.leveller');
Route::get('dock-leveller/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('dock.product');
Route::post('dock-leveller/pdf', [App\Http\Controllers\DockLevellerController::class, 'createPDF'])->name('dockleveller.pdf');

Route::get('scissors-lift', [App\Http\Controllers\SissorsliftController::class, 'index'])->name('sissorslift');
Route::get('scissors-lift/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('sissorslift.product');
Route::post('scissors-lift/pdf', [App\Http\Controllers\SissorsliftController::class, 'createPDF'])->name('scissorslift.pdf');

Route::get('electric-pallet-truck', [App\Http\Controllers\EptController::class, 'index'])->name('electric.ptruck');


Route::get('reach-truck', [App\Http\Controllers\ReachtruckController::class, 'index'])->name('reachtruck');
Route::get('reach-truck/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('reachtruck.product');

Route::get('racking-system', [App\Http\Controllers\ReachtruckController::class, 'rackings'])->name('rackingsystem');
Route::get('racking-system/{slug}', [App\Http\Controllers\HandController::class, 'product'])->name('rackingsystem.product');

Route::get('forklift', [App\Http\Controllers\ReachtruckController::class, 'forklift'])->name('forklift');
Route::get('forklift/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('forklift.product');

Route::get('container-handler', [App\Http\Controllers\ReachtruckController::class, 'containerhandler'])->name('containerhandler');
Route::get('container-handler/{slug}',  [App\Http\Controllers\HandController::class, 'product'])->name('containerhandler.product');

Route::get('explosionproof-mhe-solution', [App\Http\Controllers\ReachtruckController::class, 'ems'])->name('ems');
Route::get('explosionproof-mhe-solution/{slug}', [App\Http\Controllers\ReachtruckController::class, 'emsp'])->name('ems.product');

Route::get('order-picker', [App\Http\Controllers\ReachtruckController::class, 'orderpicker'])->name('orderpicker');
Route::get('very-narrow-aisle-truck', [App\Http\Controllers\ReachtruckController::class, 'vna'])->name('vna');
Route::get('automated-guided-vehicle', [App\Http\Controllers\ReachtruckController::class, 'agv'])->name('agv');
Route::get('rental', [App\Http\Controllers\ReachtruckController::class, 'rental'])->name('rental');

Route::get('safety-solutions', [App\Http\Controllers\StackerController::class, 'safety'])->name('safety');




Route::get('used-mhe', [App\Http\Controllers\ReachtruckController::class, 'usedmhe'])->name('usedmhe');
Route::get('used-mhe/{title}/{slug}', [App\Http\Controllers\ReachtruckController::class, 'usedmhep'])->name('usedmhe.product');
Route::get('attachments', [App\Http\Controllers\ReachtruckController::class, 'attachments'])->name('attachments');
Route::get('spare-parts', [App\Http\Controllers\ReachtruckController::class, 'sparep'])->name('sparep');
Route::get('services', [App\Http\Controllers\ReachtruckController::class, 'services'])->name('services');
Route::get('training', [App\Http\Controllers\ReachtruckController::class, 'training'])->name('training');
Route::get('testimonials', [App\Http\Controllers\StaticController::class, 'testimonials'])->name('testimonials');
Route::get('vendors-listing', [App\Http\Controllers\StaticController::class, 'vendorsl'])->name('vendorsl');
Route::get('vendors-listing/{slug}', [App\Http\Controllers\StaticController::class, 'vendorss'])->name('vendorss');


Route::get('battery', [App\Http\Controllers\StaticController::class, 'batteries'])->name('battery');
Route::get('battery/{slug}', [App\Http\Controllers\StaticController::class, 'batslug'])->name('battery.category');



//Testing Urls//



//End Testing Urls





/*========================Blog================================*/

Route::get('blog', [App\Http\Controllers\Admin\BlogController::class, 'blogfront'])->name('blog');
Route::get('blog/{url}', [App\Http\Controllers\Admin\BlogController::class, 'blogsingle'])->name('blog.single');
Route::delete('dashboard/blogdelete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'bdelete'])->name('blog.delete');


/*====================== End Blog =============================*/