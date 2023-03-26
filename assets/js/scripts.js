$(document).ready(function(){
let base_url = "https://caringstore.xyz/";

//connect socket

const tbl_cat = $('#tbl_cat').DataTable({ 
	"pagingType": "full_numbers",
        "lengthMenu": [
         [15, 25, 50, -1],
          [15, 25, 50, "All"]
        ],
        
        
        searchable: true,
        responsive: true,
        language: {
          search: "_INPUT_",
          info : "Showing _START_ to _END_ of _TOTAL_ Categories",
          loadingRecords : "Loading Categories.....",
          searchPlaceholder: "Search Categories....",
          infoFiltered:   "(filtered from _MAX_ total Categories)",
          zeroRecords :    "No Categories found",
        },
        
        
        columnDefs: [
                {  // set default column settings
                    searchable : false,
                    orderable: false,
                    targets: 0
                }
          
                ]



});

const tbl_transfer = $('#tbl_ctransfer').DataTable({ 
	"pagingType": "full_numbers",
        "lengthMenu": [
         [15, 25, 50, -1],
          [15, 25, 50, "All"]
        ],
        
        
        searchable: true,
        responsive: true,
        language: {
          search: "_INPUT_",
          info : "Showing _START_ to _END_ of _TOTAL_ Equipments",
          loadingRecords : "Loading Equipments.....",
          searchPlaceholder: "Search Equipments....",
          infoFiltered:   "(filtered from _MAX_ total Equipments)",
          zeroRecords :    "No Equipments found",
        },
        
        
        columnDefs: [
                {  // set default column settings
                    searchable : false,
                    orderable: false,
                    targets: 0
                }
          
                ]



});


const tbl_r = $('#example3').DataTable({ 
	"pagingType": "full_numbers",
        "lengthMenu": [
         [15, 25, 50, -1],
          [15, 25, 50, "All"]
        ],
        
        
        searchable: true,
        responsive: true,
        language: {
          search: "_INPUT_",
          info : "Showing _START_ to _END_ of _TOTAL_ Users",
          loadingRecords : "Loading Users.....",
          searchPlaceholder: "Search Users....",
          infoFiltered:   "(filtered from _MAX_ total Users)",
          zeroRecords :    "No Users found",
        },
        
        
        columnDefs: [
                {  // set default column settings
                    searchable : false,
                    orderable: false,
                    targets: 0
                }
          
                ]



});


//end employee table
//
///

const tbl_sr = $('#example2').DataTable({
  "pagingType": "full_numbers",
        "lengthMenu": [
         [15, 25, 50, -1],
          [15, 25, 50, "All"]
        ],
        dom: 'Bfrtip',
        buttons: [
          { extend: 'excelHtml5', text: 'Export',className : 'btn btn-primary' }
            
            
            
        ],
        
        
        searchable: true,
        responsive: true,
        language: {
          search: "_INPUT_",
          info : "Showing _START_ to _END_ of _TOTAL_ users",
          loadingRecords : "Loading Scanned users.....",
          searchPlaceholder: "Search users....",
          infoFiltered:   "(filtered from _MAX_ total  users)",
          zeroRecords :    "No users found",
        },
        
        
        columnDefs: [
                {  // set default column settings
                    searchable : false,
                    orderable: false,
                    targets: 0
                }
          
                ]



});


//end scans table

//gen pass
// $('#gen_pass').click(()=>{
//   let pass = makeid(8);
//   $('#epass').val(pass);


// });


// function makeid(length) {
//   var result           = '';
//   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
//   var charactersLength = characters.length;
//   for ( var i = 0; i < length; i++ ) {
//       result += characters.charAt(Math.floor(Math.random() * charactersLength));
//   }
//   return result;
// }


//end gen pass


//end load scans

//load archive questions
let loadArchive = function() {
  $("#archive_box").empty();
  //load
  let qgroup = $('#curr_qgroup').val();

  console.log(qgroup);
  
  
  
  $.get(`${base_url}getarchivequestion`,function(response){

   if(response.length == 0){
    $("#archive_box").append(`<div class="alert alert-danger left-icon-big  fade show">
    
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-alert"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">No Archived Questions</h5>
        </div>
    </div>
</div>`);

return;
   }
    
   var a = 1;
   
  
  $.each(response,function(i,key){
       $("#archive_box").append(`
       <div class="alert alert-${getColor(key.question_color)} solid alert-dismissible fade show d-flex justify-content-between align-items-center">
            <div>
                <button type="button" data-toggle="collapse" href="#question_stat" aria-expanded="true" aria-controls="acc_stat" class="btn btn-sm text-white" qid="${key.question_id}">
                    <i class="fa fa-chevron-down"></i>
                </button>
            </div>
            <div style="margin-right: auto; margin-left: 20px;"> <strong>${a}.  </strong> ${key.question_text}</div>
        </div>
        
        <div id="question_stat" class="collapse show">
            <div class="card-body d-flex justify-content-center align-items-center" qtext="${key.question_text}" qid="${key.question_id}">
				<canvas id="question-graph-${key.question_id}" style="width:100%;"></canvas>
		    </div>
        </div>
       `).hide().slideDown();
      
      a++;
      
        const accq_bar = document.getElementById("question-graph-" + key.question_id).getContext('2d');
        const angry = Number(key.emotion_angry).toFixed(1);
        const happy = Number(key.emotion_happy).toFixed(1);
        const sad = Number(key.emotion_sad).toFixed(1);
        const angry_count = Number(key.emotion_angry_count).toFixed(1);
        const happy_count = Number(key.emotion_happy_count).toFixed(1);
        const sad_count = Number(key.emotion_sad_count).toFixed(1);

        const accqbar = new Chart(accq_bar, {
          type: 'bar',
          data: {
            defaultFontFamily: 'Poppins',
            labels: ['ANGRY', 'HAPPY', 'SAD'],
            datasets: [
                {
                    data: [angry, happy, sad],
                    borderWidth: "0",
                    backgroundColor: ['#f72b50', '#209f84', '#ff5c00'],
                    countData: [angry_count, happy_count, sad_count]  // this is the emotion count data from the database
                },
            ],
            hoverOffset: 5
          },
          options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                  y: {
                    beginAtZero: true,
                    steps: 5,
                    stepValue: 5,
                    max: 100
                  }
                },
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                enabled: false
              },
              datalabels: {
                color: 'white',
                labels: {
                  title: {
                    font: {
                      weight: 'bold',
                      size: '15px'
                    }
                  }
                },
                formatter: function(value, context) {
                    var dataset = context.dataset;
                    var countData = dataset.countData[context.dataIndex];
                    return value + '%' + ' (' + countData + ')';
                },
              }
            }
          },
          plugins: [ChartDataLabels]

        });
    });
    
  });
  
   //end lod
  };


  loadArchive();

//load questions
let loadQuestions = function() {
  $("#question_box").empty();
  //load
  let qgroup = $('#curr_qgroup').val();

  console.log(qgroup);
  
  
  
  $.get(`${base_url}getquestions/${qgroup}`,function(response){
      
      console.log(response);

   if(response.length == 0){
    $("#question_box").append(`<div class="alert alert-danger left-icon-big  fade show">
    
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-alert"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">No Questions for this Category!</h5>
            <p class="mb-0">Please add some questions!!</p>
        </div>
    </div>
</div>`);

return;
   }
    
   var a = 1;
   
  
  $.each(response,function(i,key){
       $("#question_box").append(`
       <div class="alert alert-${getColor(key.question_color)} solid alert-dismissible fade show d-flex justify-content-between align-items-center">
            <div>
                <button type="button" data-toggle="collapse" href="#question_stat" aria-expanded="true" aria-controls="acc_stat" class="btn btn-sm text-white" qid="${key.question_id}">
                    <i class="fa fa-chevron-down"></i>
                </button>
            </div>
            <div style="margin-right: auto; margin-left: 20px;"> <strong>${a}.  </strong> ${key.question_text}</div>
            <div class="alert-box">
                <button type="button" class="btn btn-sm btn-outline-light text-white archive" id="archive-${key.question_id}" qid="${key.question_id}">
                    Archive
                </button>
            </div>
        </div>
        
        <div id="question_stat" class="collapse show">
            <div class="card-body d-flex justify-content-center align-items-center" qtext="${key.question_text}" qid="${key.question_id}">
				<canvas id="question-graph-${key.question_id}" style="width:100%;"></canvas>
		    </div>
        </div>
       `).hide().slideDown();
      
      a++;
      
        const accq_bar = document.getElementById("question-graph-" + key.question_id).getContext('2d');
        const angry = Number(key.emotion_angry).toFixed(1);
        const happy = Number(key.emotion_happy).toFixed(1);
        const sad = Number(key.emotion_sad).toFixed(1);
        const angry_count = Number(key.emotion_angry_count).toFixed(1);
        const happy_count = Number(key.emotion_happy_count).toFixed(1);
        const sad_count = Number(key.emotion_sad_count).toFixed(1);

        const accqbar = new Chart(accq_bar, {
          type: 'bar',
          data: {
            defaultFontFamily: 'Poppins',
            labels: ['ANGRY', 'HAPPY', 'SAD'],
            datasets: [
                {
                    data: [angry, happy, sad],
                    borderWidth: "0",
                    backgroundColor: ['#f72b50', '#209f84', '#ff5c00'],
                    countData: [angry_count, happy_count, sad_count]  // this is the emotion count data from the database
                },
            ],
            hoverOffset: 5
          },
          options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                  y: {
                    beginAtZero: true,
                    steps: 5,
                    stepValue: 5,
                    max: 100
                  }
                },
            plugins: {
              legend: {
                display: false
              },
              tooltip: {
                enabled: false
              },
              datalabels: {
                color: 'white',
                labels: {
                  title: {
                    font: {
                      weight: 'bold',
                      size: '15px'
                    }
                  }
                },
                formatter: function(value, context) {
                    var dataset = context.dataset;
                    var countData = dataset.countData[context.dataIndex];
                    return value + '%' + ' (' + countData + ')';
                },
              }
            }
          },
          plugins: [ChartDataLabels]

        });
        
        
        // $('#archive-'+key.question_id).click(() => {
        //     // var question_id = $(this).attr('qid');
        //     var question_id = key.question_id;
        //     // alert("Archive Clicked");
        //     $.ajax({
        //         type: "POST",
        //         url: `${base_url}archivequestion`,
        //         data: {question_id: question_id},
        //         dataType: "json",
        //         success: function(response){
        //             if(response.success){
        //                 //hide the archived question from the UI
        //                 $(`[qid=${question_id}]`).parents('.alert').hide();
        //                 // show the success notification
        //                 alert(response.message);
        //                 loadQuestions();
        //             }
        //             else{
        //                 // show the error message
        //                 alert(response.error);
        //                 loadQuestions();
        //             }
        //         }
        //     });
        // })
        
        $('#archive-' + key.question_id).click(() => {
          var question_id = key.question_id;
        
          Swal.fire({
            title: 'Archive Question?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            allowOutsideClick: false
          }).then((result) => {
            if (result.value) {
              $.ajax({
                type: "POST",
                url: `${base_url}archivequestion`,
                data: {question_id: question_id},
                dataType: "json",
                success: function(response) {
                  if (response.success) {
                    //hide the archived question from the UI
                    $(`[qid=${question_id}]`).parents('.alert').hide();
                    // show the success notification
                    Swal.fire({
                      title: `Question Archived!`,
                      icon: "success",
                      timer: 2000
                    });
                    loadQuestions();
                  } else {
                    // show the error message
                    Swal.fire({
                      title: `Question Archived!`,
                      icon: 'success',
                      timer: 2000
                    });
                    loadQuestions();
                  }
                }
              });
            }
          });
        });

    });
    
  });
  
  
  
  
  
   //end lod
  };


  loadQuestions();


//load questions


//add question
$("#save_question").click(()=>{
  Swal.fire({
    title: `Add Question?`,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
    allowOutsideClick: false
  
    
  }).then((result) => {
    console.log('test');
    /* Read more about isConfirmed, isDenied below */
    if (result.value) {
      let qtext = $('#qtext').val();
      let qgroup = $('#qgroup').val();
    
  
    $.post(`${base_url}addquestion`,{qtext : qtext,qgroup:qgroup},(res)=>{
      if(res){
        Swal.fire({
          title: `Question Added!`,
          icon: "success",
          timer: 2000
    
          }).then(function() {
              $('#qtext').val('');
              const qmodal = document.querySelector('#question_modal');
            const modal = bootstrap.Modal.getInstance(qmodal);    
            modal.hide();
            loadQuestions();
              
          });

      }
  
      });
    }
  });


})

// $('#archive').click(() => {
//     var question_id = $(this).attr('qid');
//     alert("Archive Clicked");
//     $.ajax({
//         type: "POST",
//         url: `${base_url}archivequestion`,
//         data: {question_id: question_id},
//         dataType: "json",
//         success: function(response){
//             if(response.success){
//                 //hide the archived question from the UI
//                 $(`[qid=${question_id}]`).parents('.alert').hide();
//                 // show the success notification
//                 alert(response.message);
//             }
//             else{
//                 // show the error message
//                 alert(response.error);
//             }
//         }
//     });
// });





//end add question


// delete question



// end delete
$(document).on('click','.delete', function(){
  let qid = $(this).attr('qid');

  Swal.fire({
    title: `Delete Question ?`,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Delete question',
    allowOutsideClick: false
  
    
  }).then((result) => {
    
    /* Read more about isConfirmed, isDenied below */
    if (result.value) {
  
    $.post(`${base_url}deletequestion`,{qid : qid},(res)=>{
      if(res){
        Swal.fire({
          title: `Question Deleted Successfully!`,
          icon: "success",
          timer: 1000
    
          }).then(function() { 
            loadQuestions();
            $("html, body").animate({
              scrollTop: $(
                'html, body').get(0).scrollHeight
          }, 1000);
         
              
          });

      }else{
        Swal.fire({
          title: `Question cannot be Deleted`,
          icon: "error",
          timer: 1000
    
          }).then(function() {
            $("html, body").animate({
              scrollTop: $(
                'html, body').get(0).scrollHeight
          }, 1000);
                

              
          });

      }
      
      
  
      });
  
    
      
    }
  });


  
});


//edit question
$(document).on('click','.edit', function(){
  let qid = $(this).attr('qid');
  let qutext = $(this).attr('qtext');
  var myModal = new bootstrap.Modal(document.getElementById('edit_question_modal'))
  myModal.show();
  
  $('#eqtext').val(qutext);
  $('#qid').val(qid);
});

// actual edit
$("#edit_question").click(()=>{
  Swal.fire({
    title: `Save Changes ?`,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
    allowOutsideClick: false
  
    
  }).then((result) => {
    
    /* Read more about isConfirmed, isDenied below */
    if (result.value) {
      let qid = $('#qid').val();
      let qtext = $('#eqtext').val();
      let qgroup = $('#qgroup').val();

    
  
    $.post(`${base_url}editquestion`,{qtext : qtext,qgroup:qgroup,qid : qid},(res)=>{
      if(res){
        Swal.fire({
          title: `Question Updated Successfully!`,
          icon: "success",
          timer: 2000
    
          }).then(function() {
              $('#eqtext').val('');
              const qmodal = document.querySelector('#edit_question_modal');
            const modal = bootstrap.Modal.getInstance(qmodal);    
            modal.hide();
            loadQuestions();
            $("html, body").animate({
              scrollTop: $(
                'html, body').get(0).scrollHeight
          }, 1000);
         
              
          });

      }else{
        Swal.fire({
          title: `Question cannot be Updated`,
          icon: "error",
          timer: 2000
    
          }).then(function() {
              $('#qtext').val('');
              const qmodal = document.querySelector('#edit_question_modal');
              const modal = bootstrap.Modal.getInstance(qmodal);    
              modal.hide();
                

              
          });

      }
      
      
  
      });
  
    
      
    }
  });


})


//end edit

function getColor(color){
  if(color == '#450b5a'){
    return 'primary'

  }else if(color == '#209f84'){
    return 'success'
  }
  else if(color == '#2781d5'){
    return 'info'
  }else if(color == '#ff5c00'){
    return 'warning'
  }else{
    return 'danger'
  }
}

function convertDate(date){
  return JavaScriptDate1 = new Date(date).toLocaleDateString(
    'en-US',
    {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
      // hour12: true,
      // hour: '2-digit',
      // minute: '2-digit'
    }
);
}


function convertTime(time){
  return JavaScriptDate1 = new Date(time).toLocaleDateString(
    'en-US',
    {
      // year: 'numeric',
      // month: 'long',
      // day: 'numeric'
      hour12: true,
      hour: '2-digit',
      minute: '2-digit'
    }
);
}


// change pass
$('#change_pass').click(()=>{
  let uid = $('#uid').val();
  let newpass = $('#new_pass').val();

  Swal.fire({
    title: `Change Password ?`,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
    allowOutsideClick: false
  
    
  }).then((result) => {
    
    /* Read more about isConfirmed, isDenied below */
    if (result.value) {
      

    
  
    $.post(`${base_url}changepass`,{uid:uid,newpass:newpass},(res)=>{
      if(res){
        Swal.fire({
          title: `Password Successfully Updated!`,
          icon: "success",
          timer: 2000
    
          }).then(function() {
              //location reload
              window.location.reload();
         
              
          });

      }else{
        Swal.fire({
          title: `Password Cannot be Updated!`,
          icon: "error",
          timer: 2000
    
          }).then(function() {
              //location reload
                
              window.location.reload();
              
          });

      }
      
      
  
      });
  
    
      
    }
  });



});

//end change pass


});