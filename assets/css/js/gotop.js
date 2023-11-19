/* // Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }

  // check that button is not lower than footer.
  let footerElement = document.getElementById('footer');
  let footerElementRect = footerElement.getBoundingClientRect();
  let mybuttonPositionBottom = mybutton.offsetTop + mybutton.offsetHeight;
  if (footerElementRect.y < mybuttonPositionBottom) {
    // if button is lower than footer.
    // modify css bottom.
    let diffheight = mybuttonPositionBottom - footerElementRect.y;
    let style = window.getComputedStyle(mybutton);
    let addBottom = parseInt(style.getPropertyValue('bottom')) + diffheight;
    mybutton.style.bottom = addBottom + 5 + 'px'; // maybe add more 10 px for bottom space of a button.
  } else {
    // if button is heigher than footer. this including scroll up.
    // remove custom css bottom.
    mybutton.style.bottom = '';
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
} */

//Get the button
const mybutton = document.getElementById("myBtn");
const footer = document.getElementById('footer');
const btnMarginBottom = parseInt(window.getComputedStyle(mybutton).getPropertyValue('bottom'));

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }

  const footStartPos = footer.getBoundingClientRect().y;

    if (window.innerHeight > footStartPos) {
      mybutton.style.bottom = `${(window.innerHeight - footStartPos)+ 5 + btnMarginBottom}px`;
    } else {
      mybutton.style.bottom = '';
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
