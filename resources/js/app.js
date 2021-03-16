require('./bootstrap');


import 'boxicons';
import { format } from 'date-fns';


//
if (!(document.getElementsByClassName("dataTime").length === 0)) {
    setInterval(() => {
        let time = format( new Date(), 'dd/MM/yyyy HH:mm:ss')
        document.getElementsByClassName("dataTime")[0].innerHTML = time;
        document.getElementsByClassName("dataTime")[1].innerHTML = time;
    }, 1000);
}
