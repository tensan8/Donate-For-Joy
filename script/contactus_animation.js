var i = 0;
var txt = 'Contact Us';
var speed = 70;

function typeWriter(){
    if (i < txt.length) {
        document.getElementById("contact-us-title").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

typeWriter();
