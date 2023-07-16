$(document).ready(() => {
    $('#hamburger-menu').click(() => {
        $('#hamburger-menu').toggleClass('active')
        $('#nav-menu').toggleClass('active')
    })

    let navText = ["<i class='bx bx-chevron-left' style='color:#ffffff; background-color: rgba(0,0,0,0.5)'></i>", "<i class='bx bx-chevron-right' style='color:#ffffff; background-color: rgba(0,0,0,0.5)'></i>"]

$('.movie-slide').owlCarousel({
    items: 6,
    dots: false,
    nav: true,
    navText: navText,
    margin: 30,
    smartSpeed: 1000,
    animateIn: 'linear',
    animateOut: 'linear',
    responsive:{
            500: {
                items: 3
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })
})