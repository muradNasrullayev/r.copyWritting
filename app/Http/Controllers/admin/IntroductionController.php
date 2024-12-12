<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Introduction\{UpdateRequest,StoreRequest};
use App\Models\Introduction;


class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $introductions = Introduction::query()->select('id','background_image','content')->get();
        return view('admin.introduction.index',compact('introductions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.introduction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data=[
            'content'=> $request->input('content'),
        ];
        $file = $request->file('background_image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/Introduction/'), $filename);
        $data['background_image'] = "storage/home/Introduction/$filename";
        Introduction::query()->create($data);
        return redirect()->route('admin.introduction.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $introduction = Introduction::query()->find($id);
        return view('admin.introduction.show',compact('introduction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $introduction = Introduction::query()->find($id);
        return view('admin.introduction.edit',compact('introduction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $introduction = Introduction::query()->find($id);
        $data=[
            'content'=> $request->input('content'),
        ];
        if (file_exists($request->file('background_image'))) {
            if ((file_exists(public_path($introduction->background_image)))) {
                File::delete(public_path($introduction->background_image));
            }
            $file = $request->file('background_image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/Introduction/'), $filename);
            $data['background_image'] = "storage/home/Introduction/$filename";
        }
        Introduction::query()->find($id)->update($data);
        return redirect()->route('admin.introduction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $introduction = Introduction::query()->find($id);
        if ((file_exists(public_path($introduction->background_image)))) {
            File::delete(public_path($introduction->background_image));
        } $introduction->delete();
        return redirect()->route('admin.introduction.index');

    }
}
