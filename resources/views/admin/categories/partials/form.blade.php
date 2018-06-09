<label for="Denomination"></label>
<input type="text" class="form-control" name="title"  placeholder="Header category" value="{{ $category->title or ""}}" required>

<label for="Alias"></label>
<input type="text" class="form-control" name="alias"  placeholder="alias category" value="{{ $category->alias or ""}}" required>
<hr>
<input class="btn btn-primary" type="submit" value="Save">