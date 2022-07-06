<style>
    /* Contact */
#contact-us h1 {
  text-align: center;
  padding: 100px 0 40px 0;
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

@section('content')

<!-- main -->
<main class="container">
    <section id="contact-us">
        <h1>Send us an email!!!</h1>
        {{-- flash message --}}
        @if (session('status'))
        <p style="color: #fff; width:100%; font-size:18px; font-weight:20px; text-align:center; background: pink; padding:17px 0; margin-buttom: 6px">{{ session('status') }}</p>
        @endif
        <!-- contact info -->
        <div class="container">
            <div class="contact-info">
                <div class="specific-info">
                    <i class="fas fa-home"></i>
                    <div>
                        <p class="title">4th floor, Hi Center</p>
                        <p class="subtitle">Blogging Center</p>
                    </div>
                </div>
                <div class="specific-info">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <a href="">+855 16 545 760</a>
                        <br/>
                        <a href="">+855 89 847 804</a>
                        <br/>
                        <a href="">+855 99729256</a>
                        <br/>
                        <a href="">+855 10 430 580</a>


                        <p class="subtitle">Mon to Fri 8am-5pm</p>
                    </div>
                </div>
                <div class="specific-info">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <a href="mailto:bloggingITE@gmail.com">
                            <p class="title">bloggingITE@gmail.com</p>
                        </a>
                        <p class="subtitle">Send us your message anytime ^;^</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <!-- Name -->
                    <label for="name"><span>Name</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" />
                    @error('name')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror

                    <!-- Email -->
                    <label for="email"><span>Email</span></label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" />
                    @error('email')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror

                    <!-- Subject -->
                    <label for="subject"><span>Subject</span></label>
                    <input type="text" id="Subject" name="subject" value="{{ old('subject') }}" />
                    @error('subject')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror
                    <!-- Message -->
                    <label for="message"><span>Message</span></label>
                    <textarea id="message" name="message">{{ old('message') }}</textarea>
                    @error('message')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
