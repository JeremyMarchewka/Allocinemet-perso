function nav1(){
    document.getElementById("link_nav").style.position = "fixed";
    document.getElementById("link_nav").style.backgroundColor = "#474747";
    document.getElementById("link_nav").classList.add("animated", "fadeInDown");
    
}

function nav2(){
    document.getElementById("link_nav").style.position = "absolute";
    document.getElementById("link_nav").style.backgroundColor = "transparent"
}

$('.m-nav-toggle').click(function(e){
    e.preventDefault();
    $('#Navbar').toggleClass('is-open');
})