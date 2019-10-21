$(function() {
  var speciality = "";
  var appointDetails = {};

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
  
  $('#loadModal').on('click',()=>{
      $("#patientForm").css('display',"block").trigger('reset');
      
      $(".success-message").css('display','none');
  });

  $("#speciality").on("change", e => {
    $('.doctor-details').hide("slow");

    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest("#speciality");
    speciality = targetElt.val() ;
    $.ajax({
      type: "GET",
      url: "/rv/doctorsSpeciality",
      data: { speciality: speciality},
      cache: false,
      success: function(result) {
  $('#doctorSpecialityContainer li').remove();

  
  if(result != "[]"){
    const data = JSON.parse(result);
    for (let i = 0; i < data.length; i++) {
      const elt = data[i];
        $('#doctorSpecialityContainer').append(displayDoctor(elt)) ;
        
    }

    $(".doctor-item").on("click", e => {
      const clickedElt = $(e.target);
      const targetElt = clickedElt.closest(".doctor-item");
      $(".doctor-item").css("background-color", "#fff");
      targetElt.css("background-color", "#a9d9f0");
      $.get( "/rv/getDoctorDetails",{id: targetElt.data('id')} ,function(data) {

     const info = JSON.parse(data)[0];
       appointDetails.doctor_id = info.id;
      $('.doctor-details').hide("slow",()=>{
        $('.doctor-details').show("slow",()=>{
          $("#avatar").attr('src',`../img/avatar/${info.avatar}`)
          $("#doctorName").text(info.name);
          $('#doctorEmail').text(info.email);
          $('#doctorPhone').text(info.phone);
          $('#doctorDomaine').text(speciality);
        });
      });

       numPatient();
        

      });
    });
  }

      }
    });
  });

function displayDoctor(data) {
  
  const item =
    " <li>" +
    '<div class="doctor-item" data-id="'+data.id+'">' +
    '<span class="fa fa-user-md"></span>' +
    '<div class="doctor-infos">' +
    "<span>" +
    data.name+
    "</span>" +
    "</div>" +
    "</div>" +
    "</li>";

  return htmlToElement(item);

  

  
}

function htmlToElement(html) {
  var template = document.createElement('template');
  html = html.trim(); // Never return a text node of whitespace as the result
  template.innerHTML = html;
  return template.content.firstChild;
}

$('.dates .active-date').on('click',(e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest(".dates li");

  $('.dates .active-date').removeClass('selected-date');
  targetElt.addClass('selected-date');
  let date =  targetElt.data('date');
  appointDetails.planned_at = date;
    numPatient();
  $('#loadModal').removeAttr("disabled");
  $('.load-modal').each((e)=>{
   let  elt = $('.load-modal')[e];

  $.post('/rv/isAvailableTime',{date:targetElt.data('date'), time:elt.getAttribute('data-time')},(data)=>{
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
  $.extend(appointDetails,data)
  ,
  (data)=>{
    console.log(data)
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
    id: appointDetails.doctor_id
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




