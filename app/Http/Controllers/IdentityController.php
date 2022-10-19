<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;

class IdentityController extends Controller
{

    static public function sub_text($text, $length)
    {
        if (strlen($text) > $length) 
        {
            $text_length = strpos($text, ' ', $length);
            $text_cut = substr($text, 0, $text_length) . '...';
            return $text_cut;
        }
        return $text;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identities = Identity::paginate(6);
        return view('pages.dashboard.identity.index', compact('identities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.identity.create');
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
            'phone' => $request->phone,
            'email' => $request->email,
            'about' => $request->about,
            'created_at' => now(),
        ]);

        return redirect()
            ->route('dashboard')
            ->with('status', "La présentation a bien été ajoutée.");
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
    public function edit(Identity $identity)
    {
        return view('pages.dashboard.identity.edit', compact('identity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Identity $identity)
    {
        $request->validate([
            'firstName' => 'required|max:30|string',
            'lastName' => 'required|max:30|string',
            'adress' => 'required|max:30|string',
            'city' => 'required|max:30|string',
            'zipCode' => 'required|digits:5',
            'email' => 'required|email',
            'phone' => 'required|digits:9',
            'about' => 'required',
        ]);

        //   $validate_img = $request->file('url_img')->store('img');
        $identity->update([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'adress' => $request->adress,
            'city' => $request->city,
            'zip_code' => $request->zipCode,
            'phone' => $request->phone,
            'email' => $request->email,
            'about' => $request->about,
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('identity.index')
            ->with('status', "La présentation a bien été modifiée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Identity $identity)
    {
        $identity->delete();
        return redirect()
            ->route('identity.index')
            ->with('status', "La présentation a bien été supprimée.");
    }
}
