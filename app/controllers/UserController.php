<?php



class UserController extends BaseController {

    public function writeName() {

        return View::make('users');
    }

    public function login() {

        $loginFormData = Input::get('data');

    }

} 