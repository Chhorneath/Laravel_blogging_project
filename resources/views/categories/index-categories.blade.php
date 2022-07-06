{{-- style here --}}
<style>
    /* Categories list */
.categories-list {
  min-height: 100vh;
  background: #fff;
}

.categories-list h1 {
  padding: 100px 0 30px 0;
  font-weight: 500px;
  font-size: 40px;
  text-align: center;
}

.categories-list .item {
  display: flex;
  justify-content: right;
  align-items: center;
  max-width: 300px;
  margin: 0 auto;
}

.categories-list .item p {
  font-size: 16px;
}

.categories-list .item p,
.categories-list .item div,
.categories-list .item form {
  margin: 15px 8px;
}

.categories-list .item div a {
  padding: 6px 20px;
  border-radius: 10px;
  background-color: #EBCDCC;
  color: #fff;
  font-size: 14px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  display: inline-block;
}

.categories-list .item input {
  padding: 6px 13px;
  border-radius: 10px;
  background-color: #837575;
  color: #fff;
  font-size: 14px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  cursor: pointer;
}

.categories ul li {
  list-style: none;
  background-color: #494949;
  margin: 20px 5px;

  border-radius: 15px;
}

.categories ul {
  display: flex;
  justify-content: center;
}

.categories a {
  color: white;
  padding: 10px 20px;
  display: inline-block;
}

.create-categories a,
.index-categories a {
  all: revert;
  margin: 20px 0;
  display: inline-block;
  text-decoration: none;
}

.create-categories a span,
.index-categories a span {
  font-size: 22px;
}

.index-categories {
  text-align: center;
}

</style>

@extends('layouts')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endsection

@section('content')

        <div class="categories-list">
           <h1>Categories List</h1>
            @if (session('status'))
                <p style="color: #fff; width:100%; font-size:18px; font-weight:20px; text-align:center; background: pink; padding:17px 0; margin-buttom: 6px">
                    {{ session('status') }}</p>
            @endif
          @foreach ($categories as $category)
               <div class="item">
                  <p>{{$category->name}}</p>
                  <div>
                    <a href="{{ route('categories.edit', $category) }}">Edit</a>
                  </div>
                  <form action="{{ route('categories.destroy', $category) }}" method="delete">
                     @csrf
                     <input type="submit" value="Delete">
                  </form>
              </div>
           @endforeach
        </div>



        <div class="index-categories">
            <a href="{{ route('categories.create') }}">Create category<span>&#8594;</span></a>
        </div>
    </div>
@endsection
