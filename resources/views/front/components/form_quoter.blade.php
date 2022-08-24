<form action="" id="form_budget">
    <div class="offset-md-2 col-md-8 p-0">
        <div class="row no-gutters">
            {{-- Servicios --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="budgetSelect">Elegir los servicios</label>

                    <div class="">

                        <select name="services" id="services"
                            class="w-100 event_change_quoter form-control form-control-lg select2" multiple="multiple"
                            style="width: 100%">
                            {{-- <option value=""></option> --}}
                            @foreach ($data['services'] as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- metros del establecimiento --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="budgetSelect">Metros del establecimiento</label>

                    <input type="number" min="0" name="meters" id="meters"
                        class="event_change_quoter form-control form-control-lg " value=""
                        placeholder="Metros del establecimiento">
                </div>
            </div>

            {{-- total --}}
            <div class="col-md-12">
                <div class="form-group mb-3 ">
                    <label for="total">Total costo del presupuesto</label>

                    <input id="total_pay" type="text" name="total" class="form-control form-control-lg"
                        placeholder="Total presupuesto" readonly value="0.00">
                </div>
            </div>

        </div>

        <button type="submit" target="_blanck" href="{{ route('pdf.services') }}"
            class="btn btn-danger p-3 btn-lg btn-block font-weight-bold w-100 dd2">Solicitar cotización
        </button>
    </div>
</form>
