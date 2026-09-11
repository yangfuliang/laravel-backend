<?php

use Illuminate\Support\Facades\Route;

// 登录
Route::get("/auth/login", [\App\Http\Controllers\AuthController::class, "login"])->name("auth.login");
// 退出登录
Route::get("/auth/logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("auth.logout");
// 登录验证码
Route::get("/auth/captcha", [\App\Http\Controllers\AuthController::class, "captcha"])->name("auth.captcha");
// 菜单
Route::get("/menus/routes", [\App\Http\Controllers\MenuController::class, "routes"])->name("menus.routes");
Route::get("/menus", [\App\Http\Controllers\MenuController::class, "index"])->name("menus.index");
Route::get("/menus/options", [\App\Http\Controllers\MenuController::class, "options"])->name("menus.options");
Route::post("/menus", [\App\Http\Controllers\MenuController::class, "add"])->name("menus.add");
Route::get("/menus/{id}/form", [\App\Http\Controllers\MenuController::class, "get"])->name("menus.get");
Route::put("/menus/{id}", [\App\Http\Controllers\MenuController::class, "update"])->name("menus.update");
Route::delete("/menus/{id}", [\App\Http\Controllers\MenuController::class, "delete"])->name("menus.delete");
// 部门
Route::get("/depts/options", [\App\Http\Controllers\DeptController::class, "options"])->name("depts.options");
Route::get("/depts", [\App\Http\Controllers\DeptController::class, "index"])->name("depts.index");
Route::post("/depts", [\App\Http\Controllers\DeptController::class, "add"])->name("depts.add");
Route::get("/depts/{id}/from", [\App\Http\Controllers\DeptController::class, "get"])->name("depts.get");
Route::put("/depts/{id}", [\App\Http\Controllers\DeptController::class, "update"])->name("depts.update");
Route::delete("/depts/{id}", [\App\Http\Controllers\DeptController::class, "delete"])->name("depts.delete");
// 权限
Route::get("/roles/options", [\App\Http\Controllers\RoleController::class, "options"])->name("roles.options");
Route::get("/roles", [\App\Http\Controllers\RoleController::class, "index"])->name("roles.index");
Route::post("/roles", [\App\Http\Controllers\RoleController::class, "add"])->name("roles.add");
Route::get("/roles/{id}/from", [\App\Http\Controllers\RoleController::class, "get"])->name("roles.get");
Route::put("/roles/{id}", [\App\Http\Controllers\RoleController::class, "update"])->name("roles.update");
Route::delete("/roles/{id}", [\App\Http\Controllers\RoleController::class, "delete"])->name("role.delete");
Route::get("/roles/{id}/menu-ids", [\App\Http\Controllers\RoleController::class, "menuIds"])->name("roles.menuIds");
Route::put("/roles/{id}/menus", [\App\Http\Controllers\RoleController::class, "saveMenu"])->name("roles.saveMenu");
Route::get("/roles/{id}/dept-ids", [\App\Http\Controllers\RoleController::class, "deptIds"])->name("roles.deptIds");


