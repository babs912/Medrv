$(function() {
  var planningDays = [];

  $("#mydropdown-1").on("click", e => {
    e.preventDefault();
    $("#drop-menu-1").toggleClass("hide");
  });
  $("#mydropdown-2").on("click", e => {
    e.preventDefault();
    $("#drop-menu-2").toggleClass("hide");
  });

  function getPlanning(planningDays) {
    $(".dates li").removeClass("active-day");
    $(".dates li").removeAttr("data-toggle");
    $(".dates li").removeAttr("data-target");
    $(".dates li").removeAttr("data-whatever");

    $(".dates li").each(e => {
      if ($.inArray(e, planningDays) != -1) {
        let className = ".dates " + "." + e;
        $(className).addClass("active-day");
        $(className).attr("data-toggle", "modal");
        $(className).attr("data-target", "#exampleModal");
        $(className).attr("data-whatever", "@getbootstrap");
      }
    });
  }

  //getPlanning(planningDays);

  $(".doctor-item").on("click", e => {

    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest(".doctor-item");
    $(".doctor-item").css("background-color", "#fff");
    targetElt.css("background-color", "#a9d9f0");
    planningDays = JSON.parse("[" + targetElt.attr("data-planning") + "]");
    getPlanning(planningDays);
  });

  $('#speciality').on('change', e=>{
    const clickedElt = $(e.target);
    const targetElt = clickedElt.closest("#speciality");
   console.log(getDoctorList(targetElt.val()));

  })

 function getDoctorList(speciality){
    $.ajax({
      type:'POST',
      url: 'rv/specialities',
      data: speciality,
      success: data =>{
       return data;
      },
      error: ()=>{
        return null;
      }
    });
       return false;
  }
});
