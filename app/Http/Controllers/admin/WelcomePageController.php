<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WelcomePage\StoreRequest;
use App\Http\Requests\WelcomePage\UpdateRequest;
use App\Models\WelcomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WelcomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welcomes=WelcomePage::query()->select('id','title','content','background_image')->get();
        return view('admin.welcome-page.index',compact('welcomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.welcome-page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
        ];
        $file = $request->file('background_image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/welcomepage/'), $filename);
        $data['background_image'] = "storage/home/welcomepage/$filename";
        WelcomePage::query()->create($data);
        return redirect()->route('admin.welcomepage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $welcome=WelcomePage::query()->find($id);
        return view('admin.welcome-page.show',compact('welcome'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $welcome=WelcomePage::query()->find($id);
        return view('admin.welcome-page.edit',compact('welcome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $welcome=WelcomePage::query()->find($id);

        $data = ['title'=>$request->input('title'),'content'=>$request->input('content')];

        if(file_exists($request->file('background_image'))){
            $file = $request->file('background_image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/welcomepage/'), $filename);
            $data['background_image'] = "storage/home/welcomepage/$filename";
            if (file_exists(public_path($welcome->background_image))) {
                File::delete(public_path($welcome->background_image));
            }
        }
        WelcomePage::query()->find($id)->update($data);
        return redirect()->route('admin.welcomepage.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

    }
}
