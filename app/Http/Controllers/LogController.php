<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    //
    public function showLogs()
    {
        // Lấy tất cả các thông báo từ bảng logs
        $log = DB::table('logs')->orderBy('id', 'desc')->first();

        // Trả về view và truyền dữ liệu logs cho view
        return view('NhaCungCap.index', compact('log'));
    }
}
