<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    //Dependency injection of the ProductService class into the ProductController class. 


    public function __construct(
        private ProductService $productService
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = $this->productService->index($request);

        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $product = $this->productService->store($request->validated());
        return new productResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        $product = $this->productService->show($product);
        return new productResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
