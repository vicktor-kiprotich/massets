<?php

namespace App\Http\Controllers\API;

use App\AssetsModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    // Display a listing of the resources.
    public function index()
    {
        // Retrieve all assets from the database
        $assets = AssetsModel::all();

        // Return the assets as a JSON response
        return response()->json(['status' => true, 'message' => 'Data fetched in successfully', 'data' => $assets]);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:1,2,3,4,5,6',
            // Add other fields you want to validate
        ]);

        // Create a new asset using the request data
        $asset = AssetsModel::create($request->all());

        // Return the newly created asset as a JSON response with a 201 status code
        return response()->json($asset, 201);
    }

    // Display the specified resource.
    public function show($id)
    {
        // Find the asset by its ID
        $asset = AssetsModel::where('assettag', $id)->orWhere('serial', $id)->firs();

        // If the asset doesn't exist, return a 404 response
        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404);
        }

        // Return the found asset as a JSON response
        return response()->json(['status' => true, 'message' => 'Data fetched in successfully', 'data' => $asset]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Find the asset by its ID
        $asset = AssetsModel::find($id);

        // If the asset doesn't exist, return a 404 response
        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404);
        }

        // Validate the request data
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|in:1,2,3,4,5,6',
            // Add other fields you want to validate
        ]);

        // Update the asset with the request data
        $asset->update($request->all());

        // Return the updated asset as a JSON response
        return response()->json($asset);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        // Find the asset by its ID
        $asset = AssetsModel::find($id);

        // If the asset doesn't exist, return a 404 response
        if (!$asset) {
            return response()->json(['error' => 'Asset not found'], 404);
        }

        // Delete the asset
        $asset->delete();

        // Return a 204 response indicating the resource was deleted
        return response()->json(null, 204);
    }
}
