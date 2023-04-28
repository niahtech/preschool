const paymentType = document.querySelector(".paymenttype");
const level = document.querySelector(".level");
const total = document.querySelector(".total");
const studentLevel = document.querySelector(".studLevel");
const sessionPaid = document.querySelector(".sessionPaid");
const session = document.querySelector(".session");

document.querySelector(".invoice").addEventListener('mousemove', (e) => {
    if (paymentType.value == 'school Fees' && level.value == '100 level') {
        total.value = 50000;
    }
    if (paymentType.value == 'school Fees' && level.value == '200 level') {
        total.value = 18000;
    }
    if (paymentType.value == 'school Fees' && level.value == '300 level') {
        total.value = 25000;
    }
    if (paymentType.value == 'school Fees' && level.value == '400 level') {
        total.value = 15000;
    }
    if (paymentType.value == 'school Fees' && level.value == '500 level') {
        total.value = 20000;
    }
    if (paymentType.value == 'Field Trip' && level.value == '100 level') {
        total.value = 16000;
    }
    if (paymentType.value == 'Field Trip' && level.value == '300 level') {
      total.value = 15000;
    }
    if (paymentType.value == 'Field Trip' && level.value == '400 level') {
        total.value = 13000;
    }
    if (paymentType.value == 'Accomodation' && level.value == '100 level') {
        total.value = 18000;
    }
    if (paymentType.value == 'Accomodation' && level.value == '200 level') {
        total.value = 18000;
    }
    if (paymentType.value == 'Accomodation' && level.value == '300 level') {
        total.value = 18000;
    }
    if (paymentType.value == 'Accomodation' && level.value == '400 level') {
        total.value = 18000;
    }
    if (paymentType.value == 'Accomodation' && level.value == '500 level') {
        total.value = 18000;
    }
})

const makePayment = document.querySelector(".makePayment");
function payment() {

    if (document.querySelector(".paymentStatus").value == "1" && document.querySelector(".paymenttype").value !== "" && document.querySelector(".level").value !== "" && document.querySelector(".status").value !== "" && document.querySelector(".session").value !== "" && document.querySelector(".semester").value !== "") {
        window.alert("You've do not have an outstanding");
    }
}
$(".makePayment").click(function (e) {

    //     const total = $("input.total").val();
    //     console.log("rertytr");
    payment();
})