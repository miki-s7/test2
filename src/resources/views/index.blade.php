<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            mogitate
        </div>
    </header>

    <main>
        <div class="products">
            <div class="item_search">
                <div class="">
                    <h2>商品一覧</h2>
                </div>
                <form class="form">
                    <div class="form__input--search">
                        <input type="search" name="name" placeholder="商品名で検索" />
                    </div>
                    <div class="form__button--search">
                        <button class="form__button-submit" type="submit">検索</button>
                    </div>
                </form>
                <div>
                    <div class="">
                        <h3>価格順で表示</h3>
                    </div>
                    <div>
                    <select class="item__search--price">
                        <option>価格で並べ替え</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="products__item--register">
                <div class="button__item__register">
                    <a class="item__register" href="/products/register">
                        + 商品の追加
                    </a>
                </div>
                <div class="products__item">
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                    <div class="item">4</div>
                    <div class="item">5</div>
                    <div class="item">6</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>