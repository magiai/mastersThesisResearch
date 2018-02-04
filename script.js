document.addEventListener("DOMContentLoaded", function () {


    var showNext = document.querySelectorAll('.nextQuestionBox');

    for (var i = 0; i < showNext.length; i++ ) {
        showNext[i].addEventListener("click", function (event) {


            event.preventDefault();
            //to działa
            /** @namespace this.parentElement.nextElementSibling.style */
            this.parentElement.nextElementSibling.style.display = "block";
            this.parentElement.style.display = "none";


        });
    }

});

//muszę jeszcze znaleźć sposób, żeby pierwsza strona szła dalej i zastąpić name klasą if hasClass?

    // var checkIfEmpty = document.querySelectorAll('input[name="Q1PIC"]:checked').value;
//     var checkIfEmpty = document.querySelectorAll('input').value;
//
//     var showNext = document.querySelectorAll('.nextQuestionBox');
//     // var checkedValidation = document.querySelectorAll('.likertElement');
//
//     for (var i = 0; i < showNext.length; i++) {
//         showNext[i].addEventListener("click", function (event) {
//
//                 // if (checkedValidation.checked)
//             for (var j = 0; j = checkIfEmpty.length; j++) {
//
//
//                 if (checkIfEmpty[j] === 1 || checkIfEmpty[j] === 2 || checkIfEmpty[j] === 3 || checkIfEmpty[j] === 4
//                     || checkIfEmpty[j] === 5 || checkIfEmpty[j] === 6 || checkIfEmpty[j] === 7) {
//                     //to działa
//                     /** @namespace this.parentElement.nextElementSibling.style */
//                     this.parentElement.nextElementSibling.style.display = "block";
//                     this.parentElement.style.display = "none";
//
//
//                 } else {
//
//                     event.preventDefault();
//                     console.log("Zaznacz odpowiedź!")
//                 }
//             }
//             })
//             }
//
// });


// for (var j = 0; j = checkIfEmpty.length; j++) {
//
//
//     if (checkIfEmpty[j] === 1 || checkIfEmpty[j] === 2 || checkIfEmpty[j] === 3 || checkIfEmpty[j] === 4
//         || checkIfEmpty[j] === 5 || checkIfEmpty[j] === 6 || checkIfEmpty[j] === 7) {
//         //to działa
//         /** @namespace this.parentElement.nextElementSibling.style */
//         this.parentElement.nextElementSibling.style.display = "block";
//         this.parentElement.style.display = "none";
//
//
//     } else {
//
//         event.preventDefault();
//     }
// }
// })
// }
//
// });

