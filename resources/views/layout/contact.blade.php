@props([
    'type' => 'text',
    'name',
    'placeholder',
])

<input 
    type="text" 
    name="{{ $name }}" 
    placeholder="{{ $placeholder }}" 
    class="border p-2 w-full rounded-md"
/>
