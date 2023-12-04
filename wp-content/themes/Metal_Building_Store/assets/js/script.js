// price range
const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
let priceGap = 1000;

var lower = document.querySelector('.input-min-span');
var upper = document.querySelector('.input-max-span');

priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);
        
        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                lower.innerHTML = minPrice;
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                upper.innerHTML = maxPrice;
            }
        }
    });
});
rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);
        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            lower.innerHTML = minVal;
            upper.innerHTML = maxVal;
        }
    });
});

// open close advance search popup
function openPopup() {   
    document.getElementById("popup").classList.add("show"); 
}

function closePopup() {
    document.getElementById("popup").classList.remove("show");
}

// open close advance search popup
function openQuotePopup() {  
    document.getElementById("quote-popup").classList.add("show");  
}

function closeQuotePopup() {
    document.getElementById("quote-popup").classList.remove("show");
}

// accordion
var acc = $('.accordion-btn');
acc.on('click', function() {
    $(this).toggleClass('active');
    $('.accordion-btn').not(this).removeClass('active');
    var $panel = $(this).next();
    if($panel.outerHeight() > 0) {
        $panel.css('max-height', 0);
    } else { 
        $panel.css('max-height', $panel.children(".content").outerHeight());
    }

    $notpanel = $('.accordion-btn').not(this).next(".panel");
    console.log($notpanel);
    $notpanel.css('max-height', 0);
});


// product details scroll right
$('#sticky-arrow-right').click(function() {
  event.preventDefault();
  $('.scroll-container').animate({
    scrollLeft: "+=330px"
  }, "slow");
});

// product details scroll left
$('#sticky-arrow-left').click(function() {
  event.preventDefault();
  $('.scroll-container').animate({
    scrollLeft: "-=330px"
  }, "slow");
});

// add body class 
$(function() {
    var loc = window.location.href; // returns the full URL
    if(/search-result.php/.test(loc) || /product-details.php/.test(loc)) {
        $('body').addClass('full-width-header');
    }

    //on scroll up fixed filters
    if(/search-result.php/.test(loc)) {
        var elementPosition = $('.explore-product-filters').offset();
        var lastScrollTop = 0, delta = 5;

        $(window).scroll(function(){
            if($(window).scrollTop() > elementPosition.top){
                $('.explore-product-filters').css('position','fixed').css('top','0');

                var nowScrollTop = $(this).scrollTop();
                    if(Math.abs(lastScrollTop - nowScrollTop) >= delta){
                        if (nowScrollTop > lastScrollTop){ 
                            $('.sticky-header').removeClass('show');
                        } else {
                            $('.sticky-header').addClass('show');
                        }
                    lastScrollTop = nowScrollTop;
                }

            } else {
                $('.explore-product-filters').css('position','relative');
                
                $('.sticky-header').removeClass('show');
                $('.explore-product-filters .scroll-outer-container').css('padding-top','10px');
            }    
        });
    }
});