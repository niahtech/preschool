var Remark=document.querySelectorAll('.Remark');
var score = document.querySelectorAll('.score');
window.addEventListener('load', (e) => {
  grading_system();
})

function grading_system(){
 for (let i = 0; i< Remark.length; i++) {
       let value  = score[i].value;
        if(score[i].value !==0){
            switch (true) {
              case value <45:
                Remark[i].value='F';
                break;
              case value <50:
                Remark[i].value='D';
                break;
              case value <60:
                Remark[i].value='c';
                break;
              case value <70:
                Remark[i].value='B';
                break;
              case value <100:
                Remark[i].value='A';
                break;
              default:
                alert('Cannot more be than 100')
                break;
            }
        }
        else{
         Remark[i].value='';
        }
    }
}








