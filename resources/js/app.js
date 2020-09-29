require('./bootstrap');
AOS.init();
const axios = require('axios');
let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
let questionnaireForm = document.querySelector("#questionnaireForm");

// Questionnaire Form Submit Event (AJAX)
if(questionnaireForm) {
    questionnaireForm.addEventListener("submit", function(event) {

        event.preventDefault();

        let questionnaireId = $('.hidden-questionnaire-id').val();
        let email = $('.hidden-user-email').val();
        let answerOne = $('#answer-0').val();
        let answerTwo = $('#answer-1').val();
        let answerThree = $('#answer-2').val();
        let answerFour = $('#answer-3').val();

        document.querySelector('.questionnaire-submit-btn').innerText = "Sending...";

        axios({
            method: 'post',
            url: `${rootURL}/questionnaire/store`,
            data: {
                _token: CSRF_TOKEN, 
                questionnaire_id: questionnaireId,
                email: email,
                first_answer: answerOne,
                second_answer: answerTwo,
                third_answer: answerThree,
                fourth_answer: answerFour,
            }
        }).then(function(response){

            console.log(response);
            document.querySelector('.questionnaire-submit-btn').innerText = "Submit";

            const Toast = Swal.mixin({
                toast: true,
                position: 'top',
                showConfirmButton: false,
                timer: 6000,
                timerProgressBar: true,
                onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            
            Toast.fire({
                icon: 'success',
                title: 'Your answers have been stored! Why not do another one?!'
            });

            document.querySelector("#questionnaireForm").reset();

        });
    
    });
}