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

    //const accq_bar = document.getElementById("accq_bar").getContext('2d');
    
    const bar_acc = document.getElementById("bar_acc").getContext('2d');
    
   



    // const accqbar = new Chart(accq_bar, {
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
    
    const accbar = new Chart(bar_acc, {
        type: 'bar',
        data: {
            defaultFontFamily: 'Poppins',
            labels: [],
            datasets: [
                {
                    label: '',
                    data: [],
                    borderColor: ['white','white','white'],
                    borderWidth: "0",
                    backgroundColor: [],
                    countData: []
                }
            ],
            hoverOffset: 5
        },
        options: {
            legend: {
                display: false
              },
            scales: {
                y: {
                  beginAtZero: true,
                  steps: 5,
                  stepValue: 5,
                  max: 100
                }
              },
            responsive: true,
            plugins : {
                legend: {
                    display: false
                  },
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
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });




    //functions
    
    let loadAcc = function() {
    
    $.get(`${base_url}getacc`,function(response){
        console.log(response);
        
  
  $.each(response,function(i,key){
        let color = '';
        if(key.emotion == 'happy'){
            color = '#209f84';
        }else if(key.emotion == 'sad'){
            color = '#ff5c00';
        }else{
            color = '#f72b50';
        }
        accbar.data.labels.push(key.emotion.toUpperCase());
        accbar.data.datasets[0].backgroundColor.push(color);
        accbar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        accbar.data.datasets[0].countData.push(Number(key.emotion_count).toFixed(1));
        accbar.update();

  })


    })

    }
loadAcc();

    
// let loadQAcc = function() {
    
//     $.get(`${base_url}getaccq`,function(response){
//         console.log(response);
        
       
//         let h=0;
//         let s=0;
//         let a=0;
//         let emo = [];
//   $.each(response,function(i,key){
        
//         if(key.emotion == "happy"){
//             console.log(h)
//             console.log(accqbar.data.datasets[h])
            
//             if(accqbar.data.labels.includes(key.emotion.toUpperCase()) == false){
//                 accqbar.data.labels.push(key.emotion.toUpperCase())
//             }

//             if(accqbar.data.datasets[h] == undefined){
//                 if(h==0){
//                     accqbar.data.datasets.push({
//                         data: [],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: []
//                     });

//                 }else{
//                     accqbar.data.datasets.push({
//                         data: [[...accqbar.data.datasets[h-1].data].fill(0)],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: [[...accqbar.data.datasets[h-1].backgroundColor].fill('')]
//                     });
//                 }
               
                
                
//                 accqbar.data.datasets[h].backgroundColor.push(key.question_color)
//                 // accqbar.data.datasets[h].label = key.question_id;
//                 accqbar.data.datasets[h].data.push(Number(key.emotion_percentage).toFixed(1));
//             }else{
//                 accqbar.data.datasets[h].backgroundColor.push(key.question_color)
//                 // accqbar.data.datasets[h].label = key.question_id;
//                 accqbar.data.datasets[h].data.push(Number(key.emotion_percentage).toFixed(1));
//             }
           
            
//             console.log(accqbar.data.datasets[h].backgroundColor)
//             console.log(accqbar.data.datasets[h].data)
           
//             h++;
           
//         }

//         else if(key.emotion == "sad"){
//             console.log(s)
//             console.log(accqbar.data.datasets[s])
            
//             if(accqbar.data.labels.includes(key.emotion.toUpperCase()) == false){
//                 accqbar.data.labels.push(key.emotion.toUpperCase())
//             }
//             if(accqbar.data.datasets[s] == undefined){
//                 if(h==0){
//                     accqbar.data.datasets.push({
//                         data: [],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: []
//                     });

//                 }else{
//                     accqbar.data.datasets.push({
//                         data: [[...accqbar.data.datasets[s-1].data].fill('')],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: [[...accqbar.data.datasets[s-1].backgroundColor].fill('')]
//                     });
//                 }
//                 accqbar.data.datasets[s].backgroundColor.push(key.question_color)
//                 accqbar.data.datasets[s].label = key.question_id;
//                 accqbar.data.datasets[s].data.push(Number(key.emotion_percentage).toFixed(1));
//             }else{
//                 accqbar.data.datasets[s].backgroundColor.push(key.question_color);
//                 accqbar.data.datasets[s].label = key.question_id;
//                 accqbar.data.datasets[s].data.push(Number(key.emotion_percentage).toFixed(1));
//             }
           
//             console.log(accqbar.data.datasets[s].backgroundColor)
//             console.log(accqbar.data.datasets[s].data)
            
//             s++;
           
//         }
//       else if(key.emotion == "angry"){
//               console.log(a)
//             console.log(accqbar.data.datasets[a])
            
//             if(accqbar.data.labels.includes(key.emotion.toUpperCase()) == false){
//                 accqbar.data.labels.push(key.emotion.toUpperCase())
//             }
           
//             if(accqbar.data.datasets[a] == undefined){
//                 if(h==0){
//                     accqbar.data.datasets.push({
//                         data: [],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: []
//                     });

//                 }else{
//                     accqbar.data.datasets.push({
//                         data: [[...accqbar.data.datasets[a-1].data.fill('')]],
//                         label : '',
//                         borderWidth: "0",
//                         backgroundColor: [[...accqbar.data.datasets[a-1].backgroundColor].fill('')]
//                     });
//                 }
               
//                 accqbar.data.datasets[a].backgroundColor.push(key.question_color)
               
//                 accqbar.data.datasets[a].data.push(Number(key.emotion_percentage).toFixed(1));
                
                
                
//             }else{
//                 accqbar.data.datasets[a].backgroundColor.push(key.question_color)
               
//                 accqbar.data.datasets[a].data.push(Number(key.emotion_percentage).toFixed(1));
                
               
//             }
//             console.log(accqbar.data.datasets[a].backgroundColor)
//             // console.log(accqbar.data.datasets[a].backgroundColor.length)
//             console.log(accqbar.data.datasets[a].data)
//             // console.log(accqbar.data.datasets[a].data.length)

//             a++;
            
            
//           // accqbar.update();
//         }
//         accqbar.update();
//         // console.log(accqbar.data.datasets[0].backgroundColor);
//         // console.log(accqbar.data.datasets[1].backgroundColor);
//         // console.log(accqbar.data.datasets[2].backgroundColor);

       
       

//   })
  




//     })

//     }
// loadQAcc();


//     const getcolor = (qcolor)=>{
//         let qucolor =  COLORS.filter(c => c.color == qcolor );
        
//         return qucolor[0].hex
   
//   }
    
})