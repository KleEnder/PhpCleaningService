<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddService;
Use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class Services extends Controller
{
    public function addService() {

        return View::make('service.add');

    }

    public function saveService(AddService $request) {

        $name = $request->get('service_name');
        $short_description = $request->get('service_short_desc');
        $description = $request->get('service_desc');
        $userId = Auth::user()->id;
        $alias = str_slug($name);


        $newService = Service::create([
            'service_name' => $name,
            'service_alias' => $alias,
            'user_id' => $userId,
            'short_description' => $short_description,
            'description' => $description,
        ]);

        //dump($userId);
        dd($newService);
        //die("nek error");

        return back();
    }

    public function listService() {
        $services = Service::all();

        return View::make('service.list', ["services" => $services]);
    }

    public function editService($id) {
        $service = Service::find($id);

        //dd($service);

        return View::make('service.edit', ["service" => $service]);
    }

    public function updateService($id, Request $request) {
        $service = Service::find($id);

        $name = $request->get('service_name');
        $short_description = $request->get('service_short_desc');
        $description = $request->get('service_desc');
        $alias = str_slug($name);

        $service->service_name = $name;
        $service->short_description = $short_description;
        $service->description = $description;
        $service->service_alias = $alias;

        //dd($service);
        $service->save();

        return back()->with("Success", "Data saved");

        return View::make('service.edit', ["service" => $service]);
    }
}
