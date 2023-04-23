import './bootstrap';


function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
document.addEventListener('DOMContentLoaded', function () {
    const slider = new ChiefSlider('.slider', {
        loop: false
    });
});
