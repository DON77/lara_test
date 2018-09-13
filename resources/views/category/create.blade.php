@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Category</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="category_form" action="{{ route('category.store') }}" method="post" onsubmit="checkForm(event)">
                            @csrf()
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Type name here...">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('footer-scripts')--}}
    {{--<script>--}}
        {{--function checkForm(e) {--}}
            {{--e.preventDefault()--}}
        {{--}--}}
    {{--</script>--}}
{{--@endsection--}}