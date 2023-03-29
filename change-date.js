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