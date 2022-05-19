<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規作成画面</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/signup.css') }}" rel="stylesheet"> -->
</head>
<body>
  <div class="container">
    <form class="form-signin" method="POST" action="{{ route('store') }}">@csrf
      <h1 class="h3 mb-3 font-weight-normal">新規作成画面</h1>
        <div class="form-row">
          <div class="form-group">
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <label for="inputFirst_name">苗字(漢字)</label>
            <input type="first_name" class="form-control" id="inputFirst_name" name="first_name" placeholder="山田" required>
          </div>
          <div class="form-group">
            <label for="inputLast_name">名前(漢字)</label>
            <input type="last_name" class="form-control" id="inputLast_name" name="last_name" placeholder="太郎" required>
          </div>
          <div class="form-group">
            <label for="inputFirst_name_kana">苗字(カナ)</label>
            <input type="first_name_kana" class="form-control" id="inputFirst_name_kana" name="first_name_kana" placeholder="ヤマダ" required>
          </div>
          <div class="form-group">
            <label for="inputLast_name_kana">名前(カナ)</label>
            <input type="last_name_kana" class="form-control" id="inputLast_name_kana" name="last_name_kana" placeholder="タロウ" required>
          </div>
          <div class="form-group">
            <label for="inputPostal_code">郵便番号</label>
            <input type="postal_code" class="form-control" id="postal_code" name="postal_code" placeholder="1234567" required> 
          </div>
          <div class="form-group">
            <label for="inputAddress">住所</label>
            <input type="address" class="form-control" id="address" name="address" placeholder="東京都港区南青山５丁目８−８ 金子ビル 1F" required>
          </div>
          <div class="form-group">
            <label for="inputTelephone_number">電話番号</label>
            <input type="telephone_number" class="form-control" id="telephone_number" name="telephone_number" placeholder="09012345678" required>
          </div>
          <div class="form-group">
            <label>性別</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="gender" name="gender" value="1" >
              <label class="form-check-label" for="inlineRadio01">男性</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="gender" name="gender" value="2" >
              <label class="form-check-label" for="inlineRadio01">女性</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="gender" name="gender" value="3" >
              <label class="form-check-label" for="inlineRadio01">どちらでもない</label>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required autofocus>
          </div>
          <div class="form-group">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">新規登録</button>
    </form>
  </div>
</body>
</html>