<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blogs\StoreRequest;
use App\Models\Blogs;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogsTitle = Blogs::query()->select('*')->first();
        $blogs =Blogs::query()->select('*')->where('id','>',1)->get();
        return view('admin.blogs.index', compact('blogs','blogsTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $blog = Blogs::query()->find(1)->first();
        $data=[
            'title'=>$blog->title,
            'description'=>$blog->description,
            'subTitle'=>$request->input('subTitle'),
            'subDescription'=>$request->input('subDescription'),

        ];
        $file = $request->file('icon');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/Blogs/'), $filename);
        $data['icon'] = "storage/home/Blogs/$filename";
        Blogs::query()->create($data);
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blogs::query()->find($id);
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if ($id==1){
            $blog=Blogs::query()->find(1);
            return view('admin.blogs.titleEdit', compact('blog'));
        }
        $blog = Blogs::query()->find($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        return $request;
        if($id==1){
            $request->validate([
                'title' => 'required|min:3|max:255|string',
                'description' => 'required|min:3|max:255|string',
            ]);
            $blog = Blogs::query()->find(1);
            $data=[
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'subTitle'=>'...........',
                'subDescription'=>'..............',
                'icon'=>'..............'
            ];
            $blog->update($data);
            return redirect()->route('admin.blogs.index');
        }
        else {
            $request->validate([
                'subTitle' => 'required|min:3|max:255|string',
                'subDescription' => 'required|min:3|max:255|string',
            ]);
            $blog = Blogs::query()->find($id);
            $data = [
                'subTitle' => $request->input('subTitle'),
                'subDescription' => $request->input('subDescription'),
            ];
            if (file_exists($blog->icon)) {
                if (file_exists(public_path($blog->icon))) {
                    File::delete(public_path($blog->icon));
                }
            }
            $file = $request->file('icon');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/Blogs/'), $filename);
            $data['icon'] = "storage/home/Blogs/$filename";
            $blog->update($data);
            return redirect()->route('admin.blogs.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blogs::query()->find($id);
        if(file_exists($blog->icon)){
            if (file_exists(public_path($blog->icon))){
                File::delete(public_path($blog->icon));
            }
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
