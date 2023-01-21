<x-app-layout>
    Продавец: {{$saleman}}
@foreach($boards as $board)
<div>
    <a href="board/{{$board->id}}">
    {{$board->title}}
</a>
</div>
@endforeach

</x-app-layout>
