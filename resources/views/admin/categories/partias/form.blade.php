<label for="">Статус</label>
<select class="form-control" name="published" id="">
    @if(isset($category->id))
        <option value="0" @if ($category->published ==0) selected =""@endif>
            не опубликовано
        </option>
        <option value="1" @if($category->published ==1) selected="" @endif>
            опубликовано
        </option>
    @else
        <option value="0">не опубликовано</option>
        <option value="1">опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="заголовок категории"
       value="{{$category->title ?? ""}}" required>
<label for="">Slug</label>
<input type="text" class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
value="{{$category->slug ?? ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" id="" name="parent_id">
    <option value="0">-- без родительской категории</option>
    @include('admin.categories.partias.categories',['categories' =>$categories])

</select>

<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">

