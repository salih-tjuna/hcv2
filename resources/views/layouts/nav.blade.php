<header>

    <div class="header__headline">

        <a href="https://www.amc.nl/web/Zorg.htm">

            <img src="{{URL::asset('/media/logo_AMC.jpg')}}" class="header__headline--img"/>

        </a>
        <a href="http://www.ggd.amsterdam.nl/">

            <img src="{{URL::asset('/media/GGDAdam.jpg')}}" class="header__headline--img"/>

        </a>
        <a href="https://www.soaaids.nl/nl">

            <img src="{{URL::asset('/media/SOAIDS.jpg')}}" class="header__headline--img-padding"/>

        </a>

        {{--dit is de hamburger menu gedeelte a matsko---------------------------------------------------}}

        <div class="menu">
            <span class="menu-circle"></span>
            <a href="#" class="menu-link">
                    <span class="menu-icon">
                    <span class="menu-line menu-line-1"></span>
                    <span class="menu-line menu-line-2"></span>
                    <span class="menu-line menu-line-3"></span>
                    </span>
            </a>
        </div>

        <div class="menu-overlay">
            <a href="/twee">Home</a>
            <a href="/twee">About</a>
            <a href="/twee">Contact</a>
            <a href="/twee">Jobs</a>
        </div>
        {{--end of hamburger menu !-----------------------------------------------------------------------}}

    </div>

    <div class="header__navbar">

        {{--<img src="../Logo's/NoMoreC_VORMEN.ai">--}}
        <a href="/"><img src="{{URL::asset('/media/NomoreC-Logo.png')}}" class="header_navbar_img"/></a>

        <div class="header__navbar-menu">

            <ul class="header__navbar-menuitems">

                <li class="{{ set_active(['/', '/*']) }}"><a href="/twee">OVER NO MORE C</a></li>
                <li class="{{ set_active(['page/child-1']) }}"><a href="/twee">FQA</a></li>
                <li class="{{ set_active(['page/child-2']) }}"><a href="/contact">CONTACT</a></li>
                <li class="{{ set_active(['page/child-3']) }}"><a href="/twee">MEEDOEN?</a></li>

            </ul>

        </div>

        <div class="header__navbar-language">

            <a  href="#">EN</a>
            {{--<p><a href="#"> |</a></p>--}}
            <a class="current" href="#">NL</a>

        </div>


    </div>

    <div class="header__bottomline">

        <a href="#">INLOGGEN</a>
        <a href="#">MIJN TEST UITSLAG</a>

    </div>

</header>
{{--////end of header --------------------------------------------------------------------------------------------}}