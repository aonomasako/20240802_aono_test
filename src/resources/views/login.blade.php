<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css')  }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Fashionably Late
                </a>
            </div>
            <div class="form__button">
                <button class="form__button--submit">register</button>
            </div>
        </div>
    </header>

    <main>
        <div class="content__form">
            <div class="content__form--header">
                <h2>Login</h2>
            </div>
        </div>
        <form class="form__group">
            <div class="form__group--title">
                <span class="form__label--item">メールアドレス</span>
            </div>
            <div class="form__label--input">
                <input type="email" name="email" placeholder="例:text@example.com">
            </div>
            <div class="form__group--title">
                <span class="form__label--item">パスワード</span>
            </div>
            <div class="form__label--input">
                <input type="password" name="password" placeholder="例:coachtechno6">
            </div>
            <div class="form__login">
                <button class="form__login--item">ログイン</button>
            </div>
        </form>
    </main>
</body>

</html>