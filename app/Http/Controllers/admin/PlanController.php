<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plan\StoreRequest;
use App\Http\Requests\Plan\UpdateRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plan.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'plan_name'=>$request->input('plan_name')
        ];
        Plan::query()->create($data);
        return redirect()->route('admin.plans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $plan=Plan::query()->find($id);
        return view('admin.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $plan=Plan::query()->find($id);
        $data = [
            'plan_name'=>$request->input('plan_name')
        ];
        $plan->update($data);
        return redirect()->route('admin.plans.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plan=Plan::query()->find($id);
        $plan->delete();
        return redirect()->route('admin.plans.index');
    }
}
