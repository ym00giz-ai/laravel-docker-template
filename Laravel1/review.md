# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か

#### SELECT * todos;

### Todoモデルのallメソッドの返り値は何か

#### todosテーブルの内容を記した連想配列

### 配列の代わりにCollectionクラスを使用するメリットは

#### 配列操作に優れているから(専用のメソッドがあり操作しやすい)

### view関数の第1・第2引数の指定と何をしているか

#### 第1引数は返り値を飛ばしたいbladeファイル名、第2引数に飛ばしたい内容を明記する

### index.blade.phpの$todos・$todoに代入されているものは何か

#### todosテーブルのデータ

## Todo作成機能

### Requestクラスのallメソッドは何をしているか

#### 配列としてRequestの内容を取得している

### fillメソッドは何をしているか

#### モデルのインスタンス (now Todo)に属性の指定をしている。

#### モデルのインスタンス (now Todo)に属性の指定をしている。

### $fillableは何のために設定しているか

#### 属性を指定するため

### saveメソッドで実行しているSQLは何か

#### CREAT TABLE

### redirect()->route()は何をしているか

#### routeで指定したURLのページに遷移させる

## その他

### テーブル構成をマイグレーションファイルで管理するメリット

#### 他の技術者とDBのテーブルを共有する際にマイグレーションファイルを渡すだけで同じ環境を作れるから

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか

#### php artisan migrateとphp artisan migrate:rollback

### Seederクラスの役割は何か

#### テーブルの内容を記載する

### route関数の引数・返り値・使用するメリット

#### 引数は->nameで任意に指定した変数(例：'todo.create'など)

#### 返り値はweb.phpのGETメソッドで記載した内容(例：TodoController@create)

### @extends・@section・@yieldの関係性とbladeを分割するメリット

1. @extendsでlayouts.baseを元にページを構成することを宣言

2. layouts.base内でcontentと明示している@yieldの箇所をindex.blade.php内の@sectionで同じくcontentと明示してる箇所に代入して一つのページを作っている

#### bladeを分割するメリットは保守性と可読性の向上のため

### @csrfは何のための記述か

#### csrf攻撃を避けるためにtokenの発行を行なっている

### {{ }}とは何の省略系か

#### <?php ?>