document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

if($(document).scrollTop() > 25){
    $("#nav-container").addClass("bg-white");
    $("#nav-container").addClass("shadow");
    $("#nav-container").removeClass("p-3");
}

$(document).scroll(function(){
    if($(document).scrollTop() > 25){
        $("#nav-container").addClass("bg-white");
        $("#nav-container").addClass("shadow");
        $("#nav-container").removeClass("p-3");
    }
    else{
        $("#nav-container").removeClass("bg-white");
        $("#nav-container").removeClass("shadow");
        $("#nav-container").addClass("p-3");
    }
});