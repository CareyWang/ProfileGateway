@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">pref.yaml</div>

                <div class="card-body">
                    <pref-generator></pref-generator>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
