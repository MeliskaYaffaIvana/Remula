<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use Auth;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IDuser =Auth::user()->ID_user;
        $service = Service::with('user')->where('ID_user', $IDuser)->get();
        $paginate = Service::orderBy('ID_service', 'asc')->paginate(3);
        return view ('service.index', ['service' => $service, 'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $IDuser =Auth::user()->ID_user;
        $user = User::where('ID_user', $IDuser)->first();
        $service = Service::all();
        return view('service.create', compact('user', 'IDuser', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->service_name = $request->get('service_name');
        $service->description = $request->get('description');
        $service->price = $request->get('price');

        $user = new User;
        $user->ID_user = $request->get('IDuser');

        $service->user()->associate($user);
        $service->save();

        return redirect()->route('service.index')
        ->with('success', 'Service Successfuly Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ID_service)
    {
        $service = Service::with('user')->where('ID_service', $ID_service)->first();
        return view('service.detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ID_service)
    {
        $IDuser =Auth::user()->ID_user;
        $user = User::where('ID_user', $IDuser)->first();
        $service = Service::find($ID_service);
        return view('service.edit', compact('user', 'IDuser', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID_service)
    {
        $service =  Service::find($ID_service);
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->price = $request->price;

        $user = new User;
        $user->ID_user =  Auth::user()->ID_user;

        $service->user()->associate($user);
        $service->save();

        return redirect()->route('service.index')
        ->with('success', "Service Successfully Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID_service)
    {
        Service::find($ID_service)->delete();
        return redirect()->route('service.index')
        ->with('success', 'Service berhasil dihapus');
    }
}
