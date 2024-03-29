<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this import
use App\Models\Service;
use App\Models\Location;
use App\Models\Doctor;

class SearchController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('apnadental.index', ['services' => $services]);
    }

    public function searchDoctors(Request $request)
    {
        $locationId = $request->input('location_id');
        $doctors = Doctor::where('location_id', $locationId)->get();
        return response()->json(['doctors' => $doctors]);
    }

    public function searchLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $radius = 50; // Radius in kilometers

        // Calculate haversine distance and filter locations within the radius
        $locations = Location::select('id', 'latitude', 'longitude', 'locality', 'service_id')
            ->selectRaw("(6371 * acos(cos(radians($latitude)) 
                * cos(radians(latitude)) * cos(radians(longitude) 
                - radians($longitude)) + sin(radians($latitude)) 
                * sin(radians(latitude)))) AS distance")
            ->having('distance', '<', $radius)
            ->orderBy('distance', 'asc')
            ->get();

        // Collect unique service IDs from the filtered locations
        $serviceIds = $locations->pluck('service_id')->unique();

        // Retrieve services associated with the filtered locations
        $services = Service::whereIn('id', $serviceIds)->get();

        return response()->json(['services' => $services]);
    }
}
