@extends('layouts')

@section('content')

<div class="main">
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h4>Post Details</h4>
                  <h2>Single post</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="blog-posts grid-system">
        <div class="container">
          <div class="row">
            <div class="col-14">
              <div class="all-blog-posts">
                <div class="row">
                  <div class="col-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img src="{{asset($post->imagePath)}}"  alt="">
                      </div>
                      <div class="down-content">
                        <h4>{{ $post->title }}</h4></a>
                        <ul class="post-info">
                          <li><a>Written by {{ $post->user->name }}</a></li>
                          <li><a>{{ $post->created_at->diffForHumans()}}</a></li>
                          {{-- <li><a href="#">10 Comments</a></li> --}}
                        </ul>
                        {!!$post->body!!}
                        <div class="post-options">
                          <div class="row">
                            {{-- <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Great Responsive</a>,</li>
                                <li><a href="#">BLOG</a></li>
                              </ul>
                            </div> --}}
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
                  </div>
                  {{-- <div class="col-lg-12">
                    <div class="sidebar-item comments">
                      <div class="sidebar-heading">
                        <h2>4 comments</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li>
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-01.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Smith Brown<span>May 26, 2021</span></h4>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the.</p>
                            </div>
                          </li>
                          <li class="replied">
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-02.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Jimdel-Edu<span>May 27, 2021</span></h4>
                              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
                            </div>
                          </li>
                          <li>
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-03.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>La Semence<span>May 28, 2021</span></h4>
                              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
                            </div>
                          </li>
                          <li class="replied">
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-02.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Jimdel-Edu<span>May 28, 2021</span></h4>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="col-lg-12">
                    <div class="sidebar-item submit-comment">
                      <div class="sidebar-heading">
                        <h2>Your comment</h2>
                      </div>
                      <div class="content">
                        <form id="comment" action="#" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your email" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> --}}
                  <div>
                    <a href="{{ route('blog.index') }}">
                        <i class="fa fa-fast-backward" aria-hidden="true"></i>
                        <p>Back to Blog page</p>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>

@endsection
