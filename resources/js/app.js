require('./bootstrap');


import 'boxicons';
import { format } from 'date-fns';
import Headroom from "headroom.js";
import Chart from 'chart.js';
import { Notyf } from 'notyf';
Chart.platform.disableCSSInjection = true;


// Timer
if (!(document.getElementsByClassName("dataTime").length === 0)) {
    setInterval(() => {
        let time = format( new Date(), 'dd/MM/yyyy HH:mm:ss')
        document.getElementsByClassName("dataTime")[0].innerHTML = time;
        document.getElementsByClassName("dataTime")[1].innerHTML = time;
    }, 1000);
}


// select your header or whatever element you wish
const header = document.getElementById("header");

const headroom = new Headroom(header);
headroom.init();



var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});