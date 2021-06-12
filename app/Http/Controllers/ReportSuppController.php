<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportSuppController extends Controller
{
    public function index()
    {
        $data = Report::all();
        return view('stakeholder.report-supp.index', compact('data'));
    }
}
