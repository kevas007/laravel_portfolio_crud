<?php

namespace App\Http\Controllers;

use App\Models\PortfoilioImageDimayque;
use Illuminate\Http\Request;

class PortfoilioImageDimayqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dynamiques = PortfoilioImageDimayque::all();

        return view('backend.pages.portfolio', compact('dynamiques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolio-cud.portfolioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new PortfoilioImageDimayque;
        $store->image =$request->image;
        $store->lienImage =$request->lienImage;
        $store->lienDetails =$request->lienDetails;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfoilioImageDimayque  $portfoilioImageDimayque
     * @return \Illuminate\Http\Response
     */
    public function show(PortfoilioImageDimayque $portfoilioImageDimayque, $id)
    {
        $show = PortfoilioImageDimayque::find($id);
        return view("backend.pages.portfoliodynamique-cud.portfolioShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfoilioImageDimayque  $portfoilioImageDimayque
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfoilioImageDimayque $portfoilioImageDimayque, $id)
    {

        $edit = PortfoilioImageDimayque::find($id);
        return view('backend.pages.portfoliodynamique-cud.portfolioEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfoilioImageDimayque  $portfoilioImageDimayque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfoilioImageDimayque $portfoilioImageDimayque, $id)
    {

        $update = PortfoilioImageDimayque ::find($id);
        $update->image  = $request->image ;
        $update->lienImage = $request->lienImage;
        $update->lienDetails = $request->lienDetails;
        $update->save();
        return redirect('/backend.backOffice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfoilioImageDimayque  $portfoilioImageDimayque
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfoilioImageDimayque $portfoilioImageDimayque,$id)
    {
        $destroy = PortfoilioImageDimayque::find($id);
        $destroy->delete();
        return redirect("/backend.backOffice");
    }
}
