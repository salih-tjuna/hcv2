@extends ('layouts.master')


@section ('content')

    <div class="title__container sub_orange">

        <span class="font_orange">NOMOREC</span>
        <h1> CONTACT</h1>

    </div>

    <div class="gradient--head"></div>

    <div class="wrapper">

        <form action="/action_page.php">
            <div class="form__leftside" >

                <p>VOORNAAM</p>
                <input type="text" name="firstname" value="">

                <p>ACHTERNAAM</p>
                <input type="text" name="lastname" value="">

                <p>E-MAIL</p>
                <input type="text" name="firstname" value="">

                <p>TELEFOON</p>
                <input type="text" name="lastname" value="">

                <p>ONDERWERP</p>
                <input type="text" name="firstname" value="">

            </div>

            <div class="form__rightside"><p>ALGEMENE VRAGEN</p>
                <textarea name="message" rows="19" cols="55"></textarea>

                <div class="button__container">

                    <div class="button">
                        <a href="/form"><H4> INTAKE AFRONDEN </H4></a>
                    </div>

                    <div class="driehoek"> </div>

                </div>

            </div>



        </form>

    </div>

@endsection
