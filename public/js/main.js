if ($('.main-carousel').length) {
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        pageDots: false
    });
}

function toggleSeeMoreLess() {
    var descLess = document.querySelector('.desc-less');
    var descMore = document.querySelector('.desc-more');

    if (descLess.style.display === 'none') {
    descLess.classList.toggle('hidden');
    descMore.classList.toggle('hidden');
    } else {
    descLess.classList.toggle('hidden');
    descMore.classList.toggle('hidden');
    }
}

// Accordion funtion
document.addEventListener('DOMContentLoaded', function() {
    const accordionBtns = document.querySelectorAll('.accordion-button');
  
    accordionBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const targetId = this.dataset.accordion;
        const targetAccordion = document.getElementById(targetId);
        const arrowIcon = this.querySelector('.arrow');
  
        btn.classList.toggle('open');
        targetAccordion.classList.toggle('hide');
  
        if (targetAccordion.classList.contains('hide')) {
          targetAccordion.style.maxHeight = targetAccordion.scrollHeight + "px";
          setTimeout(function() {
            targetAccordion.style.maxHeight = "0";
          }, 1);
        } else {
          targetAccordion.style.maxHeight = targetAccordion.scrollHeight + "px";
          setTimeout(function() {
            targetAccordion.style.maxHeight = "none";
          }, 301);
        }
  
        arrowIcon.classList.toggle('-rotate-180');
      });
  
      const targetId = btn.dataset.accordion;
      const targetAccordion = document.getElementById(targetId);
  
      // Check if accordion section has 'open' class
      if (targetAccordion.classList.contains('open')) {
        btn.classList.add('open');
        targetAccordion.style.maxHeight = "none";
      }
    });
  });

  
function updateFileName(input) {
    console.log("updateFileName function triggered");
    if (input.files && input.files.length > 0) {
        // Get the file name
        var fileName = input.files[0].name;
        console.log(fileName);
        
        // Update the text of the <p> element inside the button
        document.getElementById('fileLabel').innerText = fileName;
        document.getElementById('fileLabel').classList.add('font-semibold');
    }
}