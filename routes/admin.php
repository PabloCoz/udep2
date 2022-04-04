<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('admin/roles', RoleController::class)->names('admin.roles');

Route::resource('admin/users', UserController::class)->only('index', 'edit', 'update')->names('admin.users');