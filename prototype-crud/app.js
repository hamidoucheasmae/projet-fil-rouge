$(document).ready(function(){
  var documentsList;
  function getall() {
    $(".classeList").html(" ");
    $.ajax({
      url:"/api/getDocument.php",
      method:"GET",
      success:function(data) {
        documentsList = JSON.parse(data);
        for (var i = 0; i < documentsList.length; i++) {
          $(".classeList").append('<tr class="text-center"><td class="align-middle">' + documentsList[i]["name"] + '</td><td class="align-middle">' + documentsList[i]["date_expiration"] + '</td><td class="align-middle">' + documentsList[i]["etat"] + '</td><td class="align-middle">' +'</td><td class="align-middle"><span class="btn update-btn" data-toggle="modal" data-target="#exampleModal"><img src="edit.svg" width="40" height="40"></span><span class="btn delete-btn ml-2 mb-0 mt-0"><img src="trash.svg" width="40" height="40"></span><input type="hidden" value="" class="stdID"></td></tr>');
        }
      }
    })
  }
  getall();
  
//   //update-btn-on-click
//   $("body").on("click",".classeList .update-btn",function() {
//     $("tr").hide();
//     $(".edit-form").show();
//     var index = $(this).parents("tr").index();
//     $(".edit-form .cdocument").val(studentsList[index]["document"]);
//     $(".edit-form .cdate_expiration").val(studentsList[index]["date_expiration"]);
//     $(".edit-form .cetat").val(studentsList[index]["etat"]);
//     $(".edit-form .cformateur").val(studentsList[index]["formateur"]);
//     $(".edit-form .sid").val(studentsList[index]["id"]);
//     console.log($(".edit-form .sid").val())
   
//   });
  
//   // save-classe-to-database
//   $(".save-student").click(function() {
//     var document = $(".edit-form .cdocument").val();
//     var date_expiration = $(".edit-form .cdate_expiration").val();
//     var etat = $(".edit-form .cetat").val();
//     var Formateur = $(".edit-form .cformateur").val();
//     var sID = $(".edit-form .sid").val();
    
//     console.log(sID)
//    //send to php file via ajax
//    $.ajax({
//     url:"api/editclasses.php",
//     method:"POST",
//     data:{
//       sid : sID,
//       document : document,
//       date_expiration : date_expiration,
//       etat : etat,
//       formateur : Formateur
//     },
//         success:function(data) {
//           console.log(data)
//         getall();
//       }
//   })
//   })
  
  
  
//   // Add a classroom to database
//   $(".enrg-salle").click(function() {
//     var document = $(".cdocument").val();
//     var date_expiration = $(".cdate_expiration").val();
//     var etat = $(".cetat").val();
//     var Formateur = $(".cformateur").val();
  
//     $.ajax({
//       url:"/api/addclasses.php",
//       method:"POST",
//       data:{
//         document :document,
//         date_expiration :date_expiration,
//         etat :etat,
//         formateur :Formateur
//       },
//       success:function(data) {
//       getall();
//     }
//     })
//   })

//   // delete

//   $("body").on("click",".delete-btn",function() {
//     var index = $(this).parents("tr").index();
//     $(".classeList .stdID").val(studentsList[index]["id"]);
//     var studentID =$(".classeList .stdID").val();
//     $.ajax({
//       url:"/api/deleteclasses.php",
//       method:"POST",
//       data:{
//         sid :studentID
//       },
//       success:function(data) {
//         $(this).parent().remove();
//         getall();
//       }
//     })
//   })
//   $(".downArrow").click(function() {
//     $(".add-form").show();
//   })
//   $(".update-btn").click(function() {
//     $(".edit-form").show();
//   })
//   $(".save-student").click(function() {
//   $(".edit-form").hide();
//   })
//   $(".enrg-salle").click(function() {
//   $(".modal").hide();
//   location.reload();
//   })
//   $(".close").click(function() {
//   $(".add-form").hide();
//   })
//   $(".close").click(function() {
//   $(".edit-form").hide("fast",function() {
//   getall();
//   });
  

// })
  })
