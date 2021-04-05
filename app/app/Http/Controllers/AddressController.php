<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressByZipRequest;
use App\Models\Address;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * Class AddressController
 * @package App\Http\Controllers
 */
class AddressController extends Controller
{

    /**
     * @param AddressByZipRequest $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function getAddressByZip(AddressByZipRequest $request)
    {
        $validated = $request->validated();

        $collection = Address::where('zip' , $request->get('zip'))->get();
        $response = collect([
            'status' => 'success',
            'message' => 'addresses via zip',
            'count' => $collection->count(),
            'data' => $collection
        ]);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * @return JsonResponse
     */
    public function getAddressByCity()
    {
        $collection = Address::limit(5)->get();
        $response = collect([
            'status' => 'success',
            'message' => 'addresses via city',
            'count' => $collection->count(),
            'page' => 'TODO',
            'data' => $collection
        ]);

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }
}
