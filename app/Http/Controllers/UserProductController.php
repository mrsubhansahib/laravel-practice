<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userProducts = UserProduct::with(['user', 'product'])->get();
        return view('user_products.index', ['userProducts' => $userProducts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('user_products.create', compact('users', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);
        UserProduct::create($validated);
        return redirect()->route('user_products.index')->with('success', 'User Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProduct $userProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProduct $userProduct)
    {
        return view('user_products.edit', ['userProduct' => $userProduct]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProduct $userProduct)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);
        $userProduct->update($validated);
        return redirect()->route('user_products.index')->with('success', 'User Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProduct $userProduct)
    {
        $userProduct->delete();
        return redirect()->route('user_products.index')->with('success', 'User Product deleted successfully.');
    }
}
