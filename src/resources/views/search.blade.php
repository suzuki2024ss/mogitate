<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
</head>

<body>




<form action="search" method="GET">
    <input type="text" name="query" placeholder="商品名を検索" value="{{ old('query') }}">
    <button type="submit">検索</button>
</form>


<table>

    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
           <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">


            </td>
        </tr>
    @endforeach
</table>



<div id="sort-popup">
    <button onclick="applySort('price_desc')">高い順に表示</button>
    <button onclick="applySort('price_asc')">低い順に表示</button>
</div>


<div id="tags">
    @if(request('sort'))
        <span class="tag">
            並び替え: 
            {{ request('sort') === 'price_desc' ? '高い順' : '低い順' }}
            <button onclick="resetSort()">×</button>
        </span>
    @endif
</div>

