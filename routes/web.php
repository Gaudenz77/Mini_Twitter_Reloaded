<?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\MessageController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () { return view('welcome');
    });

    // if messages should be localhos change above to this:
    /* Route::get('/', [MessageController::class, 'showAll']); */


    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';

    Route::get('/messages', [MessageController::class, 'showAll']);

    Route::post('/create', [MessageController::class, 'create'])->middleware('auth');

    Route::get('/message/{id}', [MessageController::class, 'details']);

    Route::delete('/message/{id}', [MessageController::class, 'delete']);

    Route::post('/message/{id}/like', [MessageController::class, 'like']);

    Route::post('/message/{id}/dislike', [MessageController::class, 'dislike']);

    Route::post('/messages/reply', [MessageController::class, 'reply'])->name('messages.reply');




