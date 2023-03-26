import { getFullFaceDescription,snapshot,b64toBlob,drawFaceRect } from "./modules.js";
let base_url = 'http://localhost/facelogin/';
// const faceapi = require('face-api.js');
const MODEL_URL = 'http://localhost/facelogin/assets/models';

let fullDesc;
let faceDescriptor = [];

Promise.all([
    faceapi.loadSsdMobilenetv1Model(MODEL_URL),
    faceapi.loadFaceLandmarkTinyModel(MODEL_URL),
    faceapi.loadFaceRecognitionModel(MODEL_URL)//heavier/accurate version of tiny face detector
    // faceapi.nets.tinyFaceDetector.loadFromUri(MODEL_URL),
    // faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL),
    // faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL),
    // faceapi.nets.faceExpressionNet.loadFromUri(MODEL_URL)
]).then(startCam())
.catch(err=>console.log(err));


var video = document.querySelector("#videoElement");
let canvas = document.querySelector("#canvas");


function startCam(){
if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}

}

$('#save_info').click(()=>{
    let fname=$("#fname").val();
    let course=$("#course").val();
    let yrsec=$("#yrsec").val();
    let pos = $("#pos").val();

    $.post(`${base_url}saveemp`,{fname:fname,course:course,yrsec:yrsec,pos:pos},(res)=>{
        
        if(res){
            Swal.fire({
                title: `User Saved!, Select Pictures for Data`,
                icon: "success",
                timer: 2000
          
                }).then(function() {
                    $('#fname').val('');
                    $('#course').val('');
                    $('#yrsec').val('');
                    $("#save_images").prop('disabled',false);
    
                    startCapture();
                   
                });
            

          

        }
    });
       
   
    
   
    

    
})

// async function detect(){
//     const detections = await faceapi.detectAllFaces(video).withFaceLandmarks()
//     .withFaceExpressions()
//     .
   
// }

// video.addEventListener('play',()=>{
//     setInterval(detect,1000);

// });

function startCapture(){
    const img_array = [];

    const captureInterval = setInterval(() => {

        let image = snapshot(540,375, video);
        
         getFullFaceDescription(image,160).then(data =>{
           
            console.log(data);
            if( (data[0]?.descriptor.length == 128) ){
           
                fullDesc = data;
                faceDescriptor = data[0]?.descriptor;
                img_array.push({full : fullDesc,desc : faceDescriptor,image: image});
                 
                
           }

            if(img_array.length == 5) {
                clearInterval(captureInterval);
                let imgbox = document.querySelector("#img-box");
                let html;
            
                img_array.forEach(img=>{
                    html += `<img src='${img.image}' id="preview" alt="Capture" style="width: 100px;height:100px;" />`
                });
                imgbox.innerHTML = html;

            }
            
         }).catch (err => console.log(err));
       

         console.log({full : fullDesc,desc : faceDescriptor});
         console.log(img_array);
         let ctx = canvas.getContext("2d");
         drawFaceRect(fullDesc,ctx);

        
        
    }, 700);

    

}

