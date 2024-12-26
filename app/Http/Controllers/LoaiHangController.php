<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiHang;
use Illuminate\Support\Facades\DB;


class LoaiHangController extends Controller
{
    //
    public function index()
    {
        //
        $loaihangs = DB::table('loaihang_view')->paginate(5);
        return view('LoaiHang.index', compact('loaihangs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('LoaiHang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate dữ liệu
        $log = DB::table('logs')->orderBy('id', 'desc')->first();


        // Quay lại trang danh sách với thông báo thành công
        return redirect()->route('loaihang.index')->with('success', $log->message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $loaihang = LoaiHang::findOrFail($id);
        return view('NhaCungCap.edit', compact('loaihang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $log = DB::table('logs')->orderBy('id', 'desc')->first();
        return redirect()->route('nhacungcap.index')->with('success', $log->message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
