@extends('layouts')
@section('content')

<div class="main">
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">

        @foreach ($posts as $post)
          <div class="item">
            <img src="{{ asset($post->imagePath) }}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                <span></span>
                </div>
                <a href="{{ route('single-blog.show', $post) }}"><h4>{{ $post->title }}</h4></a>
                <ul class="post-info">
                  <li><a >Written by {{ $post->user->name }}</a></li>
                  <li><a >{{ $post->created_at->diffForHumans()}}</a></li>
                  {{-- <li><a href="#">12 Comments</a></li> --}}
                </ul>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Responsive Blog HTML5 CSS3</span>
                  <h4>Great Responsive Blog Website For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="#" target="_parent">More Info!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">

                @foreach ($posts as $post)
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset($post->imagePath) }}" alt="">
                    </div>
                    <div class="down-content">
                      <span></span>
                      <a href="{{ route('single-blog.show', $post) }}"><h4>{{ $post->title }}</h4></a>
                      <ul class="post-info">
                        <li><a>Written by {{ $post->user->name }}</a></li>
                        <li><a>{{ $post->created_at->diffForHumans()}}</a></li>
                        {{-- <li><a>12 Comments</a></li> --}}
                      </ul>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>

                            </ul>
                          </div>
                          {{-- <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach

                {{-- <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">

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
                {{-- <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Great Reponsive Blog</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Website</a></li>
                        <li><a href="#">- HTML5 / CSS3 </a></li>
                        <li><a href="#">- Dedication &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div> --}}
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
                  </div> --}}
                {{-- </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


@endsection
