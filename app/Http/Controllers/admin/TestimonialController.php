<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonial\StoreRequest;
use App\Http\Requests\Testimonial\UpdateRequest;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials =Testimonials::query()->select('id','name','title','description')->get();
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'name'=>$request->input('name'),
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'position'=>$request->input('position'),
            'stars'=>(int)$request->input('stars'),
        ];
        $file = $request->file('image');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/Testimonials/'), $filename);
        $data['image'] = "storage/home/Testimonials/$filename";
        Testimonials::query()->create($data);
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonials::query()->find($id);
        return view('admin.testimonials.show',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonials::query()->find($id);
        return view('admin.testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $testimonial = Testimonials::query()->find($id);
        $data = [
            'name'=>$request->input('name'),
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'position'=>$request->input('position'),
            'stars'=>(int)$request->input('stars'),
        ];
        if (file_exists($request->file('image'))) {
            if ((file_exists(public_path($testimonial->image)))) {
                File::delete(public_path($testimonial->image));
            }
            $file = $request->file('image');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/Testimonial/'), $filename);
            $data['image'] = "storage/home/Testimonial/$filename";
        }
        $testimonial->update($data);
        return redirect()->route('admin.testimonials.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonials::query()->find($id);

        if ((file_exists(public_path($testimonial->image)))) {
            File::delete(public_path($testimonial->image));

            $testimonial->delete();
        }
        return redirect()->route('admin.testimonials.index');
    }
}
