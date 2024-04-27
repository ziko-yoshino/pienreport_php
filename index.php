<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>データ登録</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                <legend>ぴえんレポート</legend>
  <div id="column-method" class="column-method">
      <div id="memo" contenteditable="true"></div>
      <input type="hidden" name="id" value="ここにIDを設定">
      <label for="situation"><input type="text" name="situation"placeholder="状況"></label>
      <label for="feelings"><input type="text" name="feelings"placeholder="感情"></label>
      <label for="thoughts"><input type="text" name="thoughts" placeholder="考え"></label>
      <label for="evidence"><input type="text" name="evidence"placeholder="考えの根拠"></label>
      <label for="contraryThoughts"><input type="text" name="contraryThoughts"placeholder="考えを否定する別の考え"></label>
      <label for="balancedView"><input type="text" name="balancedview"placeholder="バランスの取れた見方"></label>
      <button id="analyzeEmotion">感情分析</button>
      <div id="emotionScore">感情スコア: 未分析</div>
          <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->


    </body>
</html>
