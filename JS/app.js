

const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answer-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".box-result");

let questionCounter = 0;
let currentQuestion;
let avaibleQusetions = [];
let avaibleOptions = [];
let correctAnswers = 0;
let attempt = 0;

function setAvaibleQuestions(){
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++){
        avaibleQusetions.push(quiz[i])
    }
}

function getNewQuestion(){
    questionNumber.innerHTML = "Question " + (questionCounter + 1) + " 0f " + quiz.length;
    const questionIndex = avaibleQusetions[Math.floor(Math.random() * avaibleQusetions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
   
    const index1 = avaibleQusetions.indexOf(questionIndex); // positon from avaibleQuestion Array
    avaibleQusetions.splice(index1, 1); // remove questionIndex from avaibleQ. array, question doesen't repeat
    
    const optionLen = currentQuestion.options.length

    for(let i=0; i<optionLen; i++){
        avaibleOptions.push(i)
    }

    optionContainer.innerHTML = '';
    let animationDelay = 0.15;

    for(let i=0; i<optionLen; i++){
        const optonIndex = avaibleOptions[Math.floor(Math.random() * avaibleOptions.length)];
        const index2 = avaibleOptions.indexOf(optonIndex); 
        avaibleOptions.splice(index2, 1);
        
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optonIndex];
        option.id = optonIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option)

        option.setAttribute("onclick","getResult(this)");
    }

    questionCounter++;
}


function getResult(element){
    const id = parseInt(element.id);
    if(id == currentQuestion.answer){
        element.classList.add("correct");
        updateAnswerIndicator("correct");
        correctAnswers++;
    }
    else{
        element.classList.add("wrong");
        updateAnswerIndicator("wrong");

        const optionLen = optionContainer.children.length;
        for(let i=0; i<optionLen; i++){
            if(parseInt(optionContainer.children[i].id) == currentQuestion.answer){
                optionContainer.children[i].classList.add("correct");
            }
        }
    }
    attempt++;
    unclickableOptions();
}

function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for(let i=0; i<optionLen; i++){
        optionContainer.children[i].classList.add("already-answerd");
    }
}

function answersIndicator(){
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++){
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}

function updateAnswerIndicator(markType){
    answersIndicatorContainer.children[questionCounter-1].classList.add(markType)

}

function next(){
    if(questionCounter == quiz.length){
        quizOver();
    }
    else{
        getNewQuestion();
    }
}

function quizOver(){
    quizBox.classList.add("hide");
    resultBox.classList.remove("hide");
    quizResult();
}

function quizResult(){
    resultBox.querySelector(".total-question").innerHTML = quiz.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
    const percentage = (correctAnswers/quiz.length)*100;
    resultBox.querySelector(".percentage").innerHTML = percentage.toFixed(2)+"%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz.length;

}

function resetQuiz(){
    questionCounter = 0;
    correctAnswers = 0;
    attempt = 0;
}

function tryAgainQuiz(){
    resultBox.classList.add("hide");
    quizBox.classList.remove("hide");
    resetQuiz();
    startQuiz();
}

function goToHome(){
    resultBox.classList.add("hide");
    homeBox.classList.remove("hide");
    resetQuiz();
}

function startQuiz(){

    homeBox.classList.add("hide");
    quizBox.classList.remove("hide");

    setAvaibleQuestions();
    getNewQuestion();
    answersIndicator();
}


