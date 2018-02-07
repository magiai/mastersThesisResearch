document.addEventListener("DOMContentLoaded", function () {


    var showFirstNext = document.querySelectorAll('.firstNextQuestionBox');

    for (var i = 0; i < showFirstNext.length; i++) {
        showFirstNext[i].addEventListener("click", function (event) {


            event.preventDefault();
            //to działa
            /** @namespace this.parentElement.nextElementSibling.style */
            this.parentElement.nextElementSibling.style.display = "block";
            this.parentElement.style.display = "none";


        });
    }


        const showNext = document.querySelectorAll('.nextQuestionBox');

        for (var i=0; i<showNext.length; i++) {

            console.log(i);

            showNext[i].addEventListener('click', function(e) {

                e.preventDefault();

                /* musimy przejsc do najblizszego kontenera z pytaniem */
                /* mozna closest, mozna tez parentElement */

                const cnt = this.parentElement;
                const radios = cnt.querySelectorAll('input[type="radio"]');
                var canPass = false;

                for (var i=0; i<radios.length; i++) {
                    if (radios[i].checked) {
                        canPass = true;
                        break;
                    }
                }

                if (canPass) {

                    this.parentElement.nextElementSibling.style.display = "block";
                    this.parentElement.style.display = "none";

                } else {

                    alert('Odpowiedź na wszystkie pytania');
                    cnt.querySelector('.error').style.display = "block";
                    return false;
                }
            })
        }
    });
