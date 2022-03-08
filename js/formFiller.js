function updateFormInfo(event){
    
    //This will later be retrieved from the database and stored in a Profile class.
    let profileAddress = "123 Orange Rd, Houston, TX 77204"; 
    
    document.getElementById("profileAddress").textContent = profileAddress;
    
    
}


window.addEventListener('load', updateFormInfo);
