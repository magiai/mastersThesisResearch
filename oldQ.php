<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="mainContainer">

    <div class="introContainer subMainBox">
        <h3>Badanie preferencji wizualnych</h3>
        <p>Tutaj jest wstęp do badania</p>
        <div class="nextQuestionBox">
            <button class="nextQuestion">Zaczynamy</button>
        </div>

    </div>


    <!----------------------------ZDJĘCIA ---------------------------------------------------------->
    <div class="questionSwitchContainer subMainBox">
        <div class="imagePosition"><div class = "image img1"></div></div>
        <div>
            <h3 class="question">Czy to zdjęcie Ci się podoba?</h3>
            <ul class="likert">
                <li class="likertElement">Zdecydowanie nie<input id="scaleStart" type="radio" name="estimation" value="1" />
                <li class="likertElement">Nie<input type="radio" name="estimation" value="2" />
                <li class="likertElement">Raczej nie<input type="radio" name="estimation" value="3" />
                <li class="likertElement">Nie mam zdania<input type="radio" name="estimation" value="4" />
                <li class="likertElement">Raczej tak<input type="radio" name="estimation" value="5"/>
                <li class="likertElement">Tak<input type="radio" name="estimation" value="6" />
                <li class="likertElement">Zdecydowanie tak<input id="scaleEnd" type="radio" name="estimation" value="7" />
            </ul>
        </div>
        <div class="nextQuestionBox">
            <button class="nextQuestion">Następne</button>
        </div>
    </div>

    <div class="questionSwitchContainer subMainBox">
        <div class="imagePosition"><div class = "image img2"></div></div>
        <div>
            <h3 class="question">Czy to zdjęcie Ci się podoba?</h3>
            <ul class="likert">
                <li class="likertElement">Zdecydowanie nie<input id="scaleStart" type="radio" name="estimation" value="1" />
                <li class="likertElement">Nie<input type="radio" name="estimation" value="2" />
                <li class="likertElement">Raczej nie<input type="radio" name="estimation" value="3" />
                <li class="likertElement">Nie mam zdania<input type="radio" name="estimation" value="4" />
                <li class="likertElement">Raczej tak<input type="radio" name="estimation" value="5"/>
                <li class="likertElement">Tak<input type="radio" name="estimation" value="6" />
                <li class="likertElement">Zdecydowanie tak<input id="scaleEnd" type="radio" name="estimation" value="7" />
            </ul>
        </div>
        <div class="nextQuestionBox">
            <button class="nextQuestion">Następne</button>
        </div>
    </div>

    <div class="questionSwitchContainer subMainBox">
        <div class="imagePosition"><div class = "image img3"></div></div>
        <div>
            <h3 class="question">Czy to zdjęcie Ci się podoba?</h3>
            <ul class="likert">
                <li class="likertElement">Zdecydowanie nie<input id="scaleStart" type="radio" name="estimation" value="1" />
                <li class="likertElement">Nie<input type="radio" name="estimation" value="2" />
                <li class="likertElement">Raczej nie<input type="radio" name="estimation" value="3" />
                <li class="likertElement">Nie mam zdania<input type="radio" name="estimation" value="4" />
                <li class="likertElement">Raczej tak<input type="radio" name="estimation" value="5"/>
                <li class="likertElement">Tak<input type="radio" name="estimation" value="6" />
                <li class="likertElement">Zdecydowanie tak<input id="scaleEnd" type="radio" name="estimation" value="7" />
            </ul>
        </div>
        <div class="nextQuestionBox">
            <button class="nextQuestion">Następne</button>
        </div>
    </div>

    <!---------------------------SEKCJA RI--------------------------------- -->

    <div class="questionSwitchContainer subMainBox">

        <div class="instructionRIbox">
            <p class="instructionRI">
                <b>INSTRUKCJA:</b> Przeczytaj tę instrukcję zanim zaczniesz odpowiadać. <br><br>
                Kwestionariusz, który zaraz wypełnisz składa się z 60 stwierdzeń. Przeczytaj każde z nich uważnie. Przy każdym zdaniu zaznacz odpowiedź,<br>
                która najlepiej wyraża Twoją opinię. Upewnij się czy swoją odpowiedź zaznaczasz przy odpowiednim stwierdzeniu.
                <br>
                <br>

                Ustosunkuj się do wszystkich stwierdzeń.
            </p>
        </div>
        <div class="nextQuestionBox">
            <button class="nextQuestion">Rozumiem</button>
        </div>
    </div>





    <!-----------------------------------PYTANIA RI---------------------------->

    <div class="questionSwitchContainer subMainBox">

        <form class="formRI" action="index.php" method="post">

            <!-- Q1RIv1 - Q1 = question 1, RI = różnice indywidualne, v1 = zdecydowanie nie zgadzam się, v5 = Zdecydowanie zgadzam się -->




        </form>



        <!----------------------------------------Następne-------------------------------------------------->
        <div class="nextQuestionBox">
            <button class="nextQuestion">Następne</button>
        </div>
    </div>


    <!------------------INFORMACJE O OSOBIE BADANEJ------------------------ -->

    <div class="aboutExaminedBox subMainBox">
        <p>Od ilu lat zajmujesz się fotografią / sztukami wizualnymi?</p>

        <div class="aboutExaminedQuestions">

            <form class="years" action="/action_page.php">
                <input type="number" name="quantity" min="1" max="60">
                <br>
                <input class="noDeclaration" type="checkbox" name="notAphotographer" value="no"> Nie zajmuję się fotografią / sztukami wizualnymi.<br>


                <p class="photoGenre">Które z tych zagadnień jest Ci najbliższe?</p>
                <select class="kindOfPhotography" name="kindOfPhotography" size="15" multiple>
                    <option value="portretowa">fotografia portretowa</option>
                    <option value="reportażowa">fotografia reportażowa</option>
                    <option value="moda">fotografia mody</option>
                    <option value="reklamowa">fotografia reklamowa</option>
                    <option value="lifestyle">fotografia lifestyle</option>
                    <option value="konceptualna">fotografia konceptualna</option>
                    <option value="przyrodnicza">fotografia przyrodnicza</option>
                    <option value="abstrakcyjna">fotografia abstrakcyjna</option>
                    <option value="historia_fotografii">historia fotografii</option>
                    <option value="wystawiennicza">fotografia wystawiennicza</option>
                    <option value="analiza_obrazu">analiza obrazu</option>
                    <option value="teoria_obrazu">teoria obrazu</option>
                    <option value="szlachetne_techniki">szlachetne techniki w fotografii</option>
                    <option value="cyfrowa_obrobka_obrazu">cyfrowa obróbka obrazu</option>
                    <option value="inne">inne</option>
                </select>
                <br>

                <p class="mainOccupationQuestion">Czy fotografia jest Twoim głównym zajęciem?</p>
                <input class="mainOccupation" type="checkbox" name="notAphotographer" value="no"> Tak
                <input class="mainOccupation" type="checkbox" name="notAphotographer" value="no"> Nie<br>


                <div class="nextQuestionBox">
                    <input class="theLastButton" type="submit" value="Wyślij">
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>




