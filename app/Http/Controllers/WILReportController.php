<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WILReportController extends Controller
{
    public function placementReflect()
    {
        return view('PlacementAssessment.show');
    }
}
