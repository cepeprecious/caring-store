$(document).ready(function(){

    const base_url = "https://caringstore.xyz/";
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

    const lpq_bar = document.getElementById("lpq_bar").getContext('2d');
    
   



    const lpqbar = new Chart(lpq_bar, {
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
            responsive: false,
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

    
let loadQAcc = function() {
    
    $.get(`${base_url}getlp`,function(response){
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
        lpqbar.data.labels.push(key.emotion.toUpperCase());
        lpqbar.data.datasets[0].backgroundColor.push(color);
        lpqbar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        lpqbar.data.datasets[0].countData.push(Number(key.emotion_count).toFixed(1));
        lpqbar.update();

  })


    })


    }
loadQAcc();
    
})