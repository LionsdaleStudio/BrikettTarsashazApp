@extends('layouts.app')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Házválasztó</h4>
                    <p class="card-text">Kérlek válassz egy házat</p>
                    <form action="{{route('house.index')}}" method="GET">
                        <div class="mb-3">
                            <select class="form-select form-select-lg" name="houses" id="houses" required>
                                <option value="" selected disabled>Kérlek válassz</option>
                                <option value="1">Rákóczi út</option>
                                <option value="2">Kenyeres utca</option>
                                <option value="3">Elmebetegek gyülekezete</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-primary">Tovább</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
