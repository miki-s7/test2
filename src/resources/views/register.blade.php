<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header>
    <div class="header">
      mogitate
    </div>
  </header>

  <main>
    <div class="register-form__content">
      <div class="register-form__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="商品を入力" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
              @error('name')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}" />
            </div>
            <div class="form__error">
              @error('price')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <input type="file" name="photo" value="{{ old('photo') }}" />
            <div class="form__error">
              @error('photo')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須</span>
            <span class="form__label--text">複数選択可</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--checkbox">
              <label>
                <input type="checkbox" name="season" value="{{ old('season') }}">春
              </label>
              <label>
                <input type="checkbox" name="season" value="{{ old('season') }}">夏
              </label>
              <label>
                <input type="checkbox" name="season" value="{{ old('season') }}">秋
              </label>
              <label>
                <input type="checkbox" name="season" value="{{ old('season') }}">冬
              </label>
            </div>
            <div class="form__error">
              @error('season')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="商品説明を入力" value="{{ old('content') }}" ></textarea>
            </div>
            <div class="form__error">
              @error('content')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-return" type="">戻る</button>
          <button class="form__button-submit" type="submit">登録</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
