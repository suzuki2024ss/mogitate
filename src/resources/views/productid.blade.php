<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mogitate</title>
</head>





<body>

  <div class="container">
    <h1 class="mb-4">商品詳細・商品変更画面</h1>
    
    <!-- 商品画像 -->
    <div class="mb-4 text-center">
      <img src="images/kiwi.png" alt="商品画像" class="img-fluid rounded mb-2" style="max-width: 200px;">
      <button class="btn btn-secondary btn-sm">ファイルを選択</button>
      <p class="text-muted mt-2">image01.jpg</p>
    </div>
    
    <!-- 商品編集フォーム -->
    <form>
      <!-- 商品名 -->
      <div class="mb-3">
        <label for="product-name" class="form-label">商品名</label>
        <input type="text" id="product-name" class="form-control" value="キウイ">
      </div>
      
      <!-- 値段 -->
      <div class="mb-3">
        <label for="price" class="form-label">値段</label>
        <input type="number" id="price" class="form-control" value="800">
      </div>
      

      
      <!-- 商品説明 -->
      <div class="mb-3">
        <label for="description" class="form-label">商品説明</label>
        <textarea id="description" class="form-control" rows="4">栄養がたっぷりと含まれたキウイは海外から輸入されるフルーツで、甘さや酸味のバランスが特徴！</textarea>
      </div>
      
      <!-- ボタン -->
      <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-light">戻る</button>
        <button type="submit" class="btn btn-yellow">変更を保存</button>
      </div>
    </form>
  </div>

</body>
</html>