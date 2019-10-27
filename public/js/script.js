$(function() {
  var appointDetails = { };
  var date = GetTodayDate();

  



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
  
  $('.load-modal').on('click',(e)=>{
      $("#patientForm").css('display',"block").trigger('reset');
      
      $(".success-message").css('display','none');
  });
  

  $(".speciality-item").on("click", e => {
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".speciality-item");
    $(".speciality-item").removeClass('selected-spec')
    targetElt.addClass('selected-spec');
    let spec = targetElt.attr('value');

    var doctorId = $(`#${spec}`).data('id');
    $('.dates .active-date').on('click',(e)=>{
      const clickedElt = $(e.target);
      const targetElt = clickedElt.closest(".dates li");
      $('.dates .active-date').removeClass('selected-date');
      targetElt.addClass('selected-date');
      date =  targetElt.data('date');
      appointDetails.planned_at = date;
    
       displayTime(date,doctorId);
    })

    displayTime(date,doctorId);
    console.log(date);



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
    var id = clickedElt.data('id');
    $.get('rv/getDoctorDetails',{id: id},(data)=>{
      data = JSON.parse(data)[0];
      $("#email-"+id).text(data.email);
      $("#phone-"+id).text(data.phone);

    })
    clickedElt.next(".doctor-item .fa-minus").next(".doctor-item .doctor-infos").removeClass('hide')
  })

function htmlToElement(html) {
  var template = document.createElement('template');
  html = html.trim(); // Never return a text node of whitespace as the result
  template.innerHTML = html;
  return template.content.firstChild;
}


$('.dates .active-date').each((e)=>{
  if ($('.dates .active-date')[e].getAttribute('data-date') == GetTodayDate())
  {
    targetElt.addClass('selected-date');
  }
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


 function GetTodayDate() {
  var tdate = new Date();
  var dd = tdate.getDate(); //yields day
  var MM = tdate.getMonth(); //yields month
  var yyyy = tdate.getFullYear(); //yields year
  var currentDate=   yyyy + "-" +( MM+1) + "-" + dd;

  return currentDate;
}


 function displayTime(date,doctorId)
 {
  $('.planning-time').each((e)=>{
     
     if($('.planning-time')[e] != undefined)
     {
       const elt = $('.planning-time')[e];
       const time = elt.getAttribute('data-time');
      const targetElt =  $(`[data-time="${time}"]`);
        targetElt.html('');
        targetElt.removeClass('active-time');
        targetElt.removeClass('inactive-time');
        targetElt.attr('data-toggle',"");
        targetElt.attr('data-target',"#");
        targetElt.attr('data-whatever',"");

        if(time != null){
          $.get('/rv/isAvailableTime',{date: date, time: time,doctorId: doctorId},(result)=>{
            if(result != 1)
            {
              targetElt.html(htmlToElement('<span class="fa fa-user-plus text-white"></span>'));
              targetElt.addClass("active-time");
              targetElt.attr('data-toggle',"modal");
              targetElt.attr('data-target',"#patientFormModal");
              targetElt.attr('data-whatever',"@getbootstrap");
        
            }else{
              targetElt.addClass("inactive-time");
              targetElt.html(htmlToElement('<span class="fa fa-close text-white"></span>'))
            }
          })
        }
     }
     
   })
 }

});




