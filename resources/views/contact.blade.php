@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('header-content')
    <h1 class="header-title">Contact Us</h1>
@endsection
@section('content')
<!--------contact page content-->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56035.69069056964!2d77.36524799999998!3d28.622848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1763873309286!5m2!1sen!2sin"
     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     <section class="contact-us">
        <div class="row">
            <div class="contact-col">
               <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>XYZ Road, ABC BUilding</h5>
                    <p>XYZ, India</p>
                <span>
               </div>
               <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91 0123456789</h5>
                    <p>Monday to Saturday, 10AM to 6PM</p>
                <span>
               </div>
               <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>xyz1234@example.com</h5>
                    <p>Email us your query anytime!</p>
                <span>
               </div>
            </div>
            <div class="contact-col">
              <form action=" " method="POST" enctype="multipart/form-data">
              @csrf
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="text" name="subject" placeholder="Enter your subject" >
                <textarea name="message" rows="8" placeholder="Message"></textarea>
                 <button type="submit" class="hero-btn red-btn">Send Message</button>
             </form>
            </div>
        </div>
     </section>
</section>
 @endsection