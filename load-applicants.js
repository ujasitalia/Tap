let count;
let previous = document.querySelector('#previous');
let next = document.querySelector('#next');

next.addEventListener('click', () => {
    count++;
    showCustomer(count);
})
previous.addEventListener('click', () => {
    count--;
    showCustomer(count);
})

function net() {

}
function prev() {
    count--;
    showCustomer(count);
}

function forward() {
    window.location = 'select_applicants.php';
}

function showCustomer(str) {
    var xhttp;
    count = str;
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getapplicant.php?q=" + str, true);
    xhttp.send();
}

