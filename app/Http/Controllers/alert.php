<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class alert
 * @package App\Http\Controllers
 * @author MD. Nazmul Alam <nazmul199512@gmail.com>
 */
class alert extends Controller
{
    public function index(){

        return view('alert');
    }
}
