

var home = document.getElementById("Home");
var allEvents = document.getElementById("AllEvents");
var addEvent = document.getElementById("AddEvent");
var about = document.getElementById("About");
var contact = document.getElementById("Contact");
var siteContent = document.getElementById("siteContent").innerHTML;

home.onclick = function() {
    document.getElementById("siteContent").innerHTML = siteContent;
}

allEvents.onclick = function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("siteContent").innerHTML = this.responseText;
        }
    }

    ajax.open("GET", "pages/allEvents.php", true);
    ajax.send();
}

addEvent.onclick = function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("siteContent").innerHTML = this.responseText;
        }
    }

    ajax.open("GET", "pages/addEvent.php", true);
    ajax.send();
}

about.onclick = function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("siteContent").innerHTML = this.responseText;
        }
    }

    ajax.open("GET", "pages/about.php", true);
    ajax.send();
}

contact.onclick = function(){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("siteContent").innerHTML = this.responseText;
        }
    }

    ajax.open("GET", "pages/contact.php", true);
    ajax.send();
}


