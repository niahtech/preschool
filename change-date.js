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
var second = document.querySelectorAll('.status');
var startTime = document.querySelectorAll('.startTime');
var endTime = document.querySelectorAll('.endTime');
function currentTime() {
    var date = new Date()
    for (let i = 0; i < second.length; i++) {
        var currentHour = date.getHours();
        var currentMinute = date.getMinutes();

        var start = startTime[i].textContent.split(':');
        var end = endTime[i].textContent.split(':');

        if ((currentHour >= start[0] && currentMinute >= start[1] || currentMinute < start[1]) && ((currentHour == end[0] && currentMinute < end[1]) || currentHour < end[0])) {
            second[i].textContent = 'Ongoing';
        }
        if ((currentHour == end[0] && currentMinute >= end[1]) || currentHour > end[0]) {
            second[i].textContent = 'Completed';
            second[i].dataset['status'] = 'Completed';
            second[i].style.color = 'green';
        }
        if ((currentHour == start[0] && currentMinute < start[1]) || currentHour < start[0]) {
            second[i].textContent = 'Upcoming';
            second[i].style.color = 'red';
        }
    }
}

setInterval(currentTime, 1000);

// change the color of ongoing status
var colors = ["yellow", "blue"];
var currentColor = 0;
function ongoing() {
    --currentColor;
    if (currentColor < 0) currentColor = colors.length - 1;
    for (let i = 0; i < second.length; i++) {
        if (second[i].textContent == 'Ongoing') {
            second[i].style.color = colors[(currentColor + i) % colors.length]
        }
    }
}

setInterval(ongoing, 1000);


// calculate the number of completed classes

var comp = 0;
document.querySelector('.completed').textContent = comp;
document.querySelector('.complete').textContent = comp;

const interval = setInterval(() => {
    let secs = [...document.querySelectorAll("td>a.status")];
    secs.forEach((el) => {
        if (el.dataset['status'] == 'Completed') {
            // setting the completed class and lessons
            comp++;
            document.querySelector('.completed').textContent = comp;
            document.querySelector('.complete').textContent = comp;

            
            // working on the progress bar
            var progress = document.querySelector('.completed').textContent / document.querySelector(".totalClass").textContent * 100;

            document.querySelector(".prog").dataset["percent"] = progress;
            document.querySelector(".perc").textContent = progress.toFixed(1) + '%';
            if ($('.circle-bar').length > 0) {
                $(document).find($('.circle-bar1')).each(function () {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var percent = $(this).find('.circle-graph1').attr('data-percent');
                    var animate = $(this).data('animate');
                    if (elementPos < topOfWindow + $(window).height() - 30) {
                        $(this).data('animate', true);
                        $(this).find('.circle-graph1').circleProgress({
                            value: percent / 100,
                            size: 400,
                            thickness: 30,
                            fill: {
                                color: '#6e6bfa'
                            }
                        });
                    }

                });
            }
            clearInterval(interval)
        }
    })
}, 100)

// Calculating the total hours of the daily scheduled class
var hour = 0;
var minutes = [...document.querySelectorAll(".minutes")];
var hours = setInterval(() => {
    minutes.forEach((el) => {
        hour += parseInt(el.textContent);
    })
    document.querySelector(".totalHours").textContent = (hour/60).toFixed(1)
    
    // working on the completed hours
    var date = new Date();
    var completedHour = 0;
    for(let i=0; i<endTime.length; i++){
        var end = endTime[i].textContent.split(':');
        if((date.getHours() == end[0] && date.getMinutes() >= end[1]) || date.getHours() > end[0]){
            completedHour += parseInt(minutes[i].textContent);
        }
    }
    document.querySelector(".completedHour").textContent = (completedHour/60).toFixed(1);


    clearInterval(hours);
}, 100);