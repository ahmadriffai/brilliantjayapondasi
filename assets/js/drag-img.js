const dragArea = document.querySelector(".drag-area");
const dragText = document.querySelector(".header");

let button = document.querySelector(".button");
let input = document.querySelector(".drag-input");
let btn = document.querySelector(".btn");

let file;

button.onclick = () => {
    input.click();
}

//when browse
input.addEventListener("change", function () {
    file = this.files[0];
    dragArea.classList.add("active");
    displayFile();
	btn.onclick = () => {
		console.log("hallo")
	}
});

// when file inside the drag arwa
dragArea.addEventListener('dragover', (event) => {
    event.preventDefault();
    dragText.textContent = "release to upload";
    dragArea.classList.add("active");
    // console.log("File is inside area")
});

// when file leaves the drag arwa
dragArea.addEventListener('dragleave', (event) => {
    dragText.textContent = "drag & drop";
    dragArea.classList.remove("active");
    // console.log("File is left area")
});


dragArea.addEventListener('drop', (event) => {
    event.preventDefault();
    // console.log("File is drop area")

    file = event.dataTransfer.files[0];
    // console.log(file);
    displayFile()
	sendData(file)

});


function displayFile() { 
    let fileType = file.type;
    // console.log(fileType)

    let validExtensions = ["image/jpeg", "image/jpg", "image/png"];

    if (validExtensions.includes(fileType)) {
        let fileRender = new FileReader();

        fileRender.onload = () => {
            let fileUrl = fileRender.result;
            // console.log(fileUrl);
            let imgTag = '<img src="' + fileUrl +'"alt="">';
            dragArea.innerHTML = imgTag;
        }
        fileRender.readAsDataURL(file);
    }else{
        alert("file harus dalam bentuk gambar");
        dragArea.classList.remove("active");
    }
}

function sendData(file){
	var ajax = new XMLHttpRequest();
	var data = new FormData();

	data.append("file", file);

	ajax.open("POST", "insert", true);
	ajax.send(data)
}

