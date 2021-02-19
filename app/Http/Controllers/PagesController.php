<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function getIndex() {
        return view('pages/welcome');
    }

    public function getAbout() {
        $first = 'Ricardo';
        $last = 'Rohrs';
        $fullname = $first . " " . $last;
        $email = 'ricardo@email.com';
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages/about')->withData($data);
    }

    public function getContact() {
        return view('pages/contact');
    }
}
