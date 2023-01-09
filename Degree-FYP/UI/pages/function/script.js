const video = document.getElementById('videoInput')

Promise.all([
    faceapi.nets.faceRecognitionNet.loadFromUri('./models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('./models'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('./models') //heavier/accurate version of tiny face detector
]).then(start)

function start() {
    var id = document.getElementById('inputid').value;
    $.ajax({
      type: "get",
      url: "function/ajax_clock.php",
      data: {"id": id},
      dataType: "json",
      success: function(result)
      {
        navigator.getUserMedia(
        { video:{} },
        stream => video.srcObject = stream,
        err => console.error(err)
      )
      recognizeFaces(result)
      }
    });
    
}

async function recognizeFaces(result) {

    const labeledDescriptors = await loadLabeledImages(result)
    const faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.4)


    video.play();


    video.addEventListener('play', async () => {
        const canvas = faceapi.createCanvasFromMedia(video)
        //document.body.append(canvas)

        const displaySize = { width: video.width, height: video.height }
        faceapi.matchDimensions(canvas, displaySize)

        

        setInterval(async () => {
            const detections = await faceapi.detectAllFaces(video).withFaceLandmarks().withFaceDescriptors()

            const resizedDetections = faceapi.resizeResults(detections, displaySize)

            canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)

            const results = resizedDetections.map((d) => {
                return faceMatcher.findBestMatch(d.descriptor)
            })
            results.forEach( (result, i) => {
                const box = resizedDetections[i].detection.box
                const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
                drawBox.draw(canvas)
                document.getElementById("inputEmail").value = result.toString()
            })
        }, 100)


        
    })
}


function loadLabeledImages(result) {
    const labels = result;
    console.log(result);
        return Promise.all(
            labels.map(async (label)=>{
                const descriptions = []
                for(let i=1; i<=2; i++) {
                    const img = await faceapi.fetchImage(`images/${label}/${i}.jpg`)
                    const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
                    descriptions.push(detections.descriptor)
                }
                return new faceapi.LabeledFaceDescriptors(label, descriptions)
            })
        )
    //const labels = ['1234@admin', "1234@user"]
    
}