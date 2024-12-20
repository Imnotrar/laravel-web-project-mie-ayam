{{-- resources/views/menus/create.blade.php --}}

@extends('layouts.admin')

@section('title', 'Create New Menu')

@section('content')
<div class="container">
    <h1 class="my-4">Create New Menu</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_menu">Menu Name</label>
            <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="{{ old('nama_menu') }}" required>
        </div>

        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga') }}" required step="0.01" min="0">
        </div>

        <div class="form-group">
            <label for="deskripsi">Description</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="4">{{ old('deskripsi') }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Create Menu</button>
            <a href="{{ route('menus.index') }}" class="btn btn-secondary">Back to Menu List</a>
        </div>
    </form>
</div>
@endsection