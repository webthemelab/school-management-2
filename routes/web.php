<?php

use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\ClasssController;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\StudentController;





/*==================== Authentication part start ==============================*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('user_type');

/*==================== Authentication part end =================================*/


/*====================== Frontend All Route Start================================ */
//frontend home page view
Route::get('/',[FrontendController::class,'index']);
/*====================== Frontend All Route end================================ */


/**============ Backend all route start========================= */

/*slider start */
Route::get('/add/slider',[SliderController::class,'addSlider'])->name('add.slider');

Route::post('/store/slider',[SliderController::class,'storeSlider'])->name('store.slider');

Route::get('/view/slider',[SliderController::class,'viewSlider'])->name('view.slider');

Route::get('/deactive/slider/{id}',[SliderController::class,'deactiveSlider'])->name('deactive.slider');

Route::get('/active/slider/{id}',[SliderController::class,'activeSlider'])->name('active.slider');

Route::get('/edit/slider/{id}',[SliderController::class,'editSlider'])->name('edit.slider');

Route::post('/update/slider/',[SliderController::class,'updateSlider'])->name('update.slider');

Route::get('/delete/slider/{id}',[SliderController::class,'deleteSlider'])->name('delete.slider');
/** slider end */



/*Class start */
Route::get('/view/class',[ClasssController::class,'viewClass'])->name('view.class');

Route::post('/store/class',[ClasssController::class,'storeClass'])->name('store.class');

Route::get('/edit/class/{id}',[ClasssController::class,'editClass'])->name('edit.class');

Route::post('/update/class',[ClasssController::class,'updateClass'])->name('update.class');

Route::get('/delete/class/{id}',[ClasssController::class,'deleteClass'])->name('delete.class');

/*Class End */

/* Section start */
Route::get('/view/section',[SectionController::class,'viewSection'])->name('view.section');

Route::post('/store/section',[SectionController::class,'storeSection'])->name('store.section');

Route::get('/edit/section/{id}',[SectionController::class,'editSection'])->name('edit.section');

Route::post('/update/section',[SectionController::class,'updateSection'])->name('update.section');

Route::get('/delete/section/{id}',[SectionController::class,'deleteSection'])->name('delete.section');
/* Section end */



/* Student start */

Route::get('/add/student',[StudentController::class,'addStudent'])->name('add.student');

Route::post('/store/student',[StudentController::class,'storeStudent'])->name('store.student');

/* Student end */
/**============ Backend all route end========================= */






