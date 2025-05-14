<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Defect;

class DefectController extends Controller
{
    //
    public function listAllTranslation()
    {
        $defects = Defect\Header::with('translations')->get();
        return response()->json($defects);
    }
}
