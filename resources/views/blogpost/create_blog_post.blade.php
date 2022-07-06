{{-- style here --}}
<style>
/* Contact */
#contact-us h1 {
  text-align: center;
  padding: 80px 0 40px 0;
  font-size: 30px;
  font-weight: 400;
}

#contact-us .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

#contact-us .contact-info {
  display: flex;
  flex-direction: column;
  justify-content: center;
  font-weight: 300;
}


#contact-us .specific-info {
  display: flex;
  margin-bottom: 50px;
}

#contact-us .specific-info a {
  display: inline-block;
}

#contact-us .specific-info a:nth-of-type(1) {
  margin-bottom: 10px;
}

#contact-us .specific-info .title {
  margin-bottom: 5px;
}

#contact-us .specific-info .subtitle {
  margin-top: 10px;
}

#contact-us .specific-info i {
  margin-right: 20px;
  color: rgba(255, 255, 0, 0.9);
}

#contact-us .subtitle {
  color: #9b9b9b;
}

/* Contact Form */

#contact-us input,
textarea, select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  font-size: 16px;
}

.contact-form span {
  font-weight: 300;
  font-size: 16;
}

textarea {
  height: 200px;
}

#contact-us input[type="submit"] {
  background-color: black;
  color: white;
  border: none;
  cursor: pointer;
  transition: 0.3s ease;
}

#contact-us input[type="submit"]:hover {
  transform: translateY(-4px);
}

</style>

@extends('layouts')
@section('head')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
@endsection

@section('content')

<main class="container" style="background-color: #fff ">
    <section id=contact-us>
        <h1 style="padding-top: 150px">Create New Post</h1>
        @if (session('status'))
        <p style="color: #fff; width:100%; font-size:18px; font-weight:20px; text-align:center; background: pink; padding:17px 0; margin-buttom: 6px">{{ session('status') }}</p>
        @endif
        <div class="contact-form">
            <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- title --}}
                <label for="title"><span>Title</span></label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"/>
                @error('title')
                {{-- The $attributeValue field must be $validationRule --}}
                <p style="color: red; margin-buttom: 25px"> {{ $message }}</p>
                @enderror

                {{-- Image --}}
                <label for="image"><span>Image</span></label>
                <input type="file" id="image" name="image"/>
                @error('image')
                {{-- The $attributeValue field must be $validationRule --}}
                <p style="color: red; margin-buttom: 25px"> {{ $message }}</p>
                @enderror

                <!-- Drop down -->
                <label for="categories"><span>Choose a category:</span></label>
                <select name="category_id" id="categories">
                    <option selected disabled>Select option </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                        {{-- The $attributeValue field is/must be $validationRule --}}
                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                @enderror

                {{-- Body --}}
                <label for="body"><span>Body</span></label>
                <textarea id="body" name="body">{{ old('body') }}</textarea>
                @error('body')
                {{-- The $attributeValue field must be $validationRule --}}
                <p style="color: red; margin-buttom: 25px"> {{ $message }}</p>
                @enderror

                {{-- button submit --}}
                <input type="submit" value="Submit"/>

            </form>
        </div>
    </section>
</main>
@endsection

@section('script')
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
