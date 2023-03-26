export async function getFullFaceDescription(blob, inputSize = 512) {
    // tiny_face_detector options
    let scoreThreshold = 0.8;
    const OPTION = new faceapi.SsdMobilenetv1Options({
      inputSize,
      scoreThreshold,
    });
    const useTinyModel = true;
  
    // fetch image to api
    let img = await faceapi.fetchImage(blob);
  
    // detect all faces and generate full description from image
    // including landmark and descriptor of each face
    let fullDesc = await faceapi
      .detectAllFaces(img, OPTION)
      .withFaceLandmarks(useTinyModel)
      .withFaceDescriptors();
    return fullDesc;
  }

  export function snapshot(width,height,video){
    let canvas = document.createElement('canvas');
    let ctx= canvas.getContext('2d');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

     ctx.drawImage(video, 0,0);
     return canvas.toDataURL("image/jpeg");
   
  }

  export async function snapshot2(video){
    const track = video.srcObject.getVideoTracks()[0]
    const imageCapture = new ImageCapture(track)
    return blob = await imageCapture.takePhoto()
  }

  export const drawFaceRect = (descriptions, ctx) => {
    // Loop through each desc
    descriptions &&
      descriptions.forEach((desc) => {
        // Extract boxes and classes
        const { x, y, width, height } = desc.detection.box;
        const landmarksPoint=desc.landmarks._positions;
  
        ctx.font = "normal 18px Gotham, Helvetica Neue, sans-serif";
        ctx.lineWidth = 2;
        ctx.strokeStyle = "#08E";
  
        //draw 68 points
        landmarksPoint.map(point=>{
          ctx.beginPath();
          ctx.fillStyle = "#08E";
          ctx.arc(point._x, point._y, 3, 0, 2 * Math.PI);
          ctx.closePath();
  
          ctx.fill();
        })
      
        // Draw rectangles and text
        ctx.beginPath();
        ctx.rect(x, y, width, height);
        ctx.stroke();
      });
  };
  


  export function b64toBlob(b64Data, contentType, sliceSize = 512) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;
  
    var byteCharacters = atob(b64Data);
    var byteArrays = [];
  
    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
      var slice = byteCharacters.slice(offset, offset + sliceSize);
  
      var byteNumbers = new Array(slice.length);
      for (var i = 0; i < slice.length; i++) {
        byteNumbers[i] = slice.charCodeAt(i);
      }
  
      var byteArray = new Uint8Array(byteNumbers);
  
      byteArrays.push(byteArray);
    }
      
    var blob = new Blob(byteArrays, {type: contentType});
    return blob;

}