window.addEventListener("load", () => {
    const sounds = document.querySelectorAll(".sound");
    const pads = document.querySelectorAll(".pads div");
    const visual = document.querySelector(".visual");
    const colors = [
        "#5dd27f",
        "#2d84de",
        "#f8b96a",
        "#fa783d",
        "#7074c7",
        "#f72061"
    ];

    pads.forEach((pad, index) => {
        pad.addEventListener("click", function () {
            sounds[index].currentTime = 0;
            sounds[index].play();
            createBubble(index);
        });
    }); // end of for


}); // end of event listener

function freeGroovy() {
    document.getElementById("groovyDownload").innerHTML = " <div class'pl-2 pr-2'><div class='container '> <p class='lead text-center text-white'><i class='bi bi-check-all fa-sm'></i>Sucessful Download </p></div></div> ";
    alert("Thank you for Downloading Groovy");
}

function PremiumGroovy() {
    document.getElementById("groovyPremium").innerHTML = " <div class'pl-2 pr-2'><div class='container '> <p class='lead text-center text-white'><i class='bi bi-check-all fa-sm'></i>Sucessful Bought </p></div></div> ";
    alert("Thank you for Buying Premium Groovy");
}


function scrollAppear() {

    const textintro = document.querySelector('.intro-text');
    const screenPosition = window.innerHeight;

    const introPosition = textintro.getBoundingClientRect().top;


    if (introPosition < screenPosition) 
        textintro.classList.add('intro-apper');
    


} // end of function

function cruDate() {
    const date = new Date();
    document.getElementById("date").innerHTML = date;
    console.log(date);

} //

window.addEventListener('scroll', scrollAppear);


function validateForm() {
    const errorContainer = document.querySelector("#errorContainer");
    errorContainer.innerHTML = "";

    const form = document.forms["loginForm"];

    const usernameInput = form["username"];
    const emailInput = form["email"];
    const passwordInput = form["password"];
    const messageInput = form["message"];

    const usernameValue = usernameInput.value;
    const emailValue = emailInput.value;
    const passwordValue = passwordInput.value;
    const messageValue = messageInput.value;

    if (usernameValue.trim().length === 0) {
        alert("Username cannot be empty");
        return false;
    }

    if (emailValue.trim().length === 0) {
        alert("E-mail cannot be empty");
        return false;
    }

    if (passwordValue.trim().length === 0) {
        alert("Password cannot be empty");
        return false;
    }

    if (messageValue.trim().length === 0) {
        alert("Message cannot be empty");
        return false;
    }

    

    if (messageValue.trim().length > 200) {
        errorContainer.innerHTML += getError("Message cannot be greater than 140 characters.");
        return false;
    }

    return true;
}



