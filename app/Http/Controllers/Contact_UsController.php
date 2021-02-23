<?php

namespace App\Http\Controllers;

use App\Models\Contact_Us;
use Illuminate\Http\Request;

class Contact_UsController extends Controller
{

    public function index(Request $request)
    {
        $is_read = $request->query('is_read');
        if ($is_read) {
            $data = Contact_Us::orderby('id', 'desc')->where('isread', $is_read === "true" ? 1 : 0)->get();
        } else {
            $data = Contact_Us::orderby('id', 'desc')->paginate('10');
        }
        return view('admin.contact_us.contact_us', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data = Contact_Us::findOrfail($id);
        return view('admin.contact_us.detail', compact('data'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function read($id)
    {
        $data = Contact_Us::findorfail($id);
        $isread = $data->isread;
        if (!$isread == 1) {
            $data->name = $data->name;
            $data->phone = $data->phone;
            $data->title = $data->title;
            $data->message = $data->message;
            $data->isread = 1;
            $data->save();
        }
        return redirect(Route('contact_us.index'))->with('success', 'Message is read');
    }
}
