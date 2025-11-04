# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか

#### <input type="hidden" name="_method" value="PUT">

### findメソッドの引数に指定しているIDは何のIDか

#### DBのid

### findメソッドで実行しているSQLは何か

#### $todo = $model->find($id);

### findメソッドで取得できる値は何か

#### DBのレコードの値

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか

#### Web.phpでのルーティングで切り替え得ている

## Todo論理削除

### traitとclassの違いとは

#### インスタンス化できるか(classは可)

### traitを使用するメリットとは

#### 複数指定の場所で実行できるか(traitは可)

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか

##### それぞれの処理がTodoController.phpで行われる際の最初に実行される

### RequestクラスからFormRequestクラスに変更した理由

#### Laravelで用意しているクラスを継承した新たなクラスを作りたかったため

### $errorsのhasメソッドの引数・返り値は何か

#### 引数は'content'

#### trueもしくはfalse

### $errorsのfirstメソッドの引数・返り値は何か

#### 引数は'content'

#### 返り値はmessageメソッド内の'ToDoが入力されていません。'もしくは'ToDoは :max 文字以内で入力してください。'

### フレームワークとは何か

#### よく使う機能をあらかじめまとめた開発の土台(雛形)

### MVCはどういったアーキテクチャか

#### クライアントsideからのリクエストをrootを通った後にModel・View・Controllerの3つの役割に分けて行う構造

### ORMとは何か、またLaravelが使用しているORMは何か

#### DBとClassを紐づけることでSQLを直接操作せずに操作できる方法。

#### LaravelではEloquentを使っている

### composer.json, composer.lockとは何か

#### プロジェクト設定ファイル。composer.lockで実際に使っているバージョンの情報が記載されている。

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか

#### vendorディレクトリ
