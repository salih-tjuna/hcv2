@extends ('layouts.master')


@section ('content')

    <div class="title__container">

        <span class="font_orange">NOMOREC</span>
        <h1> THUIS TESTEN OP HEPC</h1>

    </div>


    <div class="gradient--head"></div>

    <div class ="body--gray">

        <div class="wrapper-form">

            <form>

                <div class="info-container">
                    <div class="info-container__inputbox">
                        <p>Wat is je leeftijd?</p> <input type="text" name="age"><br>

                    </div>
                    <div class="info-container__inputbox">
                        <p>Wat is je geboorteland?</p> <input type="text" name="birthplace">
                    </div>
                </div>

                <p class="question"> Wat is je hiv-status?</p>

                <ul class="input">
                    <input type="radio" name="q1" value="a" id="q1a"><label for="q1a">Hiv-positief (wel hiv)</label><br/>
                    <input type="radio" name="q1" value="b" id="q1b"><label for="q1b">Hiv-negatief (geen hiv), gestest in de afgelopen 6 maanden</label><br/>
                    <input type="radio" name="q1" value="c" id="q1c"><label for="q1c">Weet ik niet, ik ben langer dan 6 maanden geleden voor het laast op hiv getest</label><br/>
                    <input type="radio" name="q1" value="d" id="q1d"><label for="q1d">Weet ik niet, ik ben nog nooit op hiv getest</label><br/>
                </ul>


                <p class="question"> Ben je ooit getest op hepatitis C?</p>

                <ul class="input">
                    <input type="radio" name="q2" value="a" id="q2a"><label for="q2a">Ja, ik ben een of meerdere malen gestest op geptattis C.</label><br/>
                    <input type="radio" name="q2" value="b" id="q2b"><label for="q2b">Nee, ik ben nooit getest op hepatitits C</label><br/>
                    <input type="radio" name="q2" value="c" id="q2c"><label for="q2c">ik weet niet of ik ooit getest ben op hepatitis C</label><br/>
                </ul>

                <hr>

                <p class="question"> Heb je in de afgelopen 12 maanden rietjes of andere attributen gedeeld bij het snuiven?</p>

                <ul class="input">
                    <input type="radio" name="q3" value="a" id="q3a"><label for="q3a">ja</label><br/>
                    <input type="radio" name="q3" value="b" id="q3b"><label for="q3b">nee</label><br/>
                </ul>

                <p class="question"> Heb je in de afgelopen 12 maanden drugs geinjecteerd ('geslamd)? (met een naald intraveneus (in je aderen). of in de anus,penis of onderhuids)?'</p>

                <ul class="input">
                    <input type="radio" name="q4" value="a" id="q4a"><label for="q4a">ja</label><br/>
                    <input type="radio" name="q4" value="b" id="q4b"><label for="q4b">nee</label><br/>
                </ul>

                <p class="question"> Dit is de hoofdvraag. ben je het hier mee eens?</p>

                <ul class="input">
                    <input type="radio" name="q5" value="a" id="q5a"><label for="q5a">ja </label><br/>
                    <input type="radio" name="q5" value="b" id="q5b"><label for="q5b">nee </label><br/>
                </ul>

                <p class="question"> Dit is een testvraag van freke. ben je een msm?</p>

                <ul class="input">
                    <input type="radio" name="q6" value="a" id="q6a"><label for="q6a">ja</label><br/>
                    <input type="radio" name="q6" value="b" id="q6b"><label for="q6b">nee</label><br/>
                </ul>

                <p class="question"> wat is je geslacht?</p>

                <ul class="input">
                    <input type="radio" name="q7" value="a" id="q7a"><label for="q7a">man</label><br/>
                    <input type="radio" name="q7" value="b" id="q7b"><label for="q7b">vrouw</label><br/>
                </ul>

                <ul class="input">
                    <input type="checkbox" name="animal" value="Cat" />informed consent <br />
                </ul>

                <div class="button__container">

                    <div class="button">
                        <a href="/form"><H4> INTAKE AFRONDEN </H4></a>
                    </div>

                    <div class="driehoek"> </div>

                </div>



            </form>


        </div>

    </div>



@endsection
