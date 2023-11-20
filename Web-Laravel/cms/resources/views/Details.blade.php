<!DOCTYPE html>
<html>

<head>

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
        

        /*Header Style*/
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
            padding-left: 200px;
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


            
            /*Main Body Style*/

            #MainBody{
            
            margin-left: 7%;
            margin-right: 7%;
        }


        
        #AnimePic{
            height: 450px;
            width: 330px;
            
        }

        #Title{
            padding-left: 50px;
        }

        #Description{
            background-color: rgb(39, 38, 58);
            padding-top: 10px;
            border-radius: 10px;
        }

        #Detail{
            padding-left: 110px;
        }

        .container{
            background-color: rgb(39, 38, 58);
            width: 1100px;
            border-radius: 13px;
            
        }

        .col{
            padding-top: 20px;
            padding-left: 30px;
        }

        #PicDetail{
            padding-left: 0;
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

        <div class="row">
            <div class="col-5">
                <img src="{{ asset('Image/Komi.jpg') }}" id="AnimePic"><br><br>
                <b id="Title">Komi cant communicate</b>
            </div>

            <div class="col-7" id="Description">
                <H3><b>Description</b></H3>
                <p>Five years after winning the World Martial Arts tournament, Gokuu is now living a peaceful life with his wife and son. This changes, however, with the arrival of a mysterious enemy named Raditz who presents himself as Gokuu's long-lost brother. He reveals that Gokuu is a warrior from the once powerful but now virtually extinct Saiyan race, whose homeworld was completely annihilated. When he was sent to Earth as a baby, Gokuu's sole purpose was to conquer and destroy the planet; but after suffering amnesia from a head injury, his violent and savage nature changed, and instead was raised as a kind and well-mannered boy, now fighting to protect others.</p>
                <p>With his failed attempt at forcibly recruiting Gokuu as an ally, Raditz warns Gokuu's friends of a new threat that's rapidly approaching Earth—one that could plunge Earth into an intergalactic conflict and cause the heavens themselves to shake. A war will be fought over the seven mystical dragon balls, and only the strongest will survive in Dragon Ball Z.</p>
             </div>
        </div>

        <br><br>
        <h3 id="Detail"><b>Details</b></h3>

        <div class="container">
        <div class="row">
            <div class="col">
                
                <b>Total Episodes</b>
                <p>291</p>
            </div>

            <div class="col" >
                <b>RunTime </b>
                <p>24 min</p>
            </div>

            <div class="col" >
                <b>Start Date</b>
                <p>jan 8,1989</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                
                <b>MAL Rating</b>
                <p>10/10</p>
            </div>

            <div class="col" >
                <b>AniList Rating</b>
                <p>10/10</p>
            </div>

            <div class="col" >
                <b>WeebsHeaven Rating</b>
                <p>10/10</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                
                <b>Tags</b>
                <ol>
                    <li>Action</li><br>
                    <li>Screams</li><br>
                    <li>Super saiyans</li>
                </ol>
            </div>

            <div class="col" >
                <b>Studio</b>
                <p>OLM</p>
            </div>

            <div class="col" >
                <b>Source</b>
                <p>Manga</p>
            </div>
        </div>
        <br><br>
    </div>

    <br>
        <h3 id="Detail"><b>Character</b></h3>

        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('Image/komiA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail" >
                    <p>Komi Shouko</p>
                    <p>Main Character</p>
                </div>

                <div class="col">
                    <img src="{{ asset('Image/komiJA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail">
                   <p>Komi Shouko</p>
                   <p>Voice Actress</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{ asset('Image/tadanoA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail" >
                    <p>Tadano hitohito</p>
                    <p>Main Character</p>
                </div>

                <div class="col">
                    <img src="{{ asset('Image/tadanoJA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail">
                   <p>Tadano hitohito</p>
                   <p>Voice Actor</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{ asset('Image/najamiA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail" >
                    <p>Najami Osana</p>
                    <p>Supporting Character</p>
                </div>

                <div class="col">
                    <img src="{{ asset('Image/najamiA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail">
                   <p>Najami Osana</p>
                   <p>Voice Actress</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="{{ asset('Image/shukuA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail" >
                    <p>Komi Shuku</p>
                    <p>Supporting Character</p>
                </div>

                <div class="col">
                    <img src="{{ asset('Image/shukuJA.jpg') }}">
                </div>
    
                <div class="col" id="PicDetail">
                   <p>Komi Shuku</p>
                   <p>Voice Actress</p>
                </div>
            </div>
            <br>
        </div>
        

        <br>
        <h3 id="Detail"><b>Review</b></h3>
        <div class="container">
        <div class="row">
            <div class="col">
                <h4>Review #01</h4>
                        <p>Komi Cant Communicate is a comedy about a 15-year-old girl with extreme social anxiety who attempts to make friends. It fluctuates between “Mildly entertaining” and “One of the most unfunny comedy anime I’ve seen in my entire life.”</p>
                    
            </div>

        </div>

        <div class="row">
            <div class="col">
               <h4>Review #02</h4>
                        <p>Komi Cant Communicate is a comedy about a 15-year-old girl with extreme social anxiety who attempts to make friends. It fluctuates between “Mildly entertaining” and “One of the most unfunny comedy anime I’ve seen in my entire life.”</p>
                    
            </div>

        </div>
        <br>
        </div>


      </div>

<br>
<br>








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