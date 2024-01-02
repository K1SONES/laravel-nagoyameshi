<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
 
        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('restaurants.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new restaurant();
        $restaurant->restaurant_name = $request->input('restaurant_name');
        $restaurant->postal_code = $request->input('postal_code');
        $restaurant->address = $request->input('address');
        $restaurant->phone = $request->input('phone');
        $restaurant->opening_hour = $request->input('opening_hour');
        $restaurant->regular_holiday = $request->input('regular_holiday');
        $restaurant->category_id = $request->input('category_id');
        $restaurant->save();

        return to_route('restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show',compact('resutaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->restaurant_name = $request->input('restaurant_name');
        $restaurant->postal_code = $request->input('postal_code');
        $restaurant->address = $request->input('address');
        $restaurant->phone = $request->input('phone');
        $restaurant->opening_hour = $request->input('opening_hour');
        $restaurant->regular_holiday = $request->input('regular_holiday');
        $restaurant->update();
        
        return to_route('restaurants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
