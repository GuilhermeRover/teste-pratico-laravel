require('./bootstrap');


import 'boxicons';
import { format } from 'date-fns';


//
 setInterval(() => {
    let time = format( new Date(), 'MM/dd/yyyy HH:mm:ss')
    document.getElementsByClassName("dataTime")[0].innerHTML = time;
    document.getElementsByClassName("dataTime")[1].innerHTML = time;
}, 1000);