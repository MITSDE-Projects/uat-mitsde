// Upcoming Coping Workshops section table js start


$(document).ready(function() {
    $('.invisible-content2').hide(); // Hide the rows initially
  
    $('.toggleBtn2').click(function() {
      if ($('.invisible-content2').is(':hidden')) {
        $('.invisible-content2').slideDown(1000, 'linear');
        $('.toggleBtn2').html('Read Less <span class="newuparrow"> </span> ');
      } else {
        $('.invisible-content2').slideUp(1000, 'linear');
        $('.toggleBtn2').html('Read More <span class="newdown-arrow"> </span>  ');
      }
    });
  });
  
  
  
  
  
  
    
  
  
  
  
  
  
  
  
  
  
  // Upcoming Coping Workshops section table js end
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  // Industry Mentors section js start 
  
  
  // Upcoming Coping Workshops section table js start
  
  
  const toggleBtn1 = document.querySelector('.toggleBtn1');
  const invisibleRows = document.querySelectorAll('.invisible-content1');
  
  // Hide the invisible rows initially
  invisibleRows.forEach(row => {
    $(row).hide();
  });
  
  toggleBtn1.addEventListener('click', () => {
    invisibleRows.forEach(row => {
      if ($(row).is(':hidden')) {
        $(row).fadeIn(1000);
        toggleBtn1.innerHTML = ' Read Less <span class="newuparrow"> </span> ';
      } else {
        $(row).fadeOut(1000, () => {
          toggleBtn1.innerHTML = ' Read More <span class="newdown-arrow"> </span>  ';
        });
      }
    });
  });
  
  
  
  // Industry Mentors section js end 
  
  // Upcoming Coping Workshops section table js end
  
  
  
  
  
  
  
  // Industry Mentors section js start 
  
  
  $(document).ready(function() {
      var toggleButtons = $('.toggle-btn');
    
      toggleButtons.click(function() {
        var card = $(this).parent();
        var invisibleContent = card.find('.invisible-content');
    
        if (invisibleContent.css('display') === 'none') {
          // Content is currently hidden, so show it
          invisibleContent.slideDown(1000);
          $(this).html(' Read Less <span class="newuparrow"> </span> ');
        } else {
          // Content is currently visible, so hide it
          invisibleContent.slideUp(1000);
          $(this).html('Read More <span class="newdown-arrow"> </span> ');
        }
      });
    });
  
  
  
  
  
    // Industry Mentors section js end 
    
  
  
  
  // var toggleButtons = document.querySelectorAll('.toggle-btn');
  
  //     toggleButtons.forEach(function(button) {
  //         button.addEventListener('click', function() {
  //             var card = button.parentElement;
  //             var invisibleContent = card.querySelector('.invisible-content');
  
  //             if (invisibleContent.style.display === 'none') {
  //                 // Content is currently hidden, so show it
  //                 invisibleContent.style.display = 'block';
  //                 button.textContent = 'Read Less';
  //             } else {
  //                 // Content is currently visible, so hide it
  //                 invisibleContent.style.display = 'none';
  //                 button.textContent = 'Read More';
  //             }
  //         });
  // });
  
  
  
  