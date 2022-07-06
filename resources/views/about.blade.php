@extends('layouts')

@section('content')

<section class = "about" id = "about">
    <div class = "container">
      <div class = "about-content">
        <div class="about">
          <img src ="{{ asset('/blogging_editcode/assets/images/about-bg.jpg') }}" alt = "">
        </div>
        <div class = "about-text">
          <div class = "title">
            <h2>Group Web/18 F4 </h2>
            <p>Welcome to Blogging</p>
          </div>
          <p>Write your own blog with our website.</p>
          <p>Blogging a website containing a writer's or group of writers' own experiences, observations, opinions, etc., and often having images and links to other websites.
             The primary job of a blogger is to write content in the form of blog posts. Blog posts are meant to provide valuable information to people in a way that's free and easy to read. It's the first step to building trust with readers so that you can turn them into customers in the future.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end of about -->

@endsection
