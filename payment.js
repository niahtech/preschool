const paymentType = document.querySelector(".paymenttype");
const level = document.querySelector(".level");
const total = document.querySelector(".total");

document.querySelector(".invoice").addEventListener('mousemove', (e) => {
    if(paymentType.value == 'school Fees' && level.value == '100 level'){
        total.value = 50000;
    }
})

const makePayment = document.querySelector(".makePayment");
function payment(){

    if(document.querySelector(".paymentStatus").value =="1" && document.querySelector(".paymenttype").value !=="" && document.querySelector(".level").value !=="" && document.querySelector(".status").value !=="" && document.querySelector(".session").value !=="" && document.querySelector(".semester").value !==""){
        window.alert("You've do not have an outstanding");

//         makePayment.setAttribute("data-toggle", "modal");
//         makePayment.setAttribute("data-target", "#paid");
//         makePayment.removeAttribute("name");
//         makePayment.removeAttribute("type");
//         console.log(makePayment)
//         $("#paid").modal('show');

//     }else if(document.querySelector(".paymentStatus").value =="0"){
//         $.ajax({
//             method:"POST",
//             url:"libs/connection.inc.php",
//             data:{
//                 makePayment:'fghjkl;',
//                 total
//             }
//         }).done(res=>{
//             console.log(res);
//         }).fail(res=>{
//             console.log(res);
//         })
    }
    

    
}
$(".makePayment").click(function(e){

//     const total = $("input.total").val();
//     console.log("rertytr");
    payment();
})