@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo"  >
                FashionablyLate
            </a>
        </div>
            <div class="register__button">
      <button class="register__button-submit" type="submit"><a class="register" href="/register">register</a></button>
    </div>
</header>

    <main>
      <div class="background">
        <div class="login__content">
  <div class="login-form__heading">
    <h2>Login</h2>
  </div>
  <form class="form" action="/login" method="post">
    @csrf
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
          <input type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit" >ログイン</button>
    </div>
  </form>
  
</div>
</div>
</main>
</body>
