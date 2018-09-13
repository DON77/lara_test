@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pills</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($pills as $pill)
                                <li class="list-group-item">
                                    {{ $pill->name }}
                                    @if($pill->image)
                                        <p>
                                            <img src="{{ $pill->image->path }}" alt="{{ $pill->name }}" class="img-thumbnail">
                                        </p>
                                    @endif
                                    <p>
                                        <strong>Company: </strong>
                                        {{ $pill->company->name }}
                                    </p>
                                    <p>
                                        <strong>Categories: </strong>
                                        {{ implode(', ',$pill->categories->pluck('name')->toArray()) }}
                                    </p>
                                    <p>
                                        <strong>Description: </strong>
                                        {{ $pill->description }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection