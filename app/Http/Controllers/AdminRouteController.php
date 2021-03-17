<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AdminRouteController extends Controller {

    public function validateUserAndGo($action) {
        if ($this->isAdmin()) {
            return $action();
        }
        else {
            return $this->redirectHome();
        }
    }
     
    public function isAdmin() {
        return auth()->user()->role === "admin";
    }

    public function redirectHome() {
        return redirect()->route('home');
    }
}