
use Illuminate\Support\Facades\Route;

Route::get('/check', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'La API funciona correctamente..'
    ]);
});
