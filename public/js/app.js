const input = document.getElementById('file-upload');
const infoArea = document.getElementById('file-upload-filename');

input.addEventListener('change', showFileName);

function showFileName(event) {
    let input = event.srcElement;
    let fileName = input.files[0].name;
    infoArea.textContent = fileName;
}
