@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm">
                            <a href="{{ route('company.create') }}" class="btn btn-secondary btn-block">Add new Company</a>
                        </div>
                        <div class="col-sm">
                            <a href="{{ route('category.create') }}" class="btn btn-secondary btn-block">Add new Category</a>
                        </div>
                        <div class="col-sm">
                            <a href="{{ route('pill.create') }}" class="btn btn-secondary btn-block">Add new Pill</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
