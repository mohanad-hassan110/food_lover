<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function index()
    {
        // منطق العرض للصفحة الرئيسية
        return view('home');
    }

    public function submit(Request $request)
    {
        // منطق المعالجة عند تقديم النموذج
        // مثال: معالجة البيانات، تخزينها، إلخ.
        return redirect()->back()->with('success', 'Data submitted successfully!');
    }
}
