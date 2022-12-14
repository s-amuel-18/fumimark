@extends('layouts.app')
@section('plugins.Select2', true)


@section('title', $data['title'])

@section('content_header')
    <h1>Nuevo Servicio</h1>
@stop

@section('content_2')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-light">
                <div class="card-header">
                    <h3 class="card-title">Formulario Nuevo Servicio</h3>
                </div>

                <div class="card-body ">
                    <form class="form_disabled_button_send" action="{{ route('service.store') }}" method="POST">

                        @method('POST')
                        @csrf

                        <div class="row">


                            {{-- Nombre servicio --}}
                            <div class="col-md-3">
                                <div class="input-group mb-3 ">
                                    <input type="text" name="name"
                                        class="form-control form-control-sm  @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="Nombre del servicio" autofocus>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fa fa-hand-holding-usd"></span>
                                        </div>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            {{-- precio --}}

                            <div class="col-md-3">
                                <div class="input-group mb-3 ">
                                    <input type="number" name="price"
                                        class="form-control form-control-sm  @error('price') is-invalid @enderror"
                                        value="{{ old('price') }}" placeholder="Precio" autofocus>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-dollar-sign text-success"></i>
                                        </div>
                                    </div>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- metros cuadrados --}}
                            <div class="col-md-3">
                                <div class="input-group mb-3 ">
                                    <input type="number" name="meter"
                                        class="form-control form-control-sm  @error('meter') is-invalid @enderror"
                                        value="{{ old('meter') }}" placeholder="Metros cuadrados" autofocus>

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa fa-ruler-combined"></i>
                                        </div>
                                    </div>

                                    @error('meter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-3">
                                <button class="btn bg-purple btn-sm" type="submit">
                                    <i class="fas fa-plus-square"></i> Crear Nuevo Servicio
                                </button>
                            </div>


                        </div>

                </div>

                </form>
            </div>
        </div>
        <!-- /.card -->
    </div>

    </div>
@stop
