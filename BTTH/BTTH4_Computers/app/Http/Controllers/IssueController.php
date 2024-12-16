<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use App\Models\Computer;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $issues = Issue::with('computer')->get();
        return view('issues.index', compact('issues'));

        // hiển thị theo kiểu phân trang
        /*
            public function index()
            {
                $issues = Issue::with('computers')->paginate(5); // lấy 5 bản ghighi
                return view('issues.index', compact('issues'));
            }
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $computers = Computer::all();
        $issues = Issue::all();
        return view('issues.create', compact('computers', 'issues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'computer_id' => 'required',
                'reported_by' =>'required|max:50',
                'reported_date' => 'required|date',
                'description'=> 'required',
                'urgency' => 'required',
                'status'=> 'required'
            ]
        );
        Issue::create($request->all());
        return redirect()->route('issues.index')->with('success','Vấn đề đã được thêm thành công');
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
    public function edit($id)
    {
        //
        $issue = Issue::findOrFail($id);
        $computers = Computer::all();
        return view('issues.edit', compact('issue', 'computers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'computer_id' => 'required',
            'reported_by' => 'required',
            'reported_date' => 'nullable|datetime',
            'description' => 'required',
            'urgency' => 'required',
            'status' => 'required',
        ]);
        $issues = Issue::find($id);
        $issues ->update($request->all());
        
        return redirect()->route('issues.index')->with('success','Vấn đề đã cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $issues = Issue::findOrFail($id);
        $issues -> delete();
        return redirect()->route('issues.index')->with('success','Đã xóa vấn đề này');
    }
}
