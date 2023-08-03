@php

$label = $attributes['label'] ?? '';
$name = $attributes['name'] ?? '';
$value = $attributes['value'] ?? '';

// Giữ lại giá trị cũ khi lỗi
$old_value = old($name);
$value = empty($old_value) ? $value : $old_value;

$model = $attributes['model'] ?? '';
$data = [];
$displayMember = $attributes['displayMember'] ?? '';
$valueMember = $attributes['valueMember'] ?? '';

if ($model === 'Category') {
    $data = \App\Models\Category::all();
} elseif ($model === 'Cental') {
    $data = \App\Models\Cental::all();
}

@endphp

<div class="mt-3">
    <label class="form-lable">{{ $label }}</label>

    <select name="{{ $name }}" id="{{ $name }}" class="form-control">
        <option value="">--- Chọn một giá trị ---</option>
        @foreach ($data as $item)
            @if(!empty($selected) && $item->$valueMember == $selected)
                <option value="{{ $item->$valueMember }}" selected>{{ $item->$displayMember }}</option>
            @else
                <option value="{{ $item->$valueMember }}">{{ $item->$displayMember }}</option>
            @endif
        @endforeach
    </select>

    @error($name)
        <span class="text-danger fst-italic">{{ $message }}</span>
    @enderror
</div>