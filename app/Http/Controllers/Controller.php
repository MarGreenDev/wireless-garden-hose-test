<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function doSomething {

 return redirect()->back()->with()('success', 'Done!');
}
}

