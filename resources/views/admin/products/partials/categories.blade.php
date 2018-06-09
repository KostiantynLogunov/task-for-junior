<option disabled selected value> -- select an option -- </option>

@foreach($categories as $category)

    <option value="{{ $category->id  or "" }}"

        @isset($product->id)

                @if($category->id == $product->category)
                    selected="selected"
                @endif

        @endisset
    >

        {{ $category->title or "" }}

    </option>

@endforeach