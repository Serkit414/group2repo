function fillCurrentDate(){
    let currentDate = new Date();
    let dateString = currentDate.getFullYear() + "-";
       
    if (currentDate.getMonth()+1 < 10)
    {
        dateString += "0"+(currentDate.getMonth()+1) + "-";
    }
    else
    {
        dateString += (currentDate.getMonth()+1) + "-";
    }
    
    if ((currentDate.getDate()+2) < 10){
        dateString += "0"+(currentDate.getDate()+2);
    }
    else{
        dateString +=(currentDate.getDate()+2);
    }
    document.getElementById("DelDate").setAttribute("min", dateString);
  }

window.addEventListener('load', fillCurrentDate);
