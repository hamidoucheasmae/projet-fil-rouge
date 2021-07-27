$(document).ready(function(){
  var documentsList;
  function getall() {
    $(".classeList").html(" ");
    $.ajax({
      url:"../api/getDocument.php",
      method:"GET",
      success:function(data) {
        documentsList = JSON.parse(data);
        for (var i = 0; i < documentsList.length; i++) {
          $(".classeList").append('<tr class="text-center"><td class="align-middle">' + documentsList[i]["document_name"] + '</td><td class="align-middle">' + documentsList[i]["date_expiration"] + '</td><td class="align-middle">' + documentsList[i]["etat"] + '</td><td class="align-middle">' +'</td><td class="align-middle"><input type="hidden" value="" class="stdID"></td></tr>');
        }
      }
    })
  }
  getall();
  

  
 
  
  
 
  // delete

  $("body").on("click",".delete-btn",function() {
    var index = $(this).parents("tr").index();
    $(".classeList .stdID").val(documentsList[index]["id"]);
    var studentID =$(".classeList .stdID").val();
    $.ajax({
      url:"/api/deleteDocument.php",
      method:"POST",
      data:{
        id :studentID
      },
      success:function(data) {
        $(this).parent().remove();
        getall();
      }
    })
  })
  $(".downArrow").click(function() {
    $(".add-form").show();
  })
  $(".update-btn").click(function() {
    $(".edit-form").show();
  })
  $(".save-document").click(function() {
  $(".edit-form").hide();
  })
  $(".save-document").click(function() {
  $(".modal").hide();
  location.reload();
  })
  $(".close").click(function() {
  $(".add-form").hide();
  })
  $(".close").click(function() {
  $(".edit-form").hide("fast",function() {
  getall();
  });
  

})


  })
