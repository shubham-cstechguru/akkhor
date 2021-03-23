@extends('frontend.layout.app')
@section('content')

@include('frontend.templates.banner', ['page_title' => 'Contact Us'])

<div class="wrapper-fix">
    <div id="container">
        <h1>&bull; Send Your Message Here &bull;</h1>
        
        <form action="#" method="post" id="contact_form">
            <div class="name">
                <label for="name"></label>
                <input type="text" placeholder="My name is" name="name" id="name_input" required>
            </div>
            <div class="email">
                <label for="email"></label>
                <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
            </div>
            <div class="telephone">
                <label for="name"></label>
                <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
            </div>
            <div class="message">
                <label for="message"></label>
                <textarea name="message" placeholder="Please Enter Your Message" id="message_input" cols="30" rows="5" required></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Send Message" id="form_button" />
            </div>
        </form><!-- // End form -->
    </div><!-- // End #container -->
</div>

@endsection