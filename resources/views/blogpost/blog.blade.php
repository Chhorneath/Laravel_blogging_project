<style>
.post-buttons {
  display: flex;
}
.post-buttons a {
  padding: 10px 13px;
  background-color: #EBCDCC;;
  margin-right: 10px;
  border-radius: 10px ;
  color: #4F4242;
  margin-bottom: 7px;

}

.post-buttons input {
  padding: 10px 13px;
  background-color: #837575;
  color:#4F4242 ;
  margin-bottom: 7px;
  border-radius: 10px ;
  font-size: 16px;
  cursor: pointer;
}


</style>
@extends('layouts')

@section('content')

<div class="main">
    {{-- blog --}}
       <!-- Banner Starts Here -->
      <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Recent Blog</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
     <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
                @if (session('status'))
                <p style="color: #fff; width:100%; font-size:18px; font-weight:20px; text-align:center; background: pink; padding:17px 0; margin-buttom: 6px">{{ session('status') }}</p>
                @endif
              <div class="row">
                <div class="col-8">
                    @forelse ($posts as $post)
                      <div class="blog-post">
                        @auth
                            @if (auth()->user()->id === $post->user->id)
                               <div class="post-buttons">
                               <a href="{{ route('single-blog.edit', $post) }}">Edit</a>
                               <form action="{{ route('single-blog.destroy', $post) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete">
                               </form>
                               </div>
                           @endif
                        @endauth
                        <div class="blog-thumb">
                          <img src="{{asset($post->imagePath)}}" alt="">
                        </div>
                        <div class="down-content">
                          <span></span>
                          <a href="{{ route('single-blog.show', $post) }}"><h4>{{ $post->title }}</h4></a>
                          <ul class="post-info">
                            <li><a > Written by {{ $post->user->name }}</a></li>
                            <li><a >{{ $post->created_at->diffForHumans()}}</a></li>
                            {{-- timestamp --}}
                            {{-- <li><a >12 Comments</a></li> --}}
                          </ul>

                          <div class="post-options">
                            <div class="row">
                              {{-- <div class="col-lg-12">
                                <ul class="post-tags">
                                  <li><i class="fa fa-tags"></i></li>
                                  <li><a href="#">Great Responsive</a>,</li>
                                  <li><a href="#">Website</a></li>
                                </ul>
                              </div> --}}
                             </div>
                            </div>
                          </div>
                        </div>
                        @empty
                        <p>My apologies your highness, there is no blog post related to that search</p>
                    @endforelse




                {{-- pagination --}}
                {{ $posts->links()}}
                {{-- <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div> --}}
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">

                  <div class="sidebar-item search">
                    <form class="searchText" action="">
                      <input type="text" name="search" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                    @foreach ($posts as $post)
                      <ul>
                        <li><a href="{{ route('single-blog.show', $post) }}">
                          <h5>{{ $post->title }}</h5>
                          <span>{{ $post->created_at->diffForHumans()}}</span>
                        </a></li>
                      </ul>
                    @endforeach
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                       @foreach ($categories as $category )
                       <li><a href="{{ route('blog.index', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
                       @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                {{-- <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds & Languages</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">C#</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Pyton</a></li>
                        <li><a href="#">RPG</a></li>
                      </ul>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
