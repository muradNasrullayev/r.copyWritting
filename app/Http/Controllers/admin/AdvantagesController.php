<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Cart;
use Illuminate\Http\Request;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::with('cart')->get();

        return view('admin.advantages.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carts = Cart::all();
        return view('admin.advantages.create', compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =[
            'name'=>$request->input('title'),
            'cart_id'=>$request->input('cart_id'),
        ];
        Advantage::query()->create($data);
        return redirect()->route('admin.advantages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $advantage = Advantage::with('cart')->findOrFail($id);
        return view('admin.advantages.show', compact('advantage'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $advantage = Advantage::with('cart')->findOrFail($id);
        $carts = Cart::all();
        return view('admin.advantages.edit', compact('advantage', 'carts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=[
            'name'=>$request->input('title'),
            'cart_id'=>$request->input('cart_id'),
        ];
        $advantage = Advantage::query()->findOrFail($id);
        $advantage->update($data);
        return redirect()->route('admin.advantages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advantage = Advantage::query()->findOrFail($id);
        $advantage->delete();
        return redirect()->route('admin.advantages.index');
    }
}
