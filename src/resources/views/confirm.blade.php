@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('contact')
<div class="contact-form__confirm">
    <div class="contact-form__header">
        <h2>Confirm</h2>
    </div>
    <form class="form">
        <div class="confirm-label">
            <table class="confirm-label__item" border="1">
                <tr>
                    <th>お名前</th>
                    <td>山田 太郎</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>男</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>test@example.com</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>08012345678</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>千駄ヶ谷マンション101</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>商品の交換について</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>届いた商品が注文した商品ではありませんでした。</td>
                </tr>
            </table>
            <div class="button">
                <button class="button-submit" type="submit">送信</button>
                <button class="change" type="">修正</button>
            </div>
        </div>
    </form>
</div>

@endsection