<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhyChooseUs\StoreRequest;
use App\Http\Requests\WhyChooseUs\UpdateRequest;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whyChooseUss = WhyChooseUs::query()->select('id','icon','title','content')->get();
        return view('admin.whychooseus.index',compact('whyChooseUss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.whychooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data=[
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
        ];


        $file = $request->file('icon');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/whyChooseUs/'), $filename);
        $data['icon'] = "storage/home/whyChooseUs/$filename";
        WhyChooseUs::query()->create($data);
        return redirect()->route('admin.whychooseus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $whyChooseUs = WhyChooseUs::query()->find($id);
        return view('admin.whychooseus.show',compact('whyChooseUs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $whyChooseUs = WhyChooseUs::query()->find($id);
        return view('admin.whychooseus.edit',compact('whyChooseUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $lastFile = WhyChooseUs::query()->find($id);
        $data = [
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ];

        if (file_exists($request->icon)) {

        $file = $request->file('icon');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/whyChooseUs/'), $filename);
        $data['icon'] = "storage/home/whyChooseUs/$filename";
        if ((file_exists(public_path($lastFile->icon)))) File::delete(public_path($lastFile->icon));
    }
        WhyChooseUs::query()->find($id)->update($data);
        return redirect()->route('admin.whychooseus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = WhyChooseUs::query()->find($id);
        if ((file_exists(public_path($file->icon)))) File::delete(public_path($file->icon));
        $file->delete();
        return redirect()->route('admin.whychooseus.index');
    }
}
