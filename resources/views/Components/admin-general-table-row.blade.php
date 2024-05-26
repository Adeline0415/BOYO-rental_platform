<li class="table-row">
    @foreach($columns as $index => $col)
        <div class="col" data-label="{{ $col['label'] }}">{{ $items[$col['key']] ?? '-' }}</div>
    @endforeach
    {{$slot}}
</li>
