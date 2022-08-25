<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FrontController extends Controller
{
    public function index()
    {
        $data["js"] = [
            "httpGetQuoter" => route("service.quoter"),
            "http_send_mail" => route("envio_email.contact_email_async"),
        ];

        $data["services"] = Service::select("id", "name")->get();

        return view("front.index", compact("data"));
    }
}
