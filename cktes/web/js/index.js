$(document).ready(function(){
  $('.slider').slider();
})

//  FULL PAGE MENU ACTIVE //
$('#btn').click(function() { 
  $(this).toggleClass('active');
  $('#menu').toggleClass('open');
  $('main').toggleClass('hide');
});

//  PARALLAX //
$.fn.parallax = function(options) {
 
	var windowHeight = $(window).height();

	var settings = $.extend({
		speed        : 0.15
	}, options);

	return this.each( function() {

		var $this = $(this);

		$(document).scroll(function(){

			var scrollTop = $(window).scrollTop();
			var offset = $this.offset().top;
			var height = $this.outerHeight();

			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}

			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
			
			$this.css('background-position', 'center ' + yBgPosition + 'px');

		});
	});
}
 
$('.img-gradient').parallax({ speed :   0.15 });
 
//  OPACITY IMG //
var lastScrollTop = 0;
var navChange = $('.div-gradient').height();
var isUp = 0;

$(window).scroll(function(event){
  var st = $(this).scrollTop();
  console.log(st);
	
  if (st > lastScrollTop){
		
    $('.gradient').css('opacity','+=0.2');
		
    if(st > navChange && !isUp){
      $('.navbar-default').animate({'minHeight':'-=45px'},500);
      isUp = 1;
    }
  } else {
    $('.gradient').css('opacity','-=0.2');
		
    if(st < navChange && isUp){
      $('.navbar-default').animate({'minHeight':'+=45px'},500);
      isUp = 0;
    }
  }
	
  lastScrollTop = st;
});

// listing vars here so they're in the global scope
var cards, nCards, cover, openContent, openContentText, pageIsOpen = false,
    openContentImage, closeContent, windowWidth, windowHeight, currentCard;

// initiate the process
init();

function init() {
  resize();
  selectElements();
  attachListeners();
}

// select all the elements in the DOM that are going to be used
function selectElements() {
  cards = document.getElementsByClassName('card'),
  nCards = cards.length,
  cover = document.getElementById('cover'),
  openContent = document.getElementById('open-content'),
  openContentText = document.getElementById('open-content-text'),
  openContentImage = document.getElementById('open-content-image')
  closeContent = document.getElementById('close-content');
}

/* Attaching three event listeners here:
  - a click event listener for each card
  - a click event listener to the close button
  - a resize event listener on the window
*/
function attachListeners() {
  for (var i = 0; i < nCards; i++) {
    attachListenerToCard(i);
  }
  closeContent.addEventListener('click', onCloseClick);
  window.addEventListener('resize', resize);
}

function attachListenerToCard(i) {
  cards[i].addEventListener('click', function(e) {
    var card = getCardElement(e.target);
    onCardClick(card, i);
  })
}

/* When a card is clicked */
function onCardClick(card, i) {
  // set the current card
  currentCard = card;
  // add the 'clicked' class to the card, so it animates out
  currentCard.className += ' clicked';
  // animate the card 'cover' after a 500ms delay
  setTimeout(function() {animateCoverUp(currentCard)}, 500);
  // animate out the other cards
  animateOtherCards(currentCard, true);
  // add the open class to the page content
  openContent.className += ' open';
}

/*
* This effect is created by taking a separate 'cover' div, placing
* it in the same position as the clicked card, and animating it to
* become the background of the opened 'page'.
* It looks like the card itself is animating in to the background,
* but doing it this way is more performant (because the cover div is
* absolutely positioned and has no children), and there's just less
* having to deal with z-index and other elements in the card
*/
function animateCoverUp(card) {
  // get the position of the clicked card
  var cardPosition = card.getBoundingClientRect();
  // get the style of the clicked card
  var cardStyle = getComputedStyle(card);
  setCoverPosition(cardPosition);
  setCoverColor(cardStyle);
  scaleCoverToFillWindow(cardPosition);
  // update the content of the opened page
  if (card.children[2].textContent == "Quienes somos") {
  openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText;  
  }
  else if (card.children[2].textContent == "Slogan") {
  openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText2;  
  }
  else if (card.children[2].textContent == "Mision") {
  openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText3;  
  }
  else{
openContentText.innerHTML = '<h1>'+card.children[2].textContent+'</h1>'+paragraphText4;
  }
  openContentImage.src = card.children[1].src;
  setTimeout(function() {
    // update the scroll position to 0 (so it is at the top of the 'opened' page)
    window.scroll(0, 0);
    // set page to open
    pageIsOpen = true;
  }, 300);
}

function animateCoverBack(card) {
  var cardPosition = card.getBoundingClientRect();
  // the original card may be in a different position, because of scrolling, so the cover position needs to be reset before scaling back down
  setCoverPosition(cardPosition);
  scaleCoverToFillWindow(cardPosition);
  // animate scale back to the card size and position
  cover.style.transform = 'scaleX('+1+') scaleY('+1+') translate3d('+(0)+'px, '+(0)+'px, 0px)';
  setTimeout(function() {
    // set content back to empty
    openContentText.innerHTML = '';
    openContentImage.src = '';
    // style the cover to 0x0 so it is hidden
    cover.style.width = '0px';
    cover.style.height = '0px';
    pageIsOpen = false;
    // remove the clicked class so the card animates back in
    currentCard.className = currentCard.className.replace(' clicked', '');
  }, 301);
}

function setCoverPosition(cardPosition) {
  // style the cover so it is in exactly the same position as the card
  cover.style.left = cardPosition.left + 'px';
  cover.style.top = cardPosition.top + 'px';
  cover.style.width = cardPosition.width + 'px';
  cover.style.height = cardPosition.height + 'px';
}

function setCoverColor(cardStyle) {
  // style the cover to be the same color as the card
  cover.style.backgroundColor = cardStyle.backgroundColor;
}

function scaleCoverToFillWindow(cardPosition) {
  // calculate the scale and position for the card to fill the page,
  var scaleX = windowWidth / cardPosition.width;
  var scaleY = windowHeight / cardPosition.height;
  var offsetX = (windowWidth / 2 - cardPosition.width / 2 - cardPosition.left) / scaleX;
  var offsetY = (windowHeight / 2 - cardPosition.height / 2 - cardPosition.top) / scaleY;
  // set the transform on the cover - it will animate because of the transition set on it in the CSS
  cover.style.transform = 'scaleX('+scaleX+') scaleY('+scaleY+') translate3d('+(offsetX)+'px, '+(offsetY)+'px, 0px)';
}

/* When the close is clicked */
function onCloseClick() {
  // remove the open class so the page content animates out
  openContent.className = openContent.className.replace(' open', '');
  // animate the cover back to the original position card and size
  animateCoverBack(currentCard);
  // animate in other cards
  animateOtherCards(currentCard, false);
}

function animateOtherCards(card, out) {
  var delay = 100;
  for (var i = 0; i < nCards; i++) {
    // animate cards on a stagger, 1 each 100ms
    if (cards[i] === card) continue;
    if (out) animateOutCard(cards[i], delay);
    else animateInCard(cards[i], delay);
    delay += 100;
  }
}

// animations on individual cards (by adding/removing card names)
function animateOutCard(card, delay) {
  setTimeout(function() {
    card.className += ' out';
   }, delay);
}

function animateInCard(card, delay) {
  setTimeout(function() {
    card.className = card.className.replace(' out', '');
  }, delay);
}

// this function searches up the DOM tree until it reaches the card element that has been clicked
function getCardElement(el) {
  if (el.className.indexOf('card ') > -1) return el;
  else return getCardElement(el.parentElement);
}

// resize function - records the window width and height
function resize() {
  if (pageIsOpen) {
    // update position of cover
    var cardPosition = currentCard.getBoundingClientRect();
    setCoverPosition(cardPosition);
    scaleCoverToFillWindow(cardPosition);
  }
  windowWidth = window.innerWidth;
  windowHeight = window.innerHeight;
}

var paragraphText = '<p class ="caviar pequeña">CKT-ES, somos una empresa salvadoreña que nace con el objetivo de dar respuesta a una necesidad común entre desarrolladores, emprendedores, estudiantes de ingeniería y empresas dentro de la Industria Electrónica, ya que todos ellos necesitan producir de una manera efectiva y eficiente placas PCB’s (Printed Circuit Board) ya que constituyen uno de los elementos bases para cualquier dispositivo electrónico, desde el control de un televisor hasta un satélite espacial, así como los insumos necesarios para el desarrollo desde un prototipo básico hasta sistemas de control industriales</p>';
var paragraphText2 = '<p class="caviar contenidom">“Circuitos Profesionales con la garantia que nadie ofrece”</p>';
var paragraphText3 = '<p class="caviar contenidom">Impulsar el crecimiento Tecnologico con la creacion de PCB de Alta calidad la cual brindara un desarrollo optimo del proyecto mejorando el rendimiento del circuito creado</p>';
var paragraphText4 = '<p class="caviar contenidom">Consolidarnos como una empresa en la vanguardia en la creacion de circuitos impresos, acercando a nuestros clientes con las soluciones tecnologicas a nivel nacional.</p>';

$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});