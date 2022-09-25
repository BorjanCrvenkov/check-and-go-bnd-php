<?php

namespace App\Http\Controllers;

use App\Models\MenuItemTag;
use App\Http\Requests\StoreMenuItemTagRequest;
use App\Http\Requests\UpdateMenuItemTagRequest;

class MenuItemTagController extends Controller
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
     * @param  \App\Http\Requests\StoreMenuItemTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuItemTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItemTag  $menuItemTag
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItemTag $menuItemTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuItemTag  $menuItemTag
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuItemTag $menuItemTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuItemTagRequest  $request
     * @param  \App\Models\MenuItemTag  $menuItemTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuItemTagRequest $request, MenuItemTag $menuItemTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItemTag  $menuItemTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItemTag $menuItemTag)
    {
        //
    }
}
