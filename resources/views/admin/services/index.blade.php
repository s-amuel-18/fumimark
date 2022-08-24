@extends('layouts.app')
@section('plugins.Datatables', true)
@section('plugins.Select2', true)
@section('plugins.Sweetalert2', true)


@section('title', $data['title'])

@section('content_header')
    <h1>{{ $data['title'] }}</h1>

@stop

@section('content_2')
    <style>
        .error {
            color: red;
            font-size: smaller;
            margin-bottom: 3px;
            display: block;
        }
    </style>
    <div class="card card-body table-responsive">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="card-title">Servicios: <b class="text-muted">1000</b></h3>

            <div class="">
                @if ($data['services']->count() > 0)
                    <a href="{{ route('pdf.services') }}" target="_blanck" class="btn btn-danger btn-sm mr-1">
                        <i class="fas fa-file-pdf"></i> <span class="d-none d-md-inline-block ">Descargar servicios</span>
                    </a>
                @endif
                <button type="button" class="btn btn-sm btn-primary   mr-1" data-toggle="modal"
                    data-target="#modal_quoter">
                    <i class="fas fa-plus"></i> <span class="d-none d-md-inline-block ">Crear presupuesto</span>
                </button>


                <a href="{{ route('service.create') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i> <span class="d-none d-md-inline-block ">Crear servicio</span>
                </a>
            </div>
        </div>


        <div class="">
            <div class="table-responsive">
                <table class="table table-light table-striped table-hover text-nowrap table-valign-middle">
                    <thead class="">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Servicio</th>
                            <th>Precio</th>
                            <th>Metros Cuadrados</th>
                            <th>Creacion</th>
                            <th>Botones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data['services'] as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>{{ $service->user ? $service->user->username : 'Sin usuario' }}</td>
                                <td>{{ $service->name }}</td>
                                <td>
                                    {{ number_format($service->price, 2) }} <i class="fas fa-dollar-sign text-success"></i>
                                </td>
                                <td>{{ $service->meter }}</td>


                                <td>{{ $service->created_at->format('Y-m-d H:i:s') }}</td>
                                <td style="width: 110px">
                                    <a href="{{ route('service.edit', ['servicio' => $service->id]) }}"
                                        class="btn btn-outline-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form class="d-inline"
                                        onsubmit="return confirm('Realmente Deseas Eliminar Este servicio')"
                                        action="{{ route('service.destroy', ['servicio' => $service->id]) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                    </form>

                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <div class="mt-3 d-flex justify-content-end">
                {{ $data['services']->onEachSide(-1)->links() }}
            </div>
        </div>


    </div>


    <!-- Modal presupuesto -->
    <div class="modal" id="modal_quoter" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"
        data-focus="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crear presupuesto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  ">
                    <form id="form_budget" action="">
                        <div class="">


                            <div class="row">
                                {{-- Servicios --}}
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div class="" id="alert_error_budget"></div>
                                        <label for="budgetSelect">Elegir los servicios</label>

                                        <select name="services" id="services"
                                            class="event_change_quoter form-control select2" multiple="multiple"
                                            style="width: 100%">
                                            @foreach ($data['all_services'] as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                {{-- Metros --}}
                                <div class="col-md-6">
                                    <label for="metros">Introducir los Metros cuadrados</label>
                                    <div class="input-group form-group mb-3 ">

                                        <input type="number" min="0" name="meters" id="meters"
                                            class="event_change_quoter form-control " value=""
                                            placeholder="Metros cuadrados">

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-external-link-square-alt"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- Total --}}
                                <div class="col-md-6">
                                    <label for="total"> Total costo del presupuesto</label>
                                    <div class="input-group mb-3 ">

                                        <input id="total_pay" type="text" name="total" class="form-control"
                                            placeholder="Total presupuesto" readonly>

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span id="icon_total" class="toggle_show fas fa-dollar-sign"></span>
                                                <div id="loader_total"
                                                    class="toggle_show d-none spinner-border spinner-border-sm text-muted"
                                                    role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- email --}}
                                <div class="col-md-6">
                                    <label for="budget_email">Introducir el email para enviar el prespuesto</label>
                                    <div class="input-group form-group ">
                                        <input type="email" optional name="email" id="budget_email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" placeholder="Correo Electronico" autofocus>

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-mail-bulk"></span>
                                            </div>
                                        </div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- NOMBRE --}}
                                <div class="col-12">
                                    <label for="budget_email">Introducir nombre del cliente</label>
                                    <div class="input-group form-group ">
                                        <input type="text" optional name="name" id="budget_name"
                                            class="form-control " value="" placeholder="Nombre Cliente" autofocus>

                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn  bg-red btn-sm ml-auto mt-3" type="submit">
                                            <i class="fas fa-mail-bulk"></i> Enviar presupuesto
                                        </button>
                                    </div>

                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>








        @push('js')
            <script>
                const appData = @json($data['js']);
                const services = document.getElementById("services");
                const meters = document.getElementById("meters");
                const total_pay = document.getElementById("total_pay");
                const httpGetQuoter = appData["httpGetQuoter"];
                const http_send_mail = appData["http_send_mail"];
                const budget_email = document.getElementById("budget_email");
                const budget_name = document.getElementById("budget_name");
            </script>
            <script src="{{ asset('js/Plugins/axios.min.js') }}"></script>
            <script src="{{ asset('js/Plugins/clipboard.min.js') }}"></script>
            <script src="{{ asset('js/services/functions.js') }}"></script>
            <script src="{{ asset('js/services/select2-custom.js') }}"></script>
            <script src="{{ asset('js/services/services.js') }}"></script>
            <script src="{{ asset('js/services/validate.js') }}"></script>
        @endpush
    @stop
