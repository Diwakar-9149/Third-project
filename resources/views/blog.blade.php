@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('header-content')
    <h1 class="header-title">Our Certification & Online Programs for 2025</h1>
@endsection
@section('content')
<!--------blog page content-->
   <section class="blog-content">
        <div class="row" >
            <div class="blog-left">
                <img src="{{asset('image/graduation.jpg')}}">
                 <h1>Our Certification & Online Programs for 2025</h1>
                    <p>Lorem ipsum dolor sit amet, consecture adipiscing elitr. Pellentsque aliquet turpis nulla,relefend 
                        faucibus est sollicitudin ut .Maecenas ut venenatis ex, et dapibus purus Donec sit amet congue quam. 
                        Sed ellentesque maximus dui sit amet convallis. Pellentesque habitant morbi tristique senectus et netus 
                        et malesuada fames ac turpis egestas. Vestibulum convallis, lorem a tempus semper, neque erat lacinia
                         diam, a porttitor metus est eu ligula. Vivamus quis velit nec nulla efficitur interdum. In in magna
                          a odio efficitur dignissim. Curabitur non libero volutpat, pulvinar turpis ac, 
                          facilisis mauris. Nullam euismod felis et sem fermentum, at viverra magna fringilla. Nulla facilisi.
                          Donec ut felis eu arcu efficitur tincidunt. Maecenas euismod felis et sem fermentum, at viverra magna 
                          fringilla. Nulla facilisi. Donec ut felis eu arcu efficitur tincidunt.</p>
                          <br>
                          <p>Lorem ipsum dolor sit amet, consecture adipiscing elitr. Pellentsque aliquet turpis nulla,relefend 
                        faucibus est sollicitudin ut .Maecenas ut venenatis ex, et dapibus purus Donec sit amet congue quam. 
                        Sed ellentesque maximus dui sit amet convallis. Pellentesque habitant morbi tristique senectus et netus 
                        et malesuada fames ac turpis egestas. Vestibulum convallis, lorem a tempus semper, neque erat lacinia
                         diam, a porttitor metus est eu ligula. Vivamus quis velit nec nulla efficitur interdum. In in magna
                          a odio efficitur dignissim. Curabitur non libero volutpat, pulvinar turpis ac, 
                          facilisis mauris. Nullam euismod felis et sem fermentum, at viverra magna fringilla. Nulla facilisi.
                          Donec ut felis eu arcu efficitur tincidunt. Maecenas euismod felis et sem fermentum, at viverra magna 
                          fringilla. Nulla facilisi. Donec ut felis eu arcu efficitur tincidunt.</p>
                        
                          <div class="comment-box">
                           <h3>Leave a Comment</h3>

                           <form class="comment-form">
                           <input type="text" placeholder="Your Name">
                             <input type="email" placeholder="Your Email">
                             <textarea rows="5" placeholder="Your Comment"></textarea>

                            <button type="submit" class="hero-btn red-btn">Post Comment</button>
                             </form>
                              </div>
                        <!--<div class="blog-author">
                            <img src=>
                            <div>
                                <h4>Raja Diwakar</h4>
                                <small>Posted on 15th June 2024</small>
                            </div>  -->    
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                   <a href="{{url('business')}}"> <span>Business Analytics</span></a>
                    <span>21</span>
                </div>
                <div>
                    <a href="{{url('data')}}"><span>Data Science</span></a>
                    <span>18</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>20</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>40</span>
                </div>
                <div>
                    <span>AutoCAD</span>
                    <span>30</span>
                </div>
            </div>
        </div>
    </section>
    @endsection
        <!--------footer-->
