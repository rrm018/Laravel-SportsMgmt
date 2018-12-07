<html>
<head>
        <!--Import Google Icon Font-->
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link type="text/css" rel="stylesheet" href="/css/material-icons.css">
        
  <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <!--Import materialize.css-->
         <!-- Compiled and minified CSS -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->

        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
        
        <script type="text/javascript" src="/js/jquery.min.js"></script>
            <script type="text/javascript" src="/js/materialize.min.js"></script>
</head>
<body class="grey darken-4">
    
    @yield('content')


      <footer class="page-footer black">
           <div class="container">
             <div class="row">
               <div class="col l6 ">
                 <h5 class="white-text">About US <i class="material-icons" style="font-size: 50px; vertical-align:middle;">chevron_right</i></h5>
                 <p class="grey-text text-lighten-4">We made this website to automate the Rigours of Sport Management</p>
               </div>
               <div class="col 10 offset-l2">
                 <h5 class="white-text">Contact Us</h5>
                 <ul>
                   <li><a class="grey-text text-lighten-3" href="#!">Phone: (+91) 8767609797</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Email: contactus.org@gmail.com</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="footer-copyright">
             <div class="container">
             © 2018 Copyright Text
             <a class="grey-text text-lighten-4 right" href="www.google.com">Sponsers</a>
             </div>
           </div>
         </footer>
         <!--JavaScript at end of body for optimized loading-->
            <!--Import jQuery before materialize.js-->
           
  <!-- Compiled and minified JavaScript -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->
  {{-- <script type = "text/javascript"
  src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>        --}}
         
            @if(Session::has('message'))
            <script type="text/javascript">
                Materialize.toast("{{ Session::get('message')['msg'] }}", 4000, "{{ Session::get('message')['class'] }}");
            </script>
            @endif
            @if(Session::has('message'))
              @if(message::has('class')=='green')
                <script>
                  $('#players').show();
                </script>
              @endif
            @endif
</body>
</html>