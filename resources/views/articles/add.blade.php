@extends('main.app')

@section('content')
<style>
    .form-error{
        border:1px solid red; 
    }
</style>
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    <form method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text"name="title"
                       class="form-control" 
                       value="{{ old('title') }}" >
            </div>

            <div class="form-group mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control">{{ old('body') }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="category">Category</label>
                <select name="category_id" id="category"class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category['id'] }}">
                            {{ $category['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <input type="submit"value="Add Article"class="btn btn-primary">
    </form>

</div>
@endsection