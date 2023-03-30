const day = document.querySelectorAll('.day');

// Change the date to day of the week
window.addEventListener('load', (e) => {
    Array.from(day).forEach((el) => {
        var d = new Date(el.textContent);
        d = d.getDay();
        var week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        el.textContent = "(" + week[d] + ")";
    })
})

// set the status of each scheduled lecture
var second = document.querySelectorAll('.time');
var startTime = document.querySelectorAll('.startTime');
var endTime = document.querySelectorAll('.endTime');
function currentTime(){
    var date = new Date()
    for(let i=0; i<second.length; i++){
        var currentHour = date.getHours();
        var currentMinute = date.getMinutes();

        var start = startTime[i].textContent.split(':');
        var end = endTime[i].textContent.split(':');

        if((currentHour >= start[0] && currentMinute >= start[1]) && ((currentHour == end[0] && currentMinute < end[1]) || currentHour < end[0])){
            second[i].textContent = 'Ongoing';
        }
        if((currentHour == end[0] && currentMinute >= end[1]) || currentHour > end[0]){
            second[i].textContent = 'Completed';
        }
        if((currentHour == start[0] && currentMinute < start[1]) || currentHour < start[0]){
            second[i].textContent = 'Upcoming';
        }
    }
}

setInterval(currentTime, 1000);


function ongoing() {
    for(let i=0; i<second.length; i++){
        if(second[i].textContent == 'Ongoing'){
            console.log('red');
            setTimeout(changeColor, 1000)
        }
    }
}

function changeColor(){
    for(let i=0; i<second.length; i++){
        second[i].textContent.style.color = 'red';
    }
}

setInterval(ongoing, 1000);