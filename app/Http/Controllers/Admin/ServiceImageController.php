<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        ServiceImage::create($request->all());
        toastr()->success('Service Image is Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceImage $serviceImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceImage  $serviceImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceImage = ServiceImage::find($id);
        $serviceImage->delete();
        toastr()->success('Service Image Deleted Successfully');
        return redirect()->back();
    }
}
