@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo"  >
                FashionablyLate
            </a>
        </div>
    
            <div class="login__button">
      <button class="login__button-submit" type="submit"><a class="login" href="/login">login</a></button>
    </div>
</header>

    <main>
        <div class="register__content">
            <div class="registe-form__heading">
                <p>Register</p>
            </div>
            <form class="form" action="/register" method="post">
                @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}"/>
        </div>
        <div class="form__error">
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
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}"/>
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
  
</div>
</main>
</body>
