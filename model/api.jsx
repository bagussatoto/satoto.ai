Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
