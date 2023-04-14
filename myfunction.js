var Remark = document.querySelectorAll('.Remark');
var score = document.querySelectorAll('.score');
var GPA = document.querySelector('.GPA');
var unit = document.querySelectorAll('.unit');
var sum = 0;

// for(let i=0; i<score.length; i++){
//     score[i].addEventListener('load', (e) => {
//         result();
//     })
// }


window.addEventListener('load', (e) => {
  grading_system();
})
window.addEventListener('load', (e) => {
 calculateGPA();
  })
function grading_system() {
  for (let i = 0; i < Remark.length; i++) {
    let value = score[i].value;
    if (score[i].value !== 0) {
      switch (true) {
        case value < 45:
          Remark[i].value = 'F';
          break;
        case value < 50:
          Remark[i].value = 'D';
          break;
        case value < 60:
          Remark[i].value = 'C';
          break;
        case value < 70:
          Remark[i].value = 'B';
          break;
        case value < 100:
          Remark[i].value = 'A';
          break;
        default:
          alert('Cannot more be than 100')
          break;
      }
    }
    else {
      Remark[i].value = '';
    }
  }
}

// function calculateGPA($grades) {
//   //calculate grade sum and count
//   $sum = 0;
//   $count = 0;
//   foreach($grades as  ){
//     $sum += $grade;
//     $count++;
//     //calculate GPA
//     $gpa = $sum / $count;
//     //round to decimal points
//     $gpa = round($gpa, 2);
//     return $gpa;
//   }


// }
function calculateGPA() {
  var TQP = 0, TLU = 0, QP;
 
  for (let i = 0; i < Remark.length; i++) {
    switch (Remark[i].value) {
      case 'F':
        QP = parseInt(unit[i].value) * 0;
        break;
      case 'D':
        QP = parseInt(unit[i].value) * 2;
        break;
      case 'C':
        QP = parseInt(unit[i].value) * 3;
        break;
      case 'B':
        QP = parseInt(unit[i].value) * 4;
        break;
      case 'A':
        QP = parseInt(unit[i].value) * 5;
        break;
    }
    TQP += QP;
    TLU += parseInt(unit[i].value);
  }
  var GPA = TQP / TLU;
  // document.querySelector('.GPA').value = GPA.toFixed(2);
   

}








