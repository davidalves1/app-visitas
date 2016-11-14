<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Address::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city_id' => 'required|integer|exists:cities,id',
            'street' => 'required|string',
            'number' => 'required|string',
            'neighborhood' => 'required|string',
            'complement' => 'string',
            'zip_code' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['create' => false], 422);
        }

        Address::create($request->all());

        return response()->json(['created' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::where('id', $id)
            ->with('city.state')
            ->firstOrFail();
        
        return response()->json($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'city_id' => 'required|integer|exists:cities,id',
            'street' => 'required|string',
            'number' => 'required|string',
            'neighborhood' => 'required|string',
            'complement' => 'string',
            'zip_code' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['updated' => false], 422);
        }

        Address::findOrFail($id)->update($request->all());

        return response()->json(['updated' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address::findOrFail($id)->delete();

        return response()->json(['deleted' => true]);
    }
}
