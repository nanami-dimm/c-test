@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo"  >
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <p>Contact</p>
            </div>
            <form class="form" action="/confirm" method="post" id="submit">
              @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item-name">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content-name">
                        <div class="form__input--text">
                            <div class="form__input--text-left">
                            <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}"/>
                            </div>
                            <div class="form__input--text-right">
                            <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}"/>
                        </div>
                        </div>
                        <div class="form__error">
                          @error('first_name')
                          {{ $message }}
                          @enderror
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item-gender">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text-gender">
                            <input type="radio" nema="gender" value="male" value="{{ old('male') }}"><a>男性</a>
                            <input type="radio" nema="gender" value="female" value="{{ old('femail') }}"><a>女性</a>
                            <input type="radio" nema="gender" value="other" value="{{ old('other') }}"><a>その他</a>
                        </div>
                        <div class="form__error">
                            @error('gender')
                          {{ $message }}
                          @enderror
                        </div>
                </div>
            </div>   
            <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item-mail">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content-mail">
            <div class="form__input--text-mail">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
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
            <span class="form__label--item-tell">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content-tel">
            <div class="form__input--text-tell">
              <input type="tel" name="tel" placeholder="090" value="{{ old('tel') }}"/>
              <a>-</a>
              <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}"/>
              <a>-</a>
              <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}"/>
            </div>
            <div class="form__error">
              @error('tel')
                          {{ $message }}
                          @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item-adress">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-adress">
              <input type="text" name="adress" placeholder="例:東京都渋谷区千駄々谷1-2-3" value="{{ old('adress') }}"/>
            </div>
            <div class="form__error">
              @error('adress')
                          {{ $message }}
                          @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item-building">建物名</span>
            
          </div>
          <div class="form__group-content">
            <div class="form__input--text-building">
              <input type="text" name="building" placeholder="例:千駄々谷マンション101" value="{{ old('building') }}"/>
            </div>
            
            
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item-kind">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-kind">
                <form action="index.blade.php" method="POST" >
                  @csrf
                    <select name= "kind">
                      <option value="select">
                        選択してください</option>
                        <option value="send">商品のお届けについて</option>
                        <option value="exchange">商品の交換について</option>
                        <option value="trouble">商品トラブル</option>
                        <option value="inquiry">ショップへのお問い合わせ</option>
                        <option value="etc">その他</option>
                    </select>
                </form>
            </div>
            <div class="form__error">
              @error('kind')
                          {{ $message }}
                          @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item-detail">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea-detail">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
          <div class="form__error">
              @error('detail')
                          {{ $message }}
                          @enderror
            </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit" form="submit">確認画面</button>
        </div>
    </form>
    </div>
  </main>
</body>
