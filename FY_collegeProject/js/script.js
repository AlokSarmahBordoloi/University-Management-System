let menu = document.querySelector('#menubtn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} 

function validateForm() {
    let name = document.forms["form"]["name"].value;
    let email = document.forms["form"]["email"].value;
    let gender = document.forms["form"]["gender"].value;
    let username = document.forms["form"]["username"].value;
    let password = document.forms["form"]["password"].value;
    let phone = document.forms["form"]["phone"].value;
    let dob = document.forms["form"]["dob"].value;
    let graduation = document.forms["form"]["graduation"].value;
    if (name == "" || email == "" || gender == "" || username == "" || password == "" || phone == "" || dob == "" || graduation == "" ) {
      alert("All Fields must be filled out");
      return false;
    }
}

function validateFormteacher() {
    let username = document.forms["formteacher"]["username"].value;
    let password = document.forms["formteacher"]["password"].value;
    if (username == "" || password == "") {
    alert("All Fields must be filled out");
    return false;
    }
} 

function validateFormnew() {
    let username = document.forms["formnewlogin"]["username"].value;
    let password = document.forms["formnewlogin"]["password"].value;
    if (username == "" || password == "") {
    alert("All Fields must be filled out");
    return false;
    }
} 

function validateFormstudents() {
    let roll = document.forms["formstudents"]["roll"].value;
    let password = document.forms["formstudents"]["password"].value;
    if (roll == "" || password == "") {
    alert("All Fields must be filled out");
    return false;
    }
} 