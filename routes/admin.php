<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('admin/roles', RoleController::class)->middleware('can:Ver Dashboard')->names('admin.roles');

Route::resource('admin/users', UserController::class)->middleware('can:Editar Usuarios')->only('index', 'edit', 'update')->names('admin.users');