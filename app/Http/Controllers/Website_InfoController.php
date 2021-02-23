<?php

namespace App\Http\Controllers;

use App\Http\Requests\Website_InfoRequest;
use App\Models\Website_Info;
use Illuminate\Http\Request;

class Website_InfoController extends Controller
{

    public function index()
    {
        //
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
        //
    }

    public function edit($id)
    {
        $website = Website_Info::find($id);
        return view('admin.website_info.website_info', compact('website'));
    }

    public function update(Website_InfoRequest $request, $id)
    {

        $website = Website_Info::findOrFail($id);
        $logo = $request->logo;
        if ($logo) {
            $path = public_path() . '/website_info/' . $website->logo;
            unlink($path);
            $logoName = time() . '_' . $logo->getClientOriginalName();
            $logo->move(public_path() . '/website_info/', $logoName);
        } else {
            $logoName = $website->logo;
        }
        $website->update([
            'name' => $request->name,
            'logo' => $logoName,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'viber' => $request->viber,
            'is_disable_website' => $request->is_disable_website,
            'is_disable_app' => $request->is_disable_app,

        ]);

        return redirect(Route('website_info.edit', $website->id))->with('success', 'Updated Successful');

    }

    public function destroy($id)
    {
        //
    }
}
