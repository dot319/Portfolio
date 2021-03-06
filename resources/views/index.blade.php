@extends('layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
@endsection

@section('content')
<header id="nav_header">
    <div id="nav_header_inner">
        <div id="nav_name">
            <a>Dorieke<b>Berends</b></a>
        </div>
        <nav id="nav_menu">
            <ul>    
                <li><a id="projects_hyperlink">Projects</a></li>
                <li><a id="resume_hyperlink">Resume</a></li>
                <li><a id="skills_hyperlink">Skills</a></li>
                <li><a id="contact_hyperlink">Contact</a></li>
            </ul>
        </nav>
        <div id="nav_menu_small">
            <img id="hamburger" src="images/hamburger.png" alt="menu">
            <div id="dropdown_nav">
                <ul>                            
                    <li><a id="projects_hyperlink_dropdown">Projects</a></li>
                    <li><a id="resume_hyperlink_dropdown">Resume</a></li>
                    <li><a id="skills_hyperlink_dropdown">Skills</a></li>
                    <li><a id="contact_hyperlink_dropdown">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<main>

    <header id="hero_header">
        <div id="hero_header_inner">

            <div id="hero_header_center">

            <div id="hero_header_avatar">
                <img id="hero_header_avatar_itself" src="images/avatar3.png" alt="Avatar">
            </div>
            <div id="hero_header_text">
                <p><span id="hero_header_welcome">Welcome!</span></p>
                <p>My name is <span id="hero_header_my_name">Dorieke Berends</span> and I'm a webdeveloper.</p> 
                <p>I'd love to design your website for you!</p>
            </div>

            </div>

        </div>
    </header>

    <div id="portfolio_above" class="between_sections_bot">
        <a href="#portfolio_above"><img id="hero_header_scrolldown_itself" src="images/scrolldown_black.png" alt="Scroll down"></a>
    </div>

    <section id="projects">
        <div id="projects_inner">
            <div id="projects_narrow">
                 <div class="section_header" id="projects_header">
                    <h2>Side Projects</h2>
                    <p>These are some fun little side projects I made in my free time</p>
                </div>
                <div id="projects_list">

                    <div class="projects_item_outer_outer">
                        <div class="projects_item_outer">
                            <div class="projects_item">
                                <div class="projects_item_thumb">
                                    <img class="projects_item_thumb_itself" src="images/project_thumbs/sinterklaas.png">
                                </div>
                                <a href="https://sinterlijstje.doriekeberends.nl/" target="_blank">
                                    <div class="projects_item_name">
                                        <div>Sinterlijstje</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="projects_item_outer_outer">
                        <div class="projects_item_outer">
                            <div class="projects_item">
                                <div class="projects_item_thumb">
                                    <img class="projects_item_thumb_itself" src="images/project_thumbs/virtual_yardsale.png">
                                </div>
                                <a href="https://virtualyardsale.doriekeberends.nl/" target="_blank">
                                    <div class="projects_item_name">
                                        <div>Virtual Yardsale</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="projects_item_outer_outer">
                        <div class="projects_item_outer">
                            <div class="projects_item">
                                <div class="projects_item_thumb">
                                    <img class="projects_item_thumb_itself" src="images/project_thumbs/bubblemaker.png">
                                </div>
                                <a href="https://dot319.github.io/BubbleMaker.github.io/" target="_blank">
                                    <div class="projects_item_name">
                                        <div>Bubble maker</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="projects_item_outer_outer">
                        <div class="projects_item_outer">
                            <div class="projects_item">
                                <div class="projects_item_thumb">
                                    <img class="projects_item_thumb_itself" src="images/project_thumbs/bouncy.png">
                                </div>
                                <a href="https://code.sololearn.com/W25PsWlOsuHI/#html" target="_blank">
                                    <div class="projects_item_name">
                                        <div>Bouncing ball</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="projects_item_outer_outer">
                        <div class="projects_item_outer">
                            <div class="projects_item">
                                <div class="projects_item_thumb">
                                    <img class="projects_item_thumb_itself" src="images/project_thumbs/birthday.jpg">
                                </div>
                                <a href="/Birthday-Calculator">
                                    <div class="projects_item_name">
                                        <div>Birthday Calculator</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="between_sections"></div>

    <section id="resume">
        <div id="resume_inner">
            <div id="resume_narrow">
                <div class="section_header" id="resume_header">
                    <h2>Resume</h2>
                    <p></p>
                </div>
                <div id="resume_edu">
                    <div id="resume_edu_header">

                    </div>
                    <div id="resume_edu_list">

                        <div class="resume_edu_item">
                            <div class="resume_edu_item_left">
                                <div class="resume_edu_item_logo">
                                    <a href="https://www.codegorilla.nl/" target="_blank"><img class="resume_edu_item_logo_itself" src="images/resume_logos/CG_logo.png" alt="CodeGorilla"></a>
                                </div>
                                <div class="resume_edu_item_date">
                                    September 2018 - present
                                </div>
                            </div>
                            <div class="resume_edu_item_description">
                                <p><h3>Traineeship web development</h3></p>
                                <p>A short-duration, high-intensity traineeship educating students to become full-stack Junior Web Developers proficient in project management, web security, databases, version control and more.</p>
                                <p>Expected completion date: December 21st, 2018.</p>
                            </div>
                        </div>

                        <div class="resume_edu_item">
                            <div class="resume_edu_item_left">
                                <div class="resume_edu_item_logo">
                                    <a href="https://www.sololearn.com/" target="_blank"><img class="resume_edu_item_logo_itself" src="images/resume_logos/SL_logo.png" alt="SoloLearn"></a>
                                </div>
                                <div class="resume_edu_item_date">
                                        September 2018
                                </div>
                            </div>
                            <div class="resume_edu_item_description">
                                <p><h3>Online courses</h3></p>
                                <p>Online platform that offers free courses teaching the basics of programming languages.</p>
                                <p>Courses finished: HTML, CSS, JavaScript and PHP.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="resume_courses">

                </div>
            </div>
        </div>
    </section>

    <div class="between_sections"></div>

    <section id="skills">
        <div id="skills_inner">
            <div id="skills_narrow">
                <div class="section_header" id="skills_header">
                    <h2>Skills</h2>
                </div>
                <div id="skills_list">

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/HTML_Logo.png"></div>
                                <div class="skill_item_name">HTML</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/CSS_logo.png"></div>
                                <div class="skill_item_name">CSS</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/JS_logo.png"></div>
                                <div class="skill_item_name">JavaScript</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/PHP_logo.png"></div>
                                <div class="skill_item_name">PHP</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/GIMP_logo.png"></div>
                                <div class="skill_item_name">The GIMP</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill_item_padding">
                        <div class="skill_item">
                            <div class="skill_item_inner">
                                <div class="skill_item_logo"><img class="skill_item_logo_itself" src="images/skills/VSC_logo.png"></div>
                                <div class="skill_item_name">Visual Studio Code</div>
                                <div class="skill_item_stars">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/full_star.png" alt="*">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                    <img class="skill_item_star_itself" src="images/skills/empty_star.png">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="between_sections"></div>

    <section id="contact">
        <div id="contact_inner">
            <div id="contact_narrow">
                <div class="section_header" id="contact_title">
                    <h1>Contact me</h1>
                </div>
                <div id="contact_text">
                    <p>Feel free to contact me! The form below doesn't do anything yet, I still need to implement the backend part of the code. In the meantime, you can mail me at dorieke90@gmail.com!</p>
                </div>
                <div id="contact_form">
                    <form>
                        <p><input id="contact_name" name="name" type="text" placeholder="Your name"><br /></p>
                        <p><input id="contact_email" name="email" type="email" placeholder="Your e-mail address"><br /></p>
                        <p><textarea id="contact_message" name="message" type="text" placeholder="Type your message here!"></textarea><br /></p>
                        <p><input id="contact_send" name="send" type="submit" value="Send"><br /></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<div class="between_sections"></div>

<footer id="social_footer">
    <div id="social_footer_inner">
        <div id="social_footer_narrow">
            <div class="section_header" id="social_footer_name">
                Dorieke<b>Berends</b>
            </div>
            <div id="social_footer_text">
                <p>Web developer, designer, programmer and former secret agent. Often seen 'flixing and chilling with her cats or exploring fantasy gamescapes.</p>
            </div>
            <div id="social_footer_logos">
                <div class="social_footer_logo">
                    <a href="https://nl.linkedin.com/in/dorieke-berends-99722622" target="_blank"><img class="social_footer_logo_itself" src="images/LI_logo.png" alt="LinkedIn"></a>
                </div>
                <div class="social_footer_logo">
                    <a href="https://www.facebook.com/dorieke90" target="_blank"><img class="social_footer_logo_itself" src="images/FB_logo.png" alt="Facebook"></a>
                </div>
                <div class="social_footer_logo">
                    <a href="https://github.com/dot319" target="_blank"><img class="social_footer_logo_itself" src="images/GH_logo.png" alt="GitHub"></a>
                </div>
            </div>
            <div id="back_to_top">
                Back to top
            </div>
        </div>
    </div>
</footer>

<footer id="copyright_footer">
    <div id="copyright_footer_inner">
        Made by Dorieke Berends.
    </div>
</footer>

<script src="js/myscripts.js"></script>
@endsection