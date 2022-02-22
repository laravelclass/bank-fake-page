import {init} from "./customModule.js";
if (document.getElementById('payfrm'))
{
    document.getElementById('payfrm').addEventListener('submit',function (e){
        e.preventDefault();
    })
}
init()
