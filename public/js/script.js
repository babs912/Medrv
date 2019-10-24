$(function() {
  var speciality = "";
  var appointDetails = { };

  var routes = 
  [
    {
      url: "/rv/new",
      link: "rv-new"
    },
    {
      url: "/help/index",
      link: "help"
    }
]

routes.forEach(item => {
   
    $("#"+item.link+"").click((e)=>{
      e.preventDefault();
      $('#loading').css({display:"block"});
      
     $.ajax({
       type: "GET",
       url: item.url,
       success: (data)=>{
      $('#loading').css({display:"none"});
         $("#main-container").html(data);
       }
     })
    })
});
  
  $('.load-modal').on('click',()=>{
      $("#patientForm").css('display',"block").trigger('reset');
      
      $(".success-message").css('display','none');
  });
  

  $(".speciality-item").on("click", e => {
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".speciality-item");
    $(".speciality-item").removeClass('selected-spec')
    targetElt.addClass('selected-spec');
    $('.calendar').removeClass('activate-panel');
   
  });



  $(".doctor-item .fa-plus").click((e)=>{
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".doctor-item .fa-plus");
    targetElt.addClass('hide');
    clickedElt.next(".doctor-item .fa-minus")
    .removeClass('hide')
    .click((e)=>{
      targetElt.removeClass('hide');
      let target = $(e.target).closest('.doctor-item .fa-minus');
      target.addClass('hide');
      target.next(".doctor-item .doctor-infos").addClass('hide')
    })
    clickedElt.next(".doctor-item .fa-minus").next(".doctor-item .doctor-infos").removeClass('hide')
  })

function htmlToElement(html) {
  var template = document.createElement('template');
  html = html.trim(); // Never return a text node of whitespace as the result
  template.innerHTML = html;
  return template.content.firstChild;
}

$('.dates .active-date').on('click',(e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest(".dates li");
   $('#time-panel').removeClass('activate-panel')
  $('.dates .active-date').removeClass('selected-date');
  targetElt.addClass('selected-date');
  let date =  targetElt.data('date');
  appointDetails.planned_at = date;
  numPatient();
  $('#loadModal').removeAttr("disabled");
  $('.load-modal').each((e)=>{


    let elt = $('.load-modal')[e];
    elt.addEventListener('click',(e)=>{
   appointDetails.start_time = e.target.getAttribute('data-time');
      
    })
   let time = elt.getAttribute('data-time');

  $.post('/rv/isAvailableTime',{date:targetElt.data('date'), time:time},(data)=>{
    if(data == 0){
      
      elt.classList = "load-modal active-time"
      elt.setAttribute('data-toggle',"modal")
      elt.setAttribute('data-target',"#patientFormModal")
      elt.setAttribute('data-whatever',"@getbootstrap")

    }else{
      elt.classList = "load-modal inactive-time";
    }
  })

   

 })



})

$(".side-nav ul li a").click((e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest(".side-nav ul li a");
  $('.side-nav ul li a').removeClass('selected-nav');
  targetElt.addClass('selected-nav');
})


$('#add-appoint').on('click',()=>{
  
  const data = $('#patientForm').serializeArray().reduce((obj,item)=>{
      obj[item.name] = item.value;
      return obj;
  }, {})

  $.post('/rv/new',
  {
    'appoint':appointDetails,
   'patient': data
  }
  ,
  (data)=>{
    console.log(data);
    if(data == 1){
      $('.modal-body').append(htmlToElement(flashMessage()));
      $("#patientForm").css('display',"none");

      if($(".modal-body").hasClass('active')) {
        document.body.classList.remove('active');
        return;
    }
    $(".modal-body").addClass('active');
    }else{
      $('#errors').append(htmlToElement(data));
    }
  })
  
})

function numPatient (){
  $.get('/rv/getNumberPatient',{
    date: appointDetails.planned_at,
    id:  appointDetails.doctor_id,
    time: appointDetails.start_time
  },(data)=>{
    $('#numPatient').text(data);
  })
}

function flashMessage(){

  return '<div class="success-message">'+
         '<svg viewBox="0 0 76 76" class="success-message__icon icon-checkmark">'+
          '<circle cx="38" cy="38" r="36"/>'+
          '<path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M17.7,40.9l10.9,10.9l28.7-28.7"/>'+
      "</svg>"+
      '<h1 class="success-message__title">Enregistre avec succes</h1>'+
      '<div class="success-message__content">'+
          "<p>Merci d'avoir utilise Medrv</p>"+
      "</div>"+
    "</div>";

}

// Toggle menu

$('#menu-bars').on('click',(e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest("#menu-bars");
  targetElt.hide();
  e.preventDefault();

$("#humberger-menu").show().animate({
  marginRight: 0
})
   
})

$("#menu-close").click((e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest("#menu-bars");
  e.preventDefault();
  $("#humberger-menu")
  .animate({
    marginRight: "-60%",
  },()=>{$('#humberger-menu').hide()})
  
})


 $(".fa-chevron-right").on("click",(e)=>{
   console.log(e)
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest(".fa-chevron-right");
  targetElt.hide();
  $(".fa-chevron-right").removeClass("hide");
 })

 

});




