<x-app-layout>
@foreach($boards as $board)
@endforeach
<form method = "POST" action="/board/update">
@csrf
@method('PUT') 
<div>Название
<input id="title"
    type="text"
    name="title"
    class="@error('title') is-invalid @enderror" value='{{ $board->title }}'/>
    @error('title')
    <div class="alert alert-danger">{{$error}}</div>
@enderror
</div>
<div>Описание
<textarea name="description">{{ $board->description }}</textarea>
</div>
<div>Цена
<input name="price" id="price" value='{{ $board->price }}'/>
</div>
<div>Продавец
<input name="salesman" id="salesman" value='{{ $board->salesman }}'/>
</div>
<div>Картинка
<input name="filename" id="filename" value='{{ $board->filename }}'/>
</div>

<button name = button type="submit">Сохранить </button>

</form>
</x-app-layout>