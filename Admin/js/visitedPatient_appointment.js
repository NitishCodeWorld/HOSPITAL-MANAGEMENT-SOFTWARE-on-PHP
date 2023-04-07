function showDoctorCalender() {
    var doctor = document.getElementById('myChoiceDoc').value;

    switch(doctor) {
        case "Binay Kumar" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
            document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
            break;
        case "Nidhi Jha" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-nidhi-jha.txt", true);
            xhttp.send();
            break;
        case "Mohammad Ezat" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
            document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
            break;
        case "Odessa Dawson" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-nidhi-jha.txt", true);
            xhttp.send();
            break;
        case "Ulric Prince" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
            document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
            break;
        case "Wang Hawkins" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-nidhi-jha.txt", true);
            xhttp.send();
            break;
        case "Zorita Jenkins" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
            document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
            break;
        case "Chandler Kirkland" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-nidhi-jha.txt", true);
            xhttp.send();
            break;
        case "Kylee Cortez" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
            break;
        case "Kiona Rice" :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-nidhi-jha.txt", true);
            xhttp.send();
            break;
        default :
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                document.getElementById('dr-calender').innerHTML = this.responseText;
            }
            xhttp.open("GET", "text/dr-Binay-Kumar.txt", true);
            xhttp.send();
    }
}

