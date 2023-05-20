$(document).ready(function(){

    // const base_url = "https://caringstore.xyz/";
    const base_url = "http://localhost/caring-store/";
    const COLORS = [
        {
          color : "primary",
          hex : "#450b5a"
        },
        {
          color : "success",
          hex : "#209f84"
        },
        {
          color : "info",
          hex : "#2781d5"
        },
        {
          color : "warning",
          hex : "#ff5c00"
        },
        {
          color : "danger",
          hex : "#f72b50"
        }
      
      
      ];

    const barChart_1 = document.getElementById("pie_overall").getContext('2d');
    //const bar_acc = document.getElementById("bar_acc").getContext('2d');
    const accq_bar = document.getElementById("accq_bar").getContext('2d');
    const accq_bar_2 = document.getElementById("accq_bar_2").getContext('2d');
    const accq_bar_3 = document.getElementById("accq_bar_3").getContext('2d');
    
    const loadYears = function () {
        $.get(`${base_url}getyears`, function (response) {
            response.forEach(response => {
                var newOption = $('<option>', {
                  value: response,
                  text: response
                });
                $('#date-picker-2').append(newOption).selectpicker('refresh');
            });
            response.forEach(response => {
                 var newOption = $('<option>', {
                  value: response,
                  text: response
                });
                $('#date-picker-3').append(newOption).selectpicker('refresh');
            });
            loadQAcc_2();
            loadQAcc_3();
        })
    }
    loadYears();
    
    const pie_overall = new Chart(barChart_1, {
        type: 'pie',
        data: {
            defaultFontFamily: 'Poppins',
            labels: [],
            datasets: [
                {
                    label: [],
                    data: [],
                    borderColor: ['white','white','white'],
                    borderWidth: "0",
                    backgroundColor: ['#f72b50','#209f84','#ff5c00'],
                    countData: []
                }
            ],
            hoverOffset: 5
        },
        options: {
            responsive: false,
            plugins : {
                tooltip :{
                    enabled: false
                },
                datalabels: {
                    color : 'white',
                    labels: {
                        title : {
                            font : {
                                weight : 'bold',
                                size : '20px'
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
        plugins : [ChartDataLabels]
       
    });
    
    $(document).ready(function() {
      $("#date-picker").change(function() {
        loadQAcc();
      });
      $("#category-picker").change(function() {
        loadQAcc();
      });
      $("#date-picker-2").change(function() {
        loadQAcc_2();
      });
       $("#category-picker-2").change(function() {
        loadQAcc_2();
      });
      $("#date-picker-3").change(function() {
        loadQAcc_3();
      });
       $("#category-picker-3").change(function() {
        loadQAcc_3();
      });
    });

  //   const accqbar = new Chart(accq_bar, {
  //     type: 'bar',
  //     data: {
  //         defaultFontFamily: 'Poppins',
  //         labels: [],
  //         datasets: [],
  //             // {
                  
  //             //     data: [90,90,89,75,87],

  //             //     borderWidth: "0",
  //             //     backgroundColor: []
  //             // },
  //             // {
                 
  //             //     data: [70,90,89,75,87],
                 
  //             //     borderWidth: "0",
  //             //     backgroundColor: []
  //             // },
  //             // {
                  
  //             //     data:[90,90,89,75,87],
                 
  //             //     borderWidth: "0",
  //             //     backgroundColor: []
  //             // }
          
  //         hoverOffset: 5
  //     },
  //     options: {
  //         responsive : true,
  //         maintainAspectRatio : true,
         
  //         scales: {
  //             y: {
  //               beginAtZero: true,
  //               steps: 5,
  //               stepValue: 5,
  //               max: 100
  //             }
  //           },
  //         responsive: false,
  //         plugins : {
  //             legend: {
  //                 display: false
  //               },
  //             tooltip :{
  //                 enabled: false
  //             },
  //             datalabels: {
  //                 color : 'white',
  //                 labels: {
  //                     title : {
  //                         font : {
  //                             weight : 'bold',
  //                             size : '15px'
  //                         }
  //                     }
  //                 },
  //                 formatter : (value,context)=>{
  //                     return `${value}%`
  //                 }
  //             }
  //         }
  //     },
  //     plugins : [ChartDataLabels]
     
  // });

  const accqbar = new Chart(accq_bar, {
        type: 'bar',
        // data: {
        //     defaultFontFamily: 'Poppins',
        //     labels: ["2021", "2022", '2023'],
        //     datasets: [
        //         {
        //             label: 'Angry',
        //             data: [20, 20, 20],
        //             countData: [20, 20, 20],
        //             backgroundColor: 'red'
        //         },
        //         {
        //             label: 'Happy',
        //             data: [40, 40, 40],
        //             countData: [40, 40, 40],
        //             backgroundColor: 'green'
        //         },
        //         {
        //             label: 'Sad',
        //             data: [60, 60, 60],
        //             countData: [60, 60, 60],
        //             backgroundColor: 'blue'
        //         }
        //     ],
        //     hoverOffset: 5
        // },
        options: {
            responsive: true,
            maintainAspectRatio: true,

            scales: {
                y: {
                    beginAtZero: true,
                    steps: 5,
                    stepValue: 5,
                    max: 100
                },
            },
            plugins: {
                legend: {
                    position: 'bottom',
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
                    formatter: function (value, context) {
                        var dataset = context.dataset;
                        var countData = dataset.countData[context.dataIndex];
                        return value + '%' + '\n(' + countData + ')';
                    }
                }
            }
        },
        plugins: [ChartDataLabels]

    });


    let loadQAcc = function () {
        let selected = $("#date-picker option:selected").val();
        let category = $("#category-picker option:selected").val();
        let current_date = new Date();

        $.get(`${base_url}getrecord/${selected}/${category}`, function (response) {
            console.log(response);

            accqbar.data = {
                labels: [],
                datasets: []
            }
            accqbar.update();

            accqbar.data = {
                defaultFontFamily: 'Poppins',
                labels: [response[0].date, response[1].date, response[2].date],
                datasets: [
                    {
                        label: 'Angry',
                        data: [response[0].angry_percentage, response[1].angry_percentage, response[2].angry_percentage],
                        countData: [response[0].angry, response[1].angry, response[2].angry],
                        backgroundColor: '#f72b50'
                    },
                    {
                        label: 'Happy',
                        data: [response[0].happy_percentage, response[1].happy_percentage, response[2].happy_percentage],
                        countData: [response[0].happy, response[1].happy, response[2].happy],
                        backgroundColor: '#209f84'
                    },
                    {
                        label: 'Sad',
                        data: [response[0].sad_percentage, response[1].sad_percentage, response[2].sad_percentage],
                        countData: [response[0].sad, response[1].sad, response[2].sad],
                        backgroundColor: '#ff5c00'
                    }
                ],
                hoverOffset: 5
            }
            accqbar.update();
        })
    }
    loadQAcc();
    
    
    
    
    
    
    
    
    const accqbar_2 = new Chart(accq_bar_2, {
        type: 'bar',
        // data: {
        //     defaultFontFamily: 'Poppins',
        //     labels: ["2021", "2022", '2023'],
        //     datasets: [
        //         {
        //             label: 'Angry',
        //             data: [20, 20, 20],
        //             countData: [20, 20, 20],
        //             backgroundColor: 'red'
        //         },
        //         {
        //             label: 'Happy',
        //             data: [40, 40, 40],
        //             countData: [40, 40, 40],
        //             backgroundColor: 'green'
        //         },
        //         {
        //             label: 'Sad',
        //             data: [60, 60, 60],
        //             countData: [60, 60, 60],
        //             backgroundColor: 'blue'
        //         }
        //     ],
        //     hoverOffset: 5
        // },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            indexAxis: 'y',

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
                    position: 'bottom',
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
                    formatter: function (value, context) {
                        var dataset = context.dataset;
                        var countData = dataset.countData[context.dataIndex];
                        return value + '%' + '(' + countData + ')';
                    }
                }
            }
        },
        plugins: [ChartDataLabels]

    });


    let loadQAcc_2 = function () {
        let selected = $("#date-picker-2 option:selected").text();
        let category = $("#category-picker-2 option:selected").val();
        let current_date = new Date();

        $.get(`${base_url}getyearrecord/${selected}/${category}`, function (response) {
            console.log(response);

            accqbar_2.data = {
                labels: [],
                datasets: []
            }
            accqbar_2.update();

            accqbar_2.data = {
                defaultFontFamily: 'Poppins',
                labels: [response[0].date],
                datasets: [
                    {
                        label: 'Angry',
                        data: [response[0].angry_percentage],
                        countData: [response[0].angry],
                        backgroundColor: '#f72b50'
                    },
                    {
                        label: 'Happy',
                        data: [response[0].happy_percentage],
                        countData: [response[0].happy],
                        backgroundColor: '#209f84'
                    },
                    {
                        label: 'Sad',
                        data: [response[0].sad_percentage],
                        countData: [response[0].sad],
                        backgroundColor: '#ff5c00'
                    }
                ],
                hoverOffset: 5
            }
            accqbar_2.update();
        })
    }
    
    
    
    
    
    
    const accqbar_3 = new Chart(accq_bar_3, {
        type: 'bar',
        // data: {
        //     defaultFontFamily: 'Poppins',
        //     labels: ["2021", "2022", '2023'],
        //     datasets: [
        //         {
        //             label: 'Angry',
        //             data: [20, 20, 20],
        //             countData: [20, 20, 20],
        //             backgroundColor: 'red'
        //         },
        //         {
        //             label: 'Happy',
        //             data: [40, 40, 40],
        //             countData: [40, 40, 40],
        //             backgroundColor: 'green'
        //         },
        //         {
        //             label: 'Sad',
        //             data: [60, 60, 60],
        //             countData: [60, 60, 60],
        //             backgroundColor: 'blue'
        //         }
        //     ],
        //     hoverOffset: 5
        // },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            indexAxis: 'y',

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
                    position: 'bottom',
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
                    formatter: function (value, context) {
                        var dataset = context.dataset;
                        var countData = dataset.countData[context.dataIndex];
                        return value + '%' + '(' + countData + ')';
                    }
                }
            }
        },
        plugins: [ChartDataLabels]

    });


    let loadQAcc_3 = function () {
        let selected = $("#date-picker-3 option:selected").val();
        let category = $("#category-picker-3 option:selected").val();
        let current_date = new Date();

        $.get(`${base_url}getyearrecord/${selected}/${category}`, function (response) {
            console.log(response);

            accqbar_3.data = {
                labels: [],
                datasets: []
            }
            accqbar_3.update();

            accqbar_3.data = {
                defaultFontFamily: 'Poppins',
                labels: [response[0].date],
                datasets: [
                    {
                        label: 'Angry',
                        data: [response[0].angry_percentage],
                        countData: [response[0].angry],
                        backgroundColor: '#f72b50'
                    },
                    {
                        label: 'Happy',
                        data: [response[0].happy_percentage],
                        countData: [response[0].happy],
                        backgroundColor: '#209f84'
                    },
                    {
                        label: 'Sad',
                        data: [response[0].sad_percentage],
                        countData: [response[0].sad],
                        backgroundColor: '#ff5c00'
                    }
                ],
                hoverOffset: 5
            }
            accqbar_3.update();
        })
    }
    
    
    
    
    
    
    
    
    
    



  const getcolor = (qcolor)=>{
      let qucolor =  COLORS.filter(c => c.color == qcolor );
      
      return qucolor[0].hex
 
 };


    //functions
let loadPie = function() {
    
    let date = encodeURIComponent($('#date_range').val());
    
    console.log(date);
    
    $.get(`${base_url}getemotions/${date}`,function(response){
        console.log(response);
        
    pie_overall.data.labels.splice(0, pie_overall.data.labels.length);
    pie_overall.data.datasets[0].data.splice(0, pie_overall.data.datasets[0].data.length);
    pie_overall.data.datasets[0].countData.splice(0, pie_overall.data.datasets[0].countData.length);
    pie_overall.update();
  
  $.each(response,function(i,key){
        
        pie_overall.data.labels.push(key.emotion.toUpperCase());
        pie_overall.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        pie_overall.data.datasets[0].countData.push(Number(key.emotion_count).toFixed(1));
        pie_overall.update();

  })


    })

    }

loadPie();

$(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
        
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        $('input[name="daterange"]').val(`${start.format('MM/DD/YYYY')} - ${end.format('MM/DD/YYYY')}`);
        loadPie();
      });
    });

// $(function() {
//     var start = moment().subtract(29, 'days');
//     var end = moment();

//     function cb(start, end) {
//         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
//     }

//     $('#report_range').daterangepicker({
//         startDate: start,
//         endDate: end,
//         ranges: {
//             'Today': [moment(), moment()],
//             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
//             'Last 7 Days': [moment().subtract(6, 'days'), moment()],
//             'Last 30 Days': [moment().subtract(29, 'days'), moment()],
//             'This Month': [moment().startOf('month'), moment().endOf('month')],
//             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
//             'Last 3 Months': [moment().subtract(3, 'months').startOf('month'), moment().endOf('month')]
//         }
//     }, cb);

//     cb(start, end);

// });

$(function() {
  var start = moment().subtract(29, 'days');
  var end = moment();

  function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  }

  $('#report_range').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
          'Last 3 Months': [moment().subtract(3, 'months').startOf('month'), moment().endOf('month')],
          'Last 3 Years': [moment().subtract(3, 'years').startOf('year'), moment().endOf('month')],
      },
      "showCustomRangeLabel": false
  }, cb);

  cb(start, end);
});

// let loadEngagement = function() {
    
//   $.get(`${base_url}getacc`,function(response){
//       console.log(response);
      

// $.each(response,function(i,key){
//       let color = '';
//       if(key.emotion == 'happy'){
//           color = '#209f84';
//       }else if(key.emotion == 'sad'){
//           color = '#ff5c00';
//       }else{
//           color = '#f72b50';
//       }
//       accbar.data.labels.push(key.emotion.toUpperCase());
//       accbar.data.datasets[0].backgroundColor.push(color);
//       accbar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
//       accbar.update();

// })


//   })

//   }
// loadEngagement(); 
  
})
    
// })