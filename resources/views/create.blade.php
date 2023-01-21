<x-app-layout>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('board.store') }}" method="POST">
@csrf
<div>Название
<input id="title"
    type="text"
    name="title"
    class="@error('title') is-invalid @enderror"/>
    @error('title')
    <div class="alert alert-danger">{{$error}}</div>
@enderror
</div>
<div>Описание
<textarea name="description"></textarea>
</div>
<div>Цена
<input name="price" id="price"/>
</div>
<div>Продавец
<input name="salesman" id="salesman"/>
</div>
<div>Картинка
<input name="filename" id="filename"/>
</div>

<input type="submit" value="Сохранить"/>
</x-app-layout>