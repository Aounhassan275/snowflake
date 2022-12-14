<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'dune_bashing' => $request->dune_bashing?1:0,
            'belly_dance' => $request->belly_dance?1:0,
            'fire_show' => $request->fire_show?1:0,
            'sand_boarding' => $request->sand_boarding?1:0,
            'tanoura_show' => $request->tanoura_show?1:0,
            'refreshments' => $request->refreshments?1:0,
            'short_camel_ride' => $request->short_camel_ride?1:0,
            'photography' => $request->photography?1:0,
            'henaa_tattoo' => $request->henaa_tattoo?1:0,
        ]);
        $service = Service::create($request->all());
        foreach($request->images as $image)
        {
            ServiceImage::create([
                'image' => $image,
                'service_id' => $service->id
            ]);
        }
        toastr()->success('Service Created successfully');
        return redirect()->back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit')->with('service',$service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $service = Service::find($id);
        $request->merge([
            'dune_bashing' => $request->dune_bashing?1:0,
            'belly_dance' => $request->belly_dance?1:0,
            'fire_show' => $request->fire_show?1:0,
            'sand_boarding' => $request->sand_boarding?1:0,
            'tanoura_show' => $request->tanoura_show?1:0,
            'refreshments' => $request->refreshments?1:0,
            'short_camel_ride' => $request->short_camel_ride?1:0,
            'photography' => $request->photography?1:0,
            'henaa_tattoo' => $request->henaa_tattoo?1:0,
        ]);
        $service->update($request->all());
        toastr()->success('Service Informations Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        toastr()->success('Service Deleted Successfully');
        return redirect()->back();
    }
}
