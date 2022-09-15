<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    
</head>
<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="index-item">
            <a href="tasks/{{ $task->id }}">{{ $task->title }}</a>
            <form action="/tasks" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する">
            </form>
        </div>
    @endforeach
<hr>
    <h1>新規タスク投稿</h1>
    <form action="/tasks" method="post">
    <div>
    <label for="title">タイトル</label>
    <input type="text" name="title" value={{ old('title') }}> 
    </div>
    <br>
    <div>
    <label for="body">内容</label>
    <input type="text" name="body" value={{ old('body') }}> 
    </div>
    <input type="submit" value="Create Task">
    
    
    </form>
</body>
</html>
