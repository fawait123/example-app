<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::with('user')->get();
        return view('pages.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate(
            [
                "name"      => "required",
                "telp"     => "required",
                "gender"     => "required",
                "email"     => "required",
                "password"     => "required",
                'foto'           => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                "role" => "required",
                "password_confirmation" => "same:password"
            ],
            [
                'name.required'     => 'Nama Harus Terisi',
                'telp.required'        => 'No Telpon Harus Terisi',
                'gender.required'       => 'Jenis Kelamin Harus Terisi',
                'email.required'        => 'Email harus terisi',
                'password.required'           => 'Pasword Tidak Boleh Kosong',
                'foto.required'        => 'Silahkan Masukkan Foto',
                'role.required' => 'Role Harus Terisi',
                'password_confirmation.same' => "Password Tidak Sama"
            ]
        );
        $foto = $request->file('foto');
        $filename = $foto->hashName();
        $validate['foto'] = $filename;
        $foto->storeAs('public/foto', $foto->hashName());
        $storeUser = User::create($validatedData);
        $storeUser->member()->create($validatedData);
       // $storeUser->member()->save($request->all());
        return redirect()->route('category.index')->with(['message' => 'Category has been created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $id = $member->id;
        return view('pages.user.form', compact('member', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        if ($request->get('password') == '') {
            // $member->update($request->except('password'));
            $member->update($request->all());
            $member->user->update($request->except('password'));
        } else {
            $member->update($request->all());
            $member->user->update($request->all());
        }
        return redirect()->route('member.index')->with(['message' => 'member has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('member.index')->with(['message' => 'User has been deleted']);
    }
}
