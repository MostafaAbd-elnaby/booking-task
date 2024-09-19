@props([
    'type' => '',
    'hasLabel' => true,
    'label' => '',
    'name' => '',
    'value' => '',
    'id' => '',
])
<div class="form-group">
    @if ($hasLabel)
    <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" 
    {{
        $attributes->class([
            'form-control',
            'is-invalid' => $errors->has($name)
        ])
    }} value="{{ old($name, $value) }}" />
    @error($name)
    <span class="text-danger" style="font-size: 13px">
        {{ $message }}
    </span>
    @enderror
</div>