<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale1.0">
    <title>
        University Website Desing - Easy Tutorials
    </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
</head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="{{asset('image/logo.png')}}"></a>
                <div class="nav-links">
                   <!-- <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>-->
                    <ul>
                        <li><a href="{{asset('index')}}">HOME</a></li>
                        <li><a href="{{asset('log')}}">ABOUT</a></li>
                        <li><a href="{{asset('blog')}}">BLOG</a></li>
                       <!-- <li><a href="#">COURSE</a></li>-->
                        <li><a href="{{asset('contact')}}">CONTACT</a></li>
                    </ul>
                </div>
               <!-- <i class="fa fa-bars" onclick="showMenu()" aria-hidden="true"></i>-->
            </nav>
            <div class="text-box">
                <h1>World biggest university</h1>
                <p>Making website is now one of the easiest thing in the world. <br> you just need to learn HTML,CSS Javascript and you are good to go.</p>
                <a href="" class="hero-btn">Visit Us to Know More</a>
            </div>

        </section>

        <!---------course-->
        <section class="course">
            <h1>Courses We offer</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
            <div class="row">
                <div class="corse-col">
                    <h3>Intermediate</h3>
                    <p>D.Pharma</p>
                    <p>Diploma in Engineering Mechaical Engg-:<br> Civil Engg. <br>Electrical Engg. <br>Electronics and Communication Engg. <br>Computer science Engg.
                    </p>
                </div>
                <div class="corse-col">
                    <h3>Degree</h3>
                    <p>BBA <br>B.Com<br>B.Tech(Civil,Mechanical,Electrical,CSE,Electronics)<br>B.A.<br>B.Sc(Nurshing)<br>B.Pharmacy.<br>BCA.<br>B.Ed.
                    </p>
                </div>
                <div class="corse-col">
                    <h3>Post Graduation</h3>
                    <p>M.Tech(Civil,Mechanical,ECE,E&C,CSE)<br>M.Pharm<br>MBA.<br>MCA.
                    </p>
                </div>
            </div>
        </section>
        <section class="campus">
            <h1>Our Global Campus</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
            <div class="row">
                <div class="campus-col">
                    <img src="{{asset('image/newyork.png')}}">
                    <div class="layer">
                        <h3>LONDON</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="{{asset('image/washington.png')}}">
                    <div class="layer">
                        <h3>USA</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="{{asset('image/london.png')}}">
                    <div class="layer">
                        <h3>Washington</h3>
                    </div>
                </div>
            </div>
        </section>
        <!----------Facilities-->
        <section class="facilities">
            <h1>Our Facilities</h1>
            <p>Lorem ipsum dolor sit amet, consecture adipiscing elit.</p>
            <div class="row">
                <div class="facilities-col">
                    <img src="{{asset('image/library.png')}}">
                    <h3>World Class Library</h3>
                    <p>Our library offers a vast collection of books, journals, and digital resources to support academic excellence and research.</p>
                </div>
                <div class="facilities-col">
                    <img src="{{asset('image/basketball.png')}}">
                    <h3>Largest Play Ground</h3>
                    <p>Expereince limitless energy and play at our univesrsity's largest playground,where student thrive on sports and recreation</p>
                </div>
                <div class="facilities-col">
                    <img src="{{asset('image/cafeteria.png')}}">
                    <h3>Tasty and Healthy food</h3>
                    <p>Our cafeteria offre's a variety of delicious and nutritious meals to keep students energized and focused throughout the day.   </p>
                </div>
            </div>
        </section>
        <!---------testimonials-->
        <section class="testimonial">
            <h1>What our student says</h1>
            <p>Lorem ipsum dolor sit amet, consecture adipiscing eli</p>
            <div class="row">
                @if(session('success'))
                 <div style="color:green;">{{ session('success') }}</div>
                @endif
              @foreach($comments as $comment)
              <div class="testimonial-col">
                    <img src="{{ asset($comment->image ? 'comments/' . $comment->image : 'image/user1.jpg') }}" alt="user image">
                    <div>
                        <p>{{ $comment->comment }}</p>  <!-- Dynamic comment -->
                        <h3>{{ $comment->name }}</h3>
                    </div>
                </div>
              @endforeach
            </div>
        </section>
        <!-- Comment Form Section -->
     <section class="comment-form" style="padding: 50px; background-color: gray; text-align:center;width:500px;margin-left:30%;border-radius:10px;">
        <h2 style="margin-bottom: 20px;color:white">Leave a Comment</h2>
        <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data" style="display:inline-block; text-align: left; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        @csrf
        <!-- Name Field -->
        <label for="name" style="display: block; margin: 10px; font-weight: bold;">Name</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">

        <!-- Comment Field -->
        <label for="comment" style="display: block; margin:10px; font-weight: bold;">Comment</label>
        <textarea id="comment" name="comment" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;" rows="4"></textarea>

        <!-- Image Upload -->
        <label for="image" style="display: block; margin:10px; font-weight: bold;">Upload Image</label>
        <input type="file" id="image" name="image" style="margin-bottom: 15px;">

        <!-- Submit Button -->
        <button type="submit" style="padding: 5px 8px; background-color: #0275d8; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
      </form>
     </section>

        <!---------comment section end-->
        <section class="cta">
            <h1>Enroll for our various online courses <br>Anywhere from the worlds</h1>
            <a href="" class="hero-btn">Contact US</a>
        </section>
        <!--------footer-->
        <section class="footer">
            <h4>About US</h4>
            <p>At our university, we are committed to providing quality education and fostering a supportive community for all students.</p>
            <div class="icon">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            <p>Made with <i class="fa fa-heart-o"></i> By Raja Diwakar</p>
        </section>
        ! ---------------js for toggle menu--
        <script>
            var navlinks = documnet.getElementId("navlinks");

            function showMenu() {
                navlinks.style.right = "0";
            }

            function hideMenu() {
                navlinks.style.right = "-200px";
            }
        </script>
    </body>
</html>
<!------data
  <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        .course-section {
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #003366;
        }
        ul {
            line-height: 1.8;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #003366;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background: #0055aa;
        }
        footer {
            background: #003366;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
->