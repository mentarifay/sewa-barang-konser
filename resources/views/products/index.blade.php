@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ url('/products/' . strtolower(str_replace(' ', '-', $product['name']))) }}">
                    {{ $product['name'] }}
                </a>
                - Rp{{ number_format($product['price'], 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
