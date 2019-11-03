$(function() {
  var appointDetails = { };
  var date = GetTodayDate();
  var doctorId = 0;

  $('.patient-item-search').hide();
  $('.success-flash').hide();
  appointDetails.planned_at = date;

   
  
  
 
  
  $(`[data-date='${GetTodayDate()}']`).addClass('selected-date');
  appointDetails.planned_at = $(`[data-date='${GetTodayDate()}']`).data('date');
 
 

  $(".speciality-item").on("click", e => {
    
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".speciality-item");
    $(".speciality-item").removeClass('selected-spec')
    targetElt.addClass('selected-spec');
    let spec = targetElt.attr('value');
     doctorId = $(`#${spec}`).data('id');
    $('.times').removeClass('hide').animate({height:'460px'},1000);
    displayTime(date,doctorId); 
    appointDetails.doctor_id = doctorId;

  });


  $('.dates .active-date').on('click',(e)=>{
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".dates li");
    
      $('.dates .active-date').removeClass('selected-date');
      targetElt.addClass('selected-date');
    
    
    date =  targetElt.data('date');
    appointDetails.planned_at = date;
  
     displayTime(date,doctorId);
  }) 



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

$(".side-nav ul li a").click((e)=>{
  const clickedElt = $(e.target);
  const targetElt = clickedElt.closest(".side-nav ul li a");
  $('.side-nav ul li a').removeClass('selected-nav');
  targetElt.addClass('selected-nav');
})


$('#add-appoint').on('click',(e)=>{
  e.preventDefault();
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
     $('.register-patient').hide();
      $('.success-flash').show();
      $(`[data-time='${appointDetails.start_time}']`)
      .removeClass('active-time')
      .addClass('inactive-time')
      .attr('data-toggle',"")
      .attr('data-target',"")
      .html("")
    }
  })
  
})







 function GetTodayDate() {
  var tdate = new Date();
  var dd = (tdate.getDate() < 10)? "0"+tdate.getDate(): tdate.getDate(); //yields day
  var MM = (tdate.getMonth() < 10)? "0"+tdate.getMonth(): tdate.getMonth(); //yields month
  var yyyy = tdate.getFullYear(); //yields year

  return    yyyy + "-" +( MM+1) + "-" + dd;

}

$('.planning-time').click((e)=>{
  var time = $(e.target).closest('.planning-time').data('time');
  appointDetails.start_time =time;
  $('#patientForm').trigger('reset')
  $('.register-patient').removeClass('hide').show();
  $('.success-flash').addClass('hide').hide();

})
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
        
            }else{
              targetElt.addClass("inactive-time");
            }
          })
        }
     }
     
   })
 }

 $('.patient-item').click((e)=>{
  
  let targetElt = $(e.target).closest('.patient-item');
  let patientId = targetElt.data('id');
  $('.patient-item').removeClass('selected-patient')
  targetElt.addClass('selected-patient')

  $.get('/rv/patientById',{patientId:patientId},(result)=>{
    let patient = JSON.parse(result)[0];
    $('.patient-name').text(patient.first_name+ " " + patient.last_name);
    $('.patient-gender').text((patient.gender == "H")? "Homme" : "Femme");
    $('.patient-age').text(patient.age + "Ans");
    $('.patient-email').text(patient.email);
    $('.patient-phone').text(patient.phone);
    $('.patient-address').text(patient.address);

  $('.patient-details').removeClass('hide');
  $('#searched-appoint').click((e)=>{
    if(patient.id != null)
    {
      appointDetails.patient_id = patient.id
      $.post('/rv/new',{appoint: appointDetails},(result)=>{
        if(result == 1)
        {
          $('.register-patient').hide();
          $('.success-flash').show();
          $(`[data-time='${appointDetails.start_time}']`)
          .removeClass('active-time')
          .addClass('inactive-time')
          .attr('data-toggle',"")
          .attr('data-target',"")
          .html("")
        
        }
        
      })
    }
  })
   

  })
 })
  $('#closePatientFormModal').click(()=>{
    $('#patientFormModal').hide();
    $('.modal-backdrop').hide();
  })

 $('#search-phone').on('keyup',(e)=>{
  let targetElt = $(e.target).closest('#search-phone');
  let val = targetElt.val();
  if(val == null || val == " " || val.length <= 2)
  {
    $('.patient-item-search').hide();
    $('.patient-item').show();
  }else{
    $.get('/rv/searchWithPhone',{phone: val},(result)=>{
      let patient = JSON.parse(result)[0];
      displaySearchResult(patient);
    })
  }
 })

  function  displaySearchResult(result) {
    if(result != null && result != "")
    {
      $('.patient-item').hide();
       $('.fined-phone').text((result.phone));
       $('.fined-email').text((result.email));
       $('.patient-item-search').attr('data-id',result.id)
       $('.patient-item-search').show();
    }else{
     $('.patient-item').show();
     $('.patient-item-search').hide();
    }
  }

  

});




