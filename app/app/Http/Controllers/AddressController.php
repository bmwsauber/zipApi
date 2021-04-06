<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressByCityRequest;
use App\Http\Requests\AddressByZipRequest;
use App\Models\Address;
use Illuminate\Http\JsonResponse;

/**
 * Class AddressController
 * @package App\Http\Controllers
 */
class AddressController extends Controller
{

    /**
     * Getting address' collection by Zip Code
     *
     * @param AddressByZipRequest $request
     * @return JsonResponse
     */
    public function getAddressByZip(AddressByZipRequest $request)
    {
        $zip = $request->get('zip');
        $collection = Address::where('zip', $zip)->get();

        $response = collect([
            'status' => 'success',
            'message' => 'addresses via zip',
            'count' => $collection->count(),
            'data' => $collection
        ]);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Getting address' collection by City
     *
     * @param AddressByCityRequest $request
     * @return JsonResponse
     */
    public function getAddressByCity(AddressByCityRequest $request)
    {
        $cityLetters = $request->get('cityLetters');
        $collection = Address::where('city', 'like', '%' . $cityLetters . '%')->get();

        $response = collect([
            'status' => 'success',
            'message' => 'addresses via zip',
            'count' => $collection->count(),
            'data' => $collection
        ]);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }
}
