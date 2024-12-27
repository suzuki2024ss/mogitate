<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mogitate</title>
</head>

<body>

<form action="/products/search" method="GET">

    <input type="text" name="query" placeholder="検索キーワードを入力" value="{{ old('query') }}">
    <button type="submit">検索</button>
</form>




     
            <form action="/products/register" method="GET">
                <button type="submit">＋商品追加</button>
            </form>
        



<div id="sort-popup" style="display: inline-block; margin-left: 10px;">
    <button onclick="applySort('price_desc')">高い順に表示</button>
    <button onclick="applySort('price_asc')">低い順に表示</button>
</div>



<div id="tags">
    @if(request('sort'))
        <span class="tag">
            並び替え:
            {{ request('sort') === 'price_desc' ? '高い順' : '低い順' }}
            <button type="button" onclick="resetSort()">×</button>
        </span>
    @endif
</div>



<script>

    function applySort(sortType)
    {
        const form = document.getElementById('search-form');
        const sortInput = document.createElement('input');
        sortInput.type = 'hidden';
        sortInput.name = 'sort';
        sortInput.value = sortType;
        form.appendChild(sortInput);
        form.submit();
    }

    function resetSort()
    {
        const form = document.getElementById('search-form');
        form.submit();
    }
</script>



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








</body>

</html>
