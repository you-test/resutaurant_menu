@extends('layouts.app')

@section('content')
    <div class="container mt-3" style="max-width: 720px;">
        <div class="text-right">
            <a href="{{ url('/product/create') }}">< 戻る</a>
        </div>

        <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="categoryAdd" class="font-weight-bold">カテゴリー編集</label>
                <input type="text" class="form-controll" id="categoryAdd" name="name" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary">編集</button>
        </form>

        <div class="my-4">
            <a href="{{ url('/category/') }}">>一覧ページ</a>
        </div>
    </div>
@endsection
