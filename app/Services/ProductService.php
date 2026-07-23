<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function index(Request $request)
    {
        return Product::query()

            // Always load the category
            ->with('category')

            // Filter by category
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })

            // Search by product name
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->search}%");
            })

            // Show newest products first
            ->latest()

            // Execute the query
            ->paginate(10);
    }

    public function store(array $data)

    {

        return product::create($data);
    }
}
