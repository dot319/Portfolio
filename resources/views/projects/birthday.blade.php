@extends('layout')

@section('title', 'Birthday Calculator')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/projects/birthday.css') }}">
<link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
@endsection

@section('content')
<div class="page">

    <header>
        <div id="nav_bar">
            <div id="nav_bar_name">
                Birthday Calculator
            </div>
            <div id="nav_bar_menu">
                <ul>
                    <li><a href="../../index.html">Visit my website</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <div id="main_inner">

            <div id="sound_toggle">
                Toggle sound
            </div>


            <div id="calculator">
                <div id="calculator_header" >
                    <p><h2>What's your date of birth?</h2></p>
                </div>
                <div id="calculator_form">
                    <form>
                        <p><input id="birthdate" name="birthdate" type="date"></p>
                        <p><input id="submit" name="submit" type="button" value="Click to see how many days until your birthday!"></p>
                    </form>
                </div>
                <div id="calculator_answer">

                </div>
            </div>

            <div id="switch_calc">
                <div class="link_to_other" id="link_christmas">
                    <p>What about</p>
                    <p>Christmas?</p>
                </div>
                <div class="space_between_links"></div>
                <div class="link_to_other" id="link_indday">
                    <p>What about</p>
                    <p>Independence</p> 
                    <p>Day?</p>
                </div>
            </div>

            <div id="switch_calc_answer">

            </div>

        </div>

    </main>

    <footer>
        <div id="copyright_footer">
            <div id="copyright_footer_inner">
                Made by Dorieke Berends
            </div>
        </div>
    </footer>

    </div>

    <script src="{{ URL::asset('js/projects/birthday.js') }}"></script>
@endsection