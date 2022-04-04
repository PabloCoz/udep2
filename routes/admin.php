<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::resource('admin/roles', RoleController::class)->names('admin.roles');