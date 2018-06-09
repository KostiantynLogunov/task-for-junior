

<label for="">Title</label>
<input type="text" class="form-control" name="title"  placeholder="Header product" value="{{ $product->title or ""}}" required>

<label for="">Category</label>
<select type="text" class="form-control" name="category" required>
    @include('admin.products.partials.categories')
</select>


<label for="">Description</label>
<textarea class="form-control" id="description" name="description">
    {{ $product->description or "" }}
</textarea>

<label for="">Picture</label>
<input type="file" onchange="showImage.call(this)" name="image">
<br>
@isset($product->image)
    <img id="image" src="/images/{{ $product->image}}"  height="200">
@else
<img id="image" src="" style="display: none;" height="200">
@endisset
<script>
    function showImage()
    {
        if (this.files&&this.files[0])
        {
            var obj = new FileReader();
            obj.onload = function (data) {
                var image = document.getElementById("image");
                image.src = data.target.result;
                image.style.display = "block";
            }
            obj.readAsDataURL(this.files[0]);
        }
    }
</script>
<hr>
<input class="btn btn-primary" type="submit" value="Save">