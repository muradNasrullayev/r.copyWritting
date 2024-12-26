<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $carts = Cart::with('plan')->get();
       return view('admin.cart.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plans = Plan::all();
        return view('admin.cart.create', compact('plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =[
            'title'=>$request->title,
            'amount'=>(int)$request->amount,
            'sub_title'=>$request->sub_title,
            'plan_id'=>$request->plan_id
        ];
        $file=$request->file('icon');
        $filename=time().'-'.$file->getClientOriginalName();
        $file->move(storage_path('/app/public/home/Cart/'), $filename);
        $data['icon'] = "storage/home/Cart/$filename";
        Cart::query()->create($data);
        return redirect()->route('admin.carts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cart = Cart::query()->findOrFail($id);
        return view('admin.cart.show', compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cart = Cart::query()->findOrFail($id);
        return view('admin.cart.edit', compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cart = Cart::query()->findOrFail($id);
        $data =[
            'title'=>$request->title,
            'amount'=>$request->amount,
            'sub_title'=>$request->sub_title,
            'plan_id'=>$request->plan_id
        ];
        if (file_exists($request->file('icon'))) {
            if ((file_exists(public_path($cart->icon)))) {
                File::delete(public_path($cart->icon));
            }
            $file = $request->file('icon');
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move(storage_path('/app/public/home/Cart/'), $filename);
            $data['icon'] = "storage/home/Cart/$filename";
        }
        $cart->update($data);
        return redirect()->route('admin.carts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = Cart::query()->findOrFail($id);
        if ((file_exists(public_path($cart->icon)))) {
            File::delete(public_path($cart->icon));
        }
        $cart->delete();
        return redirect()->route('admin.carts.index');
    }
}
