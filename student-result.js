var score = document.querySelectorAll('.score');
var grade = document.querySelectorAll('.grade');
var unit = document.querySelectorAll('.unit');

var sum = 0;
for(let i=0; i<grade.length; i++){
    score[i].addEventListener('keyup', (e) => {
        let value = score[i].value;
        if(score[i].value.length !== 0){
            switch(true) {
                case value < 45:
                    grade[i].value = 'F';
                    break;
                case value < 50:
                    grade[i].value = 'D';
                    break;
                case value < 60:
                    grade[i].value = 'C';
                    break;
                case value < 70:
                    grade[i].value = 'B';
                    break;
                case value <= 100:
                    grade[i].value = 'A';
                    break;
                default:
                    alert('The score cannot be greater than 100');
            }
        }
        else{
            grade[i].value = '';
        }
    })
}

// var TQP = 0, TLU = 0, QP;
// document.querySelector('.GPA').addEventListener('click', (e) => {
//     for(let i=0; i<grade.length; i++){
//         switch(grade[i].value){
//             case 'F':
//                 QP = parseInt(unit[i].value) * 0;
//                 break;
//             case 'D':
//                 QP = parseInt(unit[i].value) * 2;
//                 break;
//             case 'C':
//                 QP = parseInt(unit[i].value) * 3;
//                 break;
//             case 'B':
//                 QP = parseInt(unit[i].value) * 4;
//                 break;
//             case 'A':
//                 QP = parseInt(unit[i].value) * 5;
//                 break;
//         }
//         TQP += QP;
//         TLU += parseInt(unit[i].value);
//     }
//     var GPA = TQP/TLU;
//     document.querySelector('.currentGPA').value = GPA.toFixed(2);
//     // var CGPA = 
// })