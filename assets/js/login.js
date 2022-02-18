/**
 * Created by Shawon on 2/5/2022.
 */

//====Fade-In-Out====//
function fade(param1, param2) {
    var y = document.getElementById(param1);
    y.className += " fade-leave-active fade-leave-to";
    var z = document.getElementById(param2);
    z.className += " fade-enter-active fade-enter-to";
    setTimeout(function(){
        y.style.display = "none";
        z.style.display = "block";
        y.className = param1;
        z.className = param2;
        document.documentElement.scrollTop = 0;
    }, 500);
}
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
})

function getRequest(url, data) {
    var req = false;
    try{
        // most browsers
        req = new XMLHttpRequest();
    } catch (e){
        // IE
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            // try an older version
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {
                return false;
            }
        }
    }
    if (!req) return false;
    req.open("POST", url, true);
    req.send(data);
    return req;
}

function login() {
    var formdata  = new FormData();
    formdata.append('username' ,  document.getElementById("username").value);
    formdata.append('password' , document.getElementById("password").value);
    getRequest(
        '../../controller/login.php', // URL for the PHP file
        formdata
    );
}