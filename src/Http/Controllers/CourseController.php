<?php

namespace Flexi\CourseEnrolement\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('Flexi\CourseEnrolement::courses.index');
    }
}
