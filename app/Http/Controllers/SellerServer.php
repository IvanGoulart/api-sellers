<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Seller;
use App\Models\SellerAmounts;
use App\Models\User;
use Illuminate\Http\Request;

class SellerServer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sellers = Seller::all();

        // $sellerAmount = Seller::with('amounts')->get();

        return response()->json($sellers);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $seller = new Seller;
            $seller->name = $request->name;
            $seller->email = $request->email;
            $seller->save();

        } catch (\Exception $e) {

            $return = [
                "messages" => [
                    "code" => "422",
                    "message" => $e->getMessage(),
                ]
            ];
            // Retorna a mensagem
            return response()->json($return);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
