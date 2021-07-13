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
          $(".classeList").append('<tr class="text-center"><td class="align-middle">' + documentsList[i]["name"] + '</td><td class="align-middle">' + documentsList[i]["date_expiration"] + '</td><td class="align-middle">' + documentsList[i]["etat"] + '</td><td class="align-middle">' +'</td><td class="align-middle"><span class="btn update-btn" data-toggle="modal" data-target="#exampleModal"><img src="/assets/images/edit.svg" width="40" height="40"></span><span class="btn delete-btn ml-2 mb-0 mt-0"><img src="/assets/images/trash.svg" width="40" height="40"></span><input type="hidden" value="" class="stdID"></td></tr>');
        }
      }
    })
  }
  getall();
  
  //update-btn-on-click
  $("body").on("click",".classeList .update-btn",function() {
    $("tr").hide();
    $(".edit-form").show();
    var index = $(this).parents("tr").index();
    $(".edit-form .document").val(documentsList[index]["document"]);
    $(".edit-form .date_expiration").val(documentsList[index]["date_expiration"]);
    $(".edit-form .etat").val(documentsList[index]["etat"]);
   
    $(".edit-form .id").val(documentsList[index]["id"]);
    console.log($(".edit-form .id").val())
   
  });
  
  // save-classe-to-database
  $(".save-document").click(function() {
    var document = $(".edit-form .document").val();
    var date_expiration = $(".edit-form .date_expiration").val();
    var etat = $(".edit-form .etat").val();
  
    var id = $(".edit-form .id").val();
    
    console.log(document,etat,date_expiartion,id)
   //send to php file via ajax
   $.ajax({
    url:"api/updateDocument.php",
    method:"POST",
    data:{
      id : id,
      document : document,
      date_expiration : date_expiration,
      etat : etat,
     
    },
        success:function(data) {
          console.log(data)
        getall();
      }
  })
  })
  
  
  
  // Add a document to database
  $(".save-document").click(function() {
    var document = $(".document").val();
    var date_expiration = $(".date_expiration").val();
    var etat = $(".etat").val();
   
  
    $.ajax({
      url:"/api/addDocument.php",
      method:"POST",
      data:{
        name :document,
        date_expiration :date_expiration,
        etat :etat,
       
      },
      success:function(data) {
      getall();
    }
    })
  })

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
