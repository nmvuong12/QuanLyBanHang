<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhaCungCap;
use Illuminate\Support\Facades\DB;
class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nhacungcaps = DB::table('nhacungcap_view')->paginate(5);
        return view('NhaCungCap.index', compact('nhacungcaps'));
    }
    public function showcongiaodich()
    {
        //
        $nhacungcaps = DB::table('nhacungcapcongiaodich_view')->paginate(5);
        return view('NhaCungCap.showcongiaodich', compact('nhacungcaps'));
    }
    public function showngunggiaodich()
    {
        //
        $nhacungcaps = DB::table('nhacungcapngunggiaodich_view')->paginate(5);
        return view('NhaCungCap.showngunggiaodich', compact('nhacungcaps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('NhaCungCap.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate dữ liệu
        $request->validate([
            'ten' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'sdt' => 'required|numeric',
            'website' => 'required|string|max:255',
            'trangthai' => 'required|boolean',
        ]);

        // Tạo mới nhà cung cấp
        $nhaCungCap = new NhaCungCap();
        $nhaCungCap->ten = $request->input('ten');
        $nhaCungCap->diachi = $request->input('diachi');
        $nhaCungCap->sdt = $request->input('sdt');
        $nhaCungCap->website = $request->input('website');
        $nhaCungCap->trangthai = $request->input('trangthai');
        
        // Lưu dữ liệu vào cơ sở dữ liệu
        $nhaCungCap->save();
        $log = DB::table('logs')->orderBy('id', 'desc')->first();


        // Quay lại trang danh sách với thông báo thành công
        return redirect()->route('nhacungcap.index')->with('success', $log->message);
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
        $nhacungcap = NhaCungCap::findOrFail($id);
        return view('NhaCungCap.edit', compact('nhacungcap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'ten' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'sdt' => 'required|numeric',
            'website' => 'required|string|max:255',
        ]);
        $nhacungcap = NhaCungCap::findOrFail($id);
        $nhacungcap->update([
            'ten'=>$request->ten,
            'diachi' => $request->diachi,
            'sdt' => $request->sdt,
            'website' => $request->website,
        ]);
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

    public function CapNhatTrangThaiNhaCungCap(string $id)
    {
        //
        DB::statement('EXEC sp_CapNhatTrangThaiNhaCungCap ?', [$id]);
        $log = DB::table('logs')->orderBy('id', 'desc')->first();
        return redirect()->back()->with('success', $log->message);
    }
}
