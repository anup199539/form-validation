


    function validate() {

        var username = document.getElementById('uname');
        var age = document.getElementById('Age');
        var datebirth = document.getElementById('DOB');
        var email = document.getElementById('Email');
        var mobile = document.getElementById('mob');

        if (username.value == "") {

            alert("blank are not allowed")
            return false
        } 
        
        

        if (age.value == "" ) {

            alert("blank are not allowed")
            return false
        } 
            
        


        if (datebirth.value == "") {
            alert("blank are not allowed")
            return false;
        } 
    
        


        if (email.value == "") {
            alert("blank are not allowed")
            return false;
        } 
        
        

        if (mobile.value == "") {
            alert("blank are not allowed")
            return false;
        } 

    }
    const x =["anup ", "ram","sita", "anuj"];
    x.filter();
    console.log(x);


  
    



