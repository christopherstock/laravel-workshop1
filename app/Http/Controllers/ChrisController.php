<?php

namespace App\Http\Controllers;

use App\Services\ChrisService;
use Illuminate\Routing\Controller;

class ChrisController extends Controller
{

    public function chris2()
    {
        //echo Form::open(array('url' => 'foo/bar', 'method' => 'put'));

        $chrisService = new ChrisService();
        $values = $chrisService->getExampleValues();

        return view('chris2', $values);
    }

}