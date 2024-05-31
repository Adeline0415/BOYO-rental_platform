<!-- table-row.blade.php -->
@php
$isBorrowed = $row->getAttributes()['Borrowed'];
@endphp
<tr class="{{ $isBorrowed ? 'borrowed' : '' }}">

    @foreach ($row->getAttributes() as $key => $value)
        <td>
            @if ($key === 'Borrowed')
                {{ $value ? '是' : '否' }}
            @else
                {{ $value }}
            @endif
        </td>
    @endforeach
    <td class="delete-btn">
        <button class="btn btn-danger btn-sm">
            delete
        </button>
    </td>
</tr>
<style>
.borrowed {
    background-color: #ffcccc; /* 红色背景 */
}

.delete-btn {
    text-align: center;
    vertical-align: middle;
    width: 50px;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}
</style>