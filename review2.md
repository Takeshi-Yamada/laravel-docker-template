# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
ページ上は出力されていないが、htmlのコードとしては以下が出力されている。
<input type="hidden" name="_method" value="PUT">

formタグのmethodがPOSTかGET属性のみしか入れれ無いので、
PUTのHTTPリクエストを送りたい場合に@method('PUT')が必要。

### findメソッドの引数に指定しているIDは何のIDか
表示しているレコードのid(URLにも使われている)

### findメソッドで実行しているSQLは何か
SELECT * FROM todos WHERE id=引数

### findメソッドで取得できる値は何か
todoのレコード

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
idがあるか（既にレコードがあるか）を基準に切り替えている

## Todo論理削除

### traitとclassの違いとは
traitはclassにプロパティやメソッドを追加するための機能
classと違ってインスタンス化ができないが、複数のトレイトを追加できる。

### traitを使用するメリットとは
複数のクラス間でコードを共通化・再利用することが可能になる。

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
TodoControllerが呼びだされたタイミング

### RequestクラスからFormRequestクラスに変更した理由
RequestはHTTPリクエストに関するものを受け渡しするもので
中身のバリデーションの設定を行うためFormRequestクラスに変更を行った。

### $errorsのhasメソッドの引数・返り値は何か
引数：バリデーションを行ったカラムの名前
返り値：boolean（True / False）

### $errorsのfirstメソッドの引数・返り値は何か
引数：バリデーションを行ったカラムの名前
返り値：エラーメッセージ

### フレームワークとは何か
基本的な処理をあらかじめ用意している仕組み
PHP→Laravel、Ruby→Rails、Java→Spring boot等

### MVCはどういったアーキテクチャか
Model（DBとの通信）、View（ページの見た目）、Controller（内部処理）
の３つに機能と責任を分けたアーキテクチャ

### ORMとは何か、またLaravelが使用しているORMは何か
SQLにコードを自動的に変換してくれる仕組み
LaravelのORMはEloquent
直感的かつ短く書けるのがメリット

### composer.json, composer.lockとは何か
ライブラリやパッケージを管理してくれる。
依存関係を気にせずインストールができる。

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendorディレクトリに保管される