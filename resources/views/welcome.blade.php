@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
        <h1 class="display-1 text-center mt-5">Egazim Solution</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card border-0">
                <img src="{{ URL::to('/assets/images/finance_analytics.svg') }}" width="500" height="400" class="card-img-top" alt="woman shopping">
            </div>
        </div>
    </div>
</div>
@endsection
