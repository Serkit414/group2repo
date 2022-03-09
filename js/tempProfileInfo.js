function updateProfileInfo(event){
    
    //This will later be retrieved from the database and stored in a Profile class.
    let profileName = "John Smith";
    let profileAddress1 = "123 Orange Rd";
    let profileAddress2 = "456 Alphabet St";
    let profileCity = "Houston";
    let profileState = "TX";
    let profileZipcode = "77204";
    
    document.getElementById("profileName").textContent = profileName;
    document.getElementById("profileAddress1").textContent = profileAddress1;
    document.getElementById("profileAddress2").textContent = profileAddress2;
    document.getElementById("profileCity").textContent = profileCity;
    document.getElementById("profileState").textContent = profileState;
    document.getElementById("profileZipcode").textContent = profileZipcode;
}

window.addEventListener('load', updateProfileInfo);
