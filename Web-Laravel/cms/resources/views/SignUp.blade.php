<!DOCTYPE html>
<html>

<head>

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

/*Sig UP*/

        #SignUp{
            text-align: center;
            background-color: rgb(31, 28, 62);
            border: 5px solid black;
            border-radius: 10px;
            margin-left:400px ;
            margin-right:400px ;
            padding-bottom: 170px;
            
        }

        h1{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            padding-top: 50px;
            font-size: 45px;
        }

        label{
            padding-right: 30px;
            font-size: 20px;
        }

        #Email{
            padding-right: 60px;
        }

        input{
            border-radius: 7px;
            font-size: 20px;
        }

        #btn{
            border-radius: 5px;
            border: 0px;
            font-size: 20px;
            padding: 7px;
            cursor: pointer;
            background-color: rgb(57, 113, 202);
            color: aliceblue;
        }

        #btn:hover{
            background-color: rgb(14, 43, 137);
            color: aliceblue;
        }

        p{
            font-size: 20px;
        }

        #SignIn{
            text-decoration: none;
            
            color: rgb(57, 113, 202);
        }

        #SignIn:hover{
            color: rgb(14, 43, 137);
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
        <li id="logsign"><a href="{{url('/Login')}}" >LogIn</a></li>
        <li> <a href="{{url('/SignUp')}}">Sign Up</a></li>
      </ul><br><br>


    
      <!--Main Sign Up-->

      <div id="SignUp">
      <h1>Sign Up</h1><br><br>
      <form method="POST" action="SignUp" >
        @csrf
        <label>Username</label>
        <input type="text" name="Username" required><br><br>
        @error('Username')
            <p>{{$message}}</p>
        @enderror
        <label>Password</label>
        <input type="password" name="Password" required><br><br>
        @error('Password')
            <p>{{$message}}</p>
        @enderror
        <label id="Email">Email</label>
        <input type="email" name="Email" required><br><br>
        @error('Email')
            <p>{{$message}}</p>
        @enderror


        <button type="submit" id="btn">Sign Up</button>
      </form>
      <p><a href="{{url('/Login')}}" target="_blank" id="SignIn">Sign In</a> if you already have an Account</p>
    </div>

</body>
</html>