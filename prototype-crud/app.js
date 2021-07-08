$(document).ready(function(){
  var studentsList;
  function getall() {
    $(".classeList").html(" ");
    $.ajax({
      url:"/api/getProduct.php",
      method:"GET",
      success:function(data) {
        studentsList = JSON.parse(data);
        for (var i = 0; i < studentsList.length; i++) {
          $(".classeList").append('<tr class="text-center"><td class="align-middle">' + studentsList[i]["numero"] + '</td><td class="align-middle">' + studentsList[i]["capacite"] + '</td><td class="align-middle">' + studentsList[i]["nb_tableaux"] + '</td><td class="align-middle">' + studentsList[i]["formateur"] +'</td><td class="align-middle"><span class="btn update-btn" data-toggle="modal" data-target="#exampleModal"><img src="edit.svg" width="40" height="40"></span><span class="btn delete-btn ml-2 mb-0 mt-0"><img src="trash.svg" width="40" height="40"></span><input type="hidden" value="" class="stdID"></td></tr>');
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
//     $(".edit-form .cnumero").val(studentsList[index]["numero"]);
//     $(".edit-form .ccapacite").val(studentsList[index]["capacite"]);
//     $(".edit-form .cnb_tableaux").val(studentsList[index]["nb_tableaux"]);
//     $(".edit-form .cformateur").val(studentsList[index]["formateur"]);
//     $(".edit-form .sid").val(studentsList[index]["id"]);
//     console.log($(".edit-form .sid").val())
   
//   });
  
//   // save-classe-to-database
//   $(".save-student").click(function() {
//     var Numero = $(".edit-form .cnumero").val();
//     var Capacite = $(".edit-form .ccapacite").val();
//     var Nb_tableaux = $(".edit-form .cnb_tableaux").val();
//     var Formateur = $(".edit-form .cformateur").val();
//     var sID = $(".edit-form .sid").val();
    
//     console.log(sID)
//    //send to php file via ajax
//    $.ajax({
//     url:"api/editclasses.php",
//     method:"POST",
//     data:{
//       sid : sID,
//       numero : Numero,
//       capacite : Capacite,
//       nb_tableaux : Nb_tableaux,
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
//     var Numero = $(".cnumero").val();
//     var Capacite = $(".ccapacite").val();
//     var Nb_tableaux = $(".cnb_tableaux").val();
//     var Formateur = $(".cformateur").val();
  
//     $.ajax({
//       url:"/api/addclasses.php",
//       method:"POST",
//       data:{
//         numero :Numero,
//         capacite :Capacite,
//         nb_tableaux :Nb_tableaux,
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
