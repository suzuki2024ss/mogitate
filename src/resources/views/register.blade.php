<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<div class="container">
    <h1 class="mb-4">商品登録</h1>
    

    <form>

      <div class="mb-3">
        <label for="product-name" class="form-label">商品名</label>
        <input type="text" id="product-name" class="form-control" value="キウイ">
      </div>
      
      
      <div class="mb-3">
        <label for="price" class="form-label">値段</label>
        <input type="number" id="price" class="form-control" value="800">
      </div>

    
    <div class="mb-4 text-center">
      <img src="images/kiwi.png" alt="商品画像" class="img-fluid rounded mb-2" style="max-width: 200px;">
      <button class="btn btn-secondary btn-sm">ファイルを選択</button>
     
    </div>
    

<div class="contact-form__group">
    <label class="contact-form__label" for="category_id">
        季節<span class="contact-form__required">必須</span>
        <div class="contact-form__group">

    <div class="contact-form__checkbox-group">
        @foreach($seasons as $season)
            <label class="contact-form__checkbox-label">
                <input
                    type="checkbox"
                    name="season_ids[]"
                    value="{{ $season->id }}"
                    {{ in_array($season->id, old('season_ids', [])) ? 'checked' : '' }}>
                {{ $season->name }}
            </label>
        @endforeach
    </div>
</div>




      
      
      <div class="mb-3">
        <label for="description" class="form-label">商品説明</label>
        <textarea id="description" class="form-control" rows="4">栄養がたっぷりと含まれたキウイは海外から輸入されるフルーツで、甘さや酸味のバランスが特徴！</textarea>
      </div>
      
      
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-light">戻る</button>
        <button type="submit" class="btn btn-yellow">変更を保存</button>
      </div>
    </form>
  </div>


</body>

</html>