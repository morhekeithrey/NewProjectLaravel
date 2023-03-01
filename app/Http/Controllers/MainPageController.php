<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyInfo;
use App\Models\portfolio;

class MainPageController extends Controller
{
    public function SendData() {
        $img = new portfolio;
        return view('Section.index', ['Datas' => MyInfo::Infos()])
        -> with('png', $img-> img());
    }
}
