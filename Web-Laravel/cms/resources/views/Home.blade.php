<!DOCTYPE html>
<html>

<head>

    <!--For Owl Carousol-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!--For Bootstrap-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



     <!--FontIcon-->
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        
        body {
            background-color: rgb(49, 49, 74);
            color: aliceblue;
        }
        

        /* Header Style */

        ul {
            margin-top: 0%;
            width: 100%;
            text-decoration: none;
            display: inline-block;
            list-style-type: none;
            background-color: rgb(35, 38, 48);
        }

        #Logo{
            padding-right: 400px;
        }

        li {
        float: left;
        vertical-align: middle;
        }

        li a {
        font-size: 25px;
        display: block;
        color: rgb(179, 173, 173);
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        
        }
        

        li a:hover {
            
            color: aliceblue;
        }

        #logsign{
            padding-left: 150px;
        }


         
          /* DropDown Style */
          .dropbtn {
            background-color: rgb(35, 38, 48);
            color: rgb(179, 173, 173);
            padding: 16px;
            font-size: 25px;
            padding-top: 13px;
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(27, 27, 29);
            min-width: 100px;
            margin-left: 0px;

            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: rgb(179, 173, 173);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 20px;
            }

            .dropdown-content a:hover {
            color: aliceblue;
            
            }

            .dropdown:hover .dropdown-content {
            display: block;
            
            }

            .dropdown:hover .dropbtn {
            color: aliceblue;
            
            }



        /* Main Body Style */
        #MainBody{
            
            margin-left: 7%;
            margin-right: 7%;
        }

        .ViewAll{
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
            color: rgb(232, 223, 223) ;
            text-decoration: none;
            font-weight: bold;
            letter-spacing: 2px;
            
        }


        .item a img{
            height: 240px;
            width: 40px;
        }

        .item a {
            text-decoration: none;
            color: rgb(232, 223, 223);
            
        }


        /* Footer Style */

        .footer{
            background-color: rgb(35, 38, 48);
            color: rgb(179, 173, 173);
            width: 100%;   
        }

        .row{
            margin-left: 7%;
            margin-right: 7%;
        }

        .row a{
            text-decoration: none;

        }

        .row a:hover{
            color: aliceblue;
        }

        #fi{
            font-size: 20px;
            padding-right: 3px;
        }
        

    </style>

   
</head>

<body>
    
    <!--header-->
    <ul>
        <li><a href="{{url('/')}}" id="Logo"><img src="{{ asset('Image/HLogo.jpg') }}" height="33px" width="27px"></a></li>
        <li><a class="active" href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/Profile')}}">Profile</a></li>
        <li><div class="dropdown">
            <button class="dropbtn">Explore</button>
            <div class="dropdown-content">
                <a href="{{url('/TopRanked')}}">Top Ranked</a>
                <a href="{{url('/Trending')}}">Trending</a>
            </div>
          </div></li>
        <li><a href="{{url('/About')}}">About</a></li>
        {{-- <li>@auth
            <span class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name}}!</span>
            @else
            <a href="/register" class="text-xs font-bold uppercase">Register</a>
        @endauth</li> --}}
        
        @guest
        <li id="logsign"><a href="{{url('/Login')}}" >LogIn</a></li>
        <li> <a href="{{url('/SignUp')}}">Sign Up</a></li>
                @else
                    <span style="margin-top: 10px; font-size: 20px;margin-left:100px;color: rgb(179, 173, 173);" >Welcome, {{auth()->user()->Username}}!</span>
                    <form method="POST" action="/logout">
                        @csrf
                        <button style="text-decoration: none; background: transparent; border: none;margin-left:100px;color: rgb(57, 113, 202);;">
                            <div class="logoutbtn">
                                <div class="homepage_Signup">Log Out</div>
                            </div>
                        </button>
                    </form>
                @endguest
      </ul><br><br>





<!--Main Body-->
    
  

    
<div id="MainBody">
   


    <!--Trending-->
<br>
<a href="{{url('/Trending')}}" class="ViewAll">Trending</a>
<br><br>

<div class="owl-carousel owl-theme" id="owl">
    <div class="item">
        <a href="{{url('/DetailsDBZ')}}"><img src="{{ asset('Image/DBZ.png') }}"><br>Dragon Ball Z</a>
    </div>
   
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/One.jpg') }}"><br>One Piece</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Komi.jpg') }}"><br>Komi Cant Communicate</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/FAMB.jpg') }}"><br>Full Metal Alchemist Brotherhood</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Spy.png') }}"><br>Spy X Family</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Shield.jpg') }}"><br>Rise of Shield Hero</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Shikimori.jpg') }}"><br>Shikimori is just not cute</a>
    </div>
    
    
</div>


    

<!--Upcoming-->

<br><br>
<h2><b>Coming Next Season</b></h2>
<br><br>

<div class="owl-carousel owl-theme" id="owl">
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Komi.jpg') }}"><br>Komi Chan Cant Communicate</a>
    </div>
   
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Love.png') }}"><br>Love is War</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/One.jpg') }}"><br>One Piece</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Shield.jpg') }}"><br>Rise of Shield Hero</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Shikimori.jpg') }}"><br>Shikimori is just not cute</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Spy.png') }}"><br>Spy X Family</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Trapped.jpg') }}"><br>Trapped in an Otema world</a>
    </div>
    
    
    
</div>







<!--Top Rated-->

<br><br>
<a href="{{url('/TopRanked')}}" class="ViewAll">Top Ranking</a>
<br><br>

<div class="owl-carousel owl-theme" id="owl">
    <div class="item">
        <a href="{{url('/DetailsDBZ')}}"><img src="{{ asset('Image/DBZ.png') }}"><br>Dragon Ball Z</a>
    </div>
   
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/One.jpg') }}"><br>One Piece</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/NGNL.jpg') }}"><br>No Game No Life</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/FAMB.jpg') }}"><br>Full Metal Alchemist Brotherhood</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/AOT.jpg') }}"><br>Attack On Titan</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Beyblade.png') }}"><br>Beyblade</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/DN.jpg') }}"><br>Death Note</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Jobless.jpg') }}"><br>Jobless Reincarnation</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Love.png') }}"><br>Love is War</a>
    </div>
    <div class="item">
        <a href="{{url('/Details')}}"><img src="{{ asset('Image/Mob.jpg') }}"><br>Mob Pyscho</a>
    </div>
    
    
</div>






<!--For Carosel-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
loop:true,
margin:30,
responsiveClass:false,
dots: false,
stagePadding:0,
responsive:{
    0:{
        items:1,
        nav:true
    },
    600:{
        items:4,
        nav:false
    },
    1000:{
        items:6,
        nav:true,
        loop:false
    }
}
})</script>



<br>
<br>
</div>



<!--Footer-->

<div class="footer"><br>
    <div class="row">
        <div class="col-sm-4">
            <h3>CUSTOMER SERVICE</h3>
                  <a href="#" target="_blank"><b>>></b>Your Account</a><br>
                  <a href="#" target="_blank"><b>>></b>Your Contact</a><br>
                  <a href="#" target="_blank"><b>>></b>Gift Cards</a>

        </div>
        <div class="col-sm-4">
            <h3>CUSTOMER SERVICE</h3>
                  <a href="#" target="_blank"><b>>></b>Your Account</a><br>
                  <a href="#" target="_blank"><b>>></b>Your Contact</a><br>
                  <a href="#" target="_blank"><b>>></b>Gift Cards</a>
        </div>
        <div class="col-sm-4">
            <h3>Contact us</h3>
                  
                    <p id="fi">WeebsHeaven@gamil.com</p>
                    <a href="#" target="_blank"><i class="fa fa-facebook-f" id="fi" > </i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram" id="fi" > </i></a>
        </div>
      </div>
      <br><br>
</div>


</body>
</html>