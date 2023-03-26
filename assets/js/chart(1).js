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

    const barChart_1 = document.getElementById("pie_overall").getContext('2d');
    const bar_acc = document.getElementById("bar_acc").getContext('2d');
    const em_acc = document.getElementById("em_acc").getContext('2d');
    const res_bar = document.getElementById("res_acc").getContext('2d');
    const lp_bar = document.getElementById("lp_acc").getContext('2d');
    
    
   

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
                    backgroundColor: ['#f72b50','#209f84','#ff5c00']
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
                    formatter : (value,context)=>{
                        return `${value}%`
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });


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
                    backgroundColor: []
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
                    formatter : (value,context)=>{
                        return `${value}%`
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });

    const embar = new Chart(em_acc, {
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
                    backgroundColor: []
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
                    formatter : (value,context)=>{
                        return `${value}%`
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });

    const resbar = new Chart(res_bar, {
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
                    backgroundColor: []
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
                    formatter : (value,context)=>{
                        return `${value}%`
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });

    const lpbar = new Chart(lp_bar, {
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
                    backgroundColor: []
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
                    formatter : (value,context)=>{
                        return `${value}%`
                    }
                }
            }
        },
        plugins : [ChartDataLabels]
       
    });

    




    //functions
let loadPie = function() {
    
    $.get(`${base_url}getemotions`,function(response){
        console.log(response);
        
  
  $.each(response,function(i,key){
        pie_overall.data.labels.push(key.emotion.toUpperCase());
        pie_overall.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        pie_overall.update();

  })


    })

    }

loadPie();
        

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
        accbar.update();

  })


    })

    }
loadAcc();

let loadEm = function() {
    
    $.get(`${base_url}getem`,function(response){
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
        embar.data.labels.push(key.emotion.toUpperCase());
        embar.data.datasets[0].backgroundColor.push(color);
        embar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        embar.update();

  })


    })


    }
loadEm();

let loadRes = function() {
    
    $.get(`${base_url}getres`,function(response){
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
        resbar.data.labels.push(key.emotion.toUpperCase());
        resbar.data.datasets[0].backgroundColor.push(color);
        resbar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        resbar.update();

  })


    })


    }
loadRes();

let loadLp = function() {
    
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
        lpbar.data.labels.push(key.emotion.toUpperCase());
        lpbar.data.datasets[0].backgroundColor.push(color);
        lpbar.data.datasets[0].data.push(Number(key.emotion_percentage).toFixed(1));
        lpbar.update();

  })


    })


    }

loadLp();




    
    
})