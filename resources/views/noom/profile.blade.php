@extends('layouts/back_end')
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", sans-serif
        }

        #img-resize {
            width: 100%;
        }
    </style>
    <body>
    <!-- Page Container -->
    <div class="w3-container w3-content w3-margin-top" style="max-width:1400px;">
        <!-- The Grid -->
        <div class="w3-row-padding" style="margin:0 -16px">
            <!-- Left Column -->
            <div class="w3-quarter">
                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        @foreach($userDetail as $value)
                            <img src="{{ url('picture/'.$value->picture) }}" id="img-resize">
                        @endforeach
                        <div class="w3-container">
                            <h4><b>{{ Auth::user()->name }}</b></h4>
                        </div>
                    </div>
                    @foreach($userDetail as $valueUser)
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $valueUser->address }}</p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ Auth::user()->email}}</p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $valueUser->tel }}</p>
                            <hr>
                            @endforeach
                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b>
                            </p>
                            @foreach($skill as $valueSkill)
                                <p style="margin-left: 25px"> - {{$valueSkill->s_detail}}</p>
                            @endforeach
                            <br>
                            <p class="w3-large w3-text-theme"><b><i
                                            class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                            <p>English</p>
                            <p>Spanish</p>
                            <p>German</p>
                            <br>
                        </div>
                </div>
                <br>
                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                                class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span
                                    class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est
                            reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure,
                            iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014
                        </h6>
                        <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est
                            reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure,
                            iste.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012
                        </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
                    </div>
                </div>

                <div class="w3-container w3-card-2 w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i
                                class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                        <p>Web Development! All I need to know in one place</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>London Business School</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                        <p>Master Degree</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>School of Coding</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                        <p>Bachelor Degree</p><br>
                    </div>
                </div>
                <!-- End Right Column -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Page Container -->
    </div>
    <script>
        function openLeftMenu() {
            document.getElementById("leftMenu").style.display = "block";
        }
        function closeLeftMenu() {
            document.getElementById("leftMenu").style.display = "none";
        }
    </script>

@endsection