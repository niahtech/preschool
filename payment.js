const paymentType = document.querySelector(".paymenttype");
const level = document.querySelector(".level");
const total = document.querySelector(".total");

document.querySelector(".invoice").addEventListener('mousemove', (e) => {
    if(paymentType.value == 'School Fees' && level.value == '100 level'){
        total.value = 50000;
    }
})