require('./bootstrap');


import 'boxicons';
import { format } from 'date-fns';
import Headroom from "headroom.js";

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
