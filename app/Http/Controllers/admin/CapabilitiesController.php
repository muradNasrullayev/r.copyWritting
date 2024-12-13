<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Capabilities\{StoreRequest,UpdateRequest};
use App\Models\Capabilities;
use Illuminate\Support\Facades\File;

class CapabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $capabilities= Capabilities::query()->select('id','title','description','button_text','background_image')->get();
        return view('admin.capabilities.index',compact('capabilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.capabilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data=[
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'button_text'=>$request->input('button_text'),
        ];
        $file = $request->file('background_image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/Capabilities/'), $filename);
        $data['background_image'] = "storage/home/Capabilities/$filename";
        Capabilities::query()->create($data);
        return redirect()->route('admin.capabilities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $capabilities= Capabilities::query()->find($id);
        return view('admin.capabilities.show',compact('capabilities'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $capabilities= Capabilities::query()->find($id);
        return view('admin.capabilities.edit',compact('capabilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        $capabilities= Capabilities::query()->find($id);
        $data=['title'=>$request->input('title'),
               'description'=>$request->input('description'),
               'button_text'=>$request->input('button_text')
        ];
        if(file_exists($request->file('background_image'))){
            if(file_exists(public_path($capabilities->background_image))){
                File::delete(public_path($capabilities->background_image));
            }
            $file = $request->file('background_image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/Capabilities/'), $filename);
            $data['background_image'] = "storage/home/Capabilities/$filename";
        }
        $capabilities->update($data);
        return redirect()->route('admin.capabilities.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $capabilities= Capabilities::query()->find($id);
        if (file_exists(public_path($capabilities->background_image))){
            File::delete(public_path($capabilities->background_image));
        }
        $capabilities->delete();
        return redirect()->route('admin.capabilities.index');
    }
}
