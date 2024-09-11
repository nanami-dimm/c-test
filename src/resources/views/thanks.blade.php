@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

<body>
  <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>

  <main>
    <div class="thanks__content">
      <div class="thanks__heading">
        <p>Thank you</p>
    </div>
    <div class="thanks__body">
        <p>お問い合わせありがとうございました  </p>
      </div>
      <div class="home__button">
            <button class="home__button-submit" type="submit" ><a href="/" id="return-to-top">HOME</a></button>
        </div>
    </div>
  </main>
</body>