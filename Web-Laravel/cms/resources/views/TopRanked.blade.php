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

        .header {
        float: left;
        vertical-align: middle;
        }

        .header a {
        font-size: 25px;
        display: block;
        color: rgb(179, 173, 173);
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        
        }
        

        .header a:hover {
            
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

        

        #RankingImg img{
            border-radius: 13px;
            height: 300px;
            width: 200px;
        }

        #Description{
           background-color: rgb(39, 38, 58);
            padding-top: 10px;
            border-radius: 10px;
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
        <li class="header"><a href="{{url('/')}}" id="Logo" ><img src="{{ asset('Image/HLogo.jpg') }}" height="33px" width="27px"></a></li>
        <li class="header"><a href="{{url('/')}}" >Home</a></li>
        <li class="header"><a href="{{url('/Profile')}}" >Profile</a></li>
        <li class="header"><div class="dropdown">
            <button class="dropbtn">Explore</button>
            <div class="dropdown-content">
            <a href="{{url('/TopRanked')}}">Top Ranked</a>
            <a href="{{url('/Trending')}}">Trending</a>
            </div>
          </div></li>
        <li class="header"><a href="{{url('/About')}}" >About</a></li>
        @guest
        <li class="header" id="logsign"><a href="{{url('/Login')}}" >LogIn</a></li>
        <li class="header"><a href="{{url('/SignUp')}}" >SignUp</a></li>
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



      <!--<Main Body>-->
     <div id="MainBody">
        <h1><b>Top Anime</b></h1><br>
        <div>
        <ol>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/DetailsDBZ')}}"><img src="{{ asset('Image/DBZ.png') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Dragon Ball Z</b></h3><br>
                            <p><b>Aired: </b> 1989</p>
                            <p><b>Total Episode: </b> 291</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
<br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}"><img src="{{ asset('Image/One.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>One Piece</b></h3><br>
                            <p><b>Aired: </b> 1998</p>
                            <p><b>Total Episode: </b> 1050</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/NGNL.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>No Game No Life</b></h3><br>
                            <p><b>Aired: </b> 2013</p>
                            <p><b>Total Episode: </b> 13</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
<br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">    <img src="{{ asset('Image/FAMB.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Full Metal Alchemist Brotherhood</b></h3><br>
                            <p><b>Aired: </b> 2011</p>
                            <p><b>Total Episode: </b> 64</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/AOT.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Attack On Titan</b></h3><br>
                            <p><b>Aired: </b> 2013</p>
                            <p><b>Total Episode: </b> 25</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
<br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">    <img src="{{ asset('Image/Beyblade.png') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Beyblade</b></h3><br>
                            <p><b>Aired: </b> 1990</p>
                            <p><b>Total Episode: </b> 150</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/DN.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Death Note</b></h3><br>
                            <p><b>Aired: </b> 2011</p>
                            <p><b>Total Episode: </b> 24</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
<br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/Jobless.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Jobless Reincarnation</b></h3><br>
                            <p><b>Aired: </b> 2021</p>
                            <p><b>Total Episode: </b> 24</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">    <img src="{{ asset('Image/Love.png') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Love is War</b></h3><br>
                            <p><b>Aired: </b> 2022</p>
                            <p><b>Total Episode: </b> 12</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">    <img src="{{ asset('Image/Mob.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Mob Pyscho</b></h3><br>
                            <p><b>Aired: </b> 2017</p>
                            <p><b>Total Episode: </b> 24</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/monogatari.png') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Monogatari</b></h3><br>
                            <p><b>Aired: </b> 2014</p>
                            <p><b>Total Episode: </b> 12</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/OPM.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>One Punch Man</b></h3><br>
                            <p><b>Aired: </b> 2017</p>
                            <p><b>Total Episode: </b> 12</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">    <img src="{{ asset('Image/Pokemon.png') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Pokemon</b></h3><br>
                            <p><b>Aired: </b> 1997</p>
                            <p><b>Total Episode: </b> 850</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
            <br>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col-4" id="RankingImg">
                            <a href="{{url('/Details')}}">   <img src="{{ asset('Image/Komi.jpg') }}"></a>
                        </div>
                        <div class="col" id="Description">
                            <h3><b>Komi Cant Communicate</b></h3><br>
                            <p><b>Aired: </b> 2022</p>
                            <p><b>Total Episode: </b> 12</p>
                            <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                        </div>
                    </div>
                </div>
            </li>
<br>
    <li>
        <div class="container">
            <div class="row">
                <div class="col-4" id="RankingImg">
                    <a href="{{url('/Details')}}">   <img src="{{ asset('Image/Trapped.jpg') }}"></a>
                </div>
                <div class="col" id="Description">
                    <h3><b>Trapped in a Otome Game</b></h3><br>
                    <p><b>Aired: </b> 2022</p>
                    <p><b>Total Episode: </b> 12</p>
                    <p><b>Description:</b> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
                </div>
            </div>
        </div>
    </li>
    <br>

        </ol>
    </div>






     </div>
<br><br>
    
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