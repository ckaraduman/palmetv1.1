@extends('layouts.app')

@section('content')

<h1>Cem-Home Blade Dosyası</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hoşgeldin {{$name}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
