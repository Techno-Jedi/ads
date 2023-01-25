<x-app-layout>
@foreach($board as $ads)
@endforeach
<div>Название:{{ $ads->title }} </div>
<div>Описание:{{ $ads->description }} </div>
<div>Цена:{{ $ads->price }} </div>
<div>Продавец:{{ $ads->salesman }} </div>
</x-app-layout>