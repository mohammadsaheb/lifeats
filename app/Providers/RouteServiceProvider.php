<?php
Route::prefix('api')
->middleware('api')
->namespace($this->namespace)
->group(base_path('routes/api.php'));
