<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashionably Late</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')  }}">
</head>

<main>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Fashionably Late
                </a>
            </div>
        </div>
    </header>
    <div class="contact__form">
        <div class="contact__form--header">
            <h2>Admin</h2>
        </div>
        <div class="form__contents">
            <div class="form__contents--item">
                <input type="text" name="name" placeholder="名前やメールアドレスを入力してください">
                <select name="select">
                    <option value="性別">性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
                <select name="select">
                    <option value="お問い合わせの種類">お問い合わせの種類</option>
                    <option value="商品のお届けについて">商品のお届けについて</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="商品トラブル">商品トラブル</option>
                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                    <option value="その他">その他
                    </option>
                </select>
                <label for="date">年/月/日</label>
                <input type="date" id="date" name="date">
                <button class="form__button">検索</button>
                <button class="form__button">リセット</button>
            </div>    
            <div class="form__contents--export">
                <button class="export">エクスポート</button>
            </div>
            <!--ページネーション-->
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button id="myModal" class="model">詳細</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button id="myModal" class="model">詳細</button></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button id="myModal" class="model">詳細</button></td>
                </tr>
            </table>
        </div>
    </div>
</main>

</html>