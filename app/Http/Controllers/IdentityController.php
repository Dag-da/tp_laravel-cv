<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard.identity.index_identity');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.identity.create_identity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|max:30|string',
            'lastName' => 'required|max:30|string',
            'adress' => 'required|max:30|string',
            'city' => 'required|max:30|string',
            'zipCode' => 'required|digits:5',
            'email' => 'required|email',
            'phone' => 'required|digits:9',
            'about' => 'required|',
          ]);
          
        //   $validate_img = $request->file('url_img')->store('img');
          Identity::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'adress' => $request->adress,
            'city' => $request->city,
            'zip_code' => $request->zipCode,
            'phone' => '+33' . $request->phone,
            'email' => $request->email,
            'about' => $request->about,
            'created_at' => now(),
          ]);
      
          return redirect()
            ->route('dashboard')
            ->with('status', "Le film a bien été ajouté");
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
