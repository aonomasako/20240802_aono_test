@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('contact')
<div class="contact-form__content">
    <div class="contact-form__header">
        <h2>contact</h2>
    </div>
    <form class="form">
        <div class="form-group">
            <div class="form-group__title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--require">※</span>
            </div>
            <div class="form__input--text">
                <input type="text" name="name" placeholder="例:山田">
                <input type="text" name="name" placeholder="例:太郎">
            </div>
            <!--バリデーション -->
            <div class="form-group">
                <div class="form-group__title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--require">※</span>
                </div>
                <div class="form__input--text">
                    <input type="radio" name="gender">男性
                    <input type="radio" name="gender">女性
                    <input type="radio" name="gender">その他
                </div>
                <!--バリデーション　-->
                <div class="form-group">
                    <div class="form-group__title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--require">※</span>
                    </div>
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com">
                    </div>
                    <!--バリデーション-->
                    <div class="form-group">
                        <div class="form-group__title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--require">※</span>
                        </div>
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="080">
                            <input type="tel" name="tel" placeholder="1234">
                            <input type="tel" name="tel" placeholder="5678">
                        </div>
                        <!--バリデーション-->
                        <div class="form-group__title">
                            <span class="form__label--item">住所</span>
                            <span class="form__label--require">※</span>
                        </div>
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <!--バリデーション-->
                        <div class="form-group__title">
                            <span class="form__label--item">建物名</span>
                        </div>
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:千駄ヶ谷マンション101">
                        </div>
                        <div class="form-group__title">
                            <span class="form__label--item">お問い合わせの種類</span>
                            <span class="form__label--require">※</span>
                        </div>
                        <div class="form__input--text">
                            <select name="select">
                                <option value="選択してください">選択してください</option>
                                <option value="商品のお届けについて">商品のお届けについて</option>
                                <option value="商品の交換について">商品の交換について</option>
                                <option value="商品トラブル">商品トラブル</option>
                                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <!--バリデーション-->
                        <div class="form-group__title">
                            <span class="form__label--item">お問い合わせ内容</span>
                            <span class="form__label--require">※</span>
                        </div>
                        <div class="form__input--text">
                            <textarea name="textarea" cols="30" rows="3" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
    </form>
</div>
@endsection