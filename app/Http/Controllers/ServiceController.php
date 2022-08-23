<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Servicios";

        $data["services"] = Service::paginate(10);

        $data["all_services"] = Service::select("id", "name")->get();

        $data["js"] = [
            "httpGetQuoter" => route("service.quoter"),
            "http_send_mail" => route("envio_email.contact_email_async"),
        ];

        return view("admin.services.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Servicios";

        $data["categories"] = CategoryService::get();


        return view("admin.services.create", compact("data"));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            "name" => "required|max:255|string",
            "price" => "required|numeric|max:1000000",

        ]);

        $service = auth()->user()->services()->create([
            "name" => $data["name"],
            "price" => $data["price"],
            "category_id" => $data["category_id"] ?? 0,
        ]);


        $message = [
            "message" => "El Servico <b>{$service->name}</b> Se ha creado correctamente.",
            "color" => "success",
            "category_id" => "far fa-check-circle"
        ];

        return redirect()->route("service.index")->with("message", $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($service_id)
    {
        $service = Service::findOrFail($service_id);

        $data['title'] = "Servicios";
        $data['service'] = $service;

        $data["categories"] = CategoryService::get();


        return view("admin.services.edit", compact("data"));
    }

    public function quoter(Request $request)
    {
        // dd($request->all());
        $data_validate = request()->validate([
            "services_id" => "required|array|min:1|exists:services,id",
            "meters" => "required|numeric|min:1",
        ]);

        $services_id = $data_validate["services_id"];

        $services = Service::whereIn("id", $services_id)->get();
        $meters = $data_validate["meters"];

        $services_with_quoter = $services->map(function ($serv) use ($meters) {
            try {
                $priceMeters = ((($meters * 100) / $serv->meter) * 0.01) * $serv->price;
            } catch (\Throwable $th) {
                $priceMeters = 0;
            }

            return [
                "id" => $serv->id,
                "name" => $serv->name,
                "service_with_meter" => $serv->meter,
                "price" => $serv->price,
                "price_format" => number_format($serv->price, 2),
                "meters_requested" => $meters,
                "price_with_meters_requested" => $priceMeters,
                "price_with_meters_requested_format" => number_format($priceMeters, 2)
            ];
        });

        $total_quoter = $services_with_quoter->sum("price_with_meters_requested");

        $data_response = [
            "services" => $services_with_quoter,
            "total_pay" => $total_quoter,
            "total_pay_format" => number_format($total_quoter, 2),
        ];

        if ($request["pdf_budget"] ?? null) {
            return (new PdfController)->cotizacion($data_response);
        } else {
            return $data_response;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $service_id)
    {
        $data = request()->validate([
            "name" => "required|max:255|string",
            "price" => "required|numeric|max:1000000",

        ]);

        $service = Service::findOrFail($service_id);

        $service->update([
            "name" => $data["name"],
            "price" => $data["price"],
            "category_id" => $data["category_id"] ?? 0,
        ]);

        $message = [
            "message" => "El Servico <b>{$service->name}</b> Se ha editado correctamente.",
            "color" => "success",
            "category_id" => "far fa-check-circle"
        ];

        return redirect()->route("service.index")->with("message", $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        $service = Service::findOrFail($service_id);

        $service->delete();

        $message = [
            "message" => "El Servico <b>{$service->name}</b> Se ha eliminado correctamente.",
            "color" => "success",
            "icon" => "far fa-check-circle"
        ];

        return redirect()->back()->with("message", $message);
    }
}
