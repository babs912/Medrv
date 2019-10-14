$(function() {
  var speciality = "";
  

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
    data = JSON.parse(result);
    for (let i = 0; i < data.length; i++) {
      const elt = data[i];
        $('#doctorSpecialityContainer').append(displayDoctor(elt)).show() ;
    }

    $(".doctor-item").on("click", e => {
      const clickedElt = $(e.target);
      const targetElt = clickedElt.closest(".doctor-item");
      $(".doctor-item").css("background-color", "#fff");
      targetElt.css("background-color", "#a9d9f0");
      $.get( "/rv/getDoctorDetails",{id: targetElt.data('id')} ,function(data) {

      info = JSON.parse(data)[0];
      $('.doctor-details').hide("slow",()=>{
        $('.doctor-details').show("slow",()=>{
          $("#avatar").attr('src',`../img/avatar/${info.avatar}`)
          $("#doctorName").text(info.name);
          $('#doctorEmail').text(info.email);
          $('#doctorPhone').text(info.phone);
          $('#doctorDomaine').text(speciality);
        });
      });

        

      });
    });
  }

      }
    });
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
