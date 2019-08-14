function load(){
    one('no').style.visibility='hidden'
    one('ne').style.visibility='hidden'
}
function one(x){
    return document.getElementById(x); }

function check(){
    var reg= document.getElementById('vcnum').value
    var date=document.getElementById('date').value
    if (reg=='kl 51 E 322' && date=='2019-09-01'){
        alert('alreday booked')}
        if (reg=='kl 48 H 1212' && date=='2019-09-01'){
            alert('alreday booked')}
            if (reg=='kl 51 E 322' && date=='2019-09-01'){
                alert('alreday booked')}
                if (reg=='kl 51 E 322' && date=='2019-09-01'){
                    alert('alreday booked')}
    else{
        one('no').style.visibility='visible'
        one('ne').style.visibility='visible'
    }                
    // alert('Successfully booked'+reg+'for date'+date)
}