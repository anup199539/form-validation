<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="anup.css">   
    
    <title>Document</title>

</head>
<!--
<body>
    
    <form action="thanks.html" onsubmit=" return validate()">
        FullName: <input id="uname" type="text" placeholder="fullName"> <br> <br>
        EmailId: <input id="Email" type="email" placeholder="emailId"> <br> <br>
        Age: <input id="Age" type="number" placeholder="age" max="27" min="1"> <br> <br>
        Mobile: <input id="mob" type="text" placeholder="mobile " -mo> <br> <br>
        DOB: <input id="DOB" type="date" placeholder="date of birth"> <br> <br>
        <button type="submit">submit</button>
    </form>                        -->

   <div class="div1">
          

   </div>


</body>
<script src="anup.js">
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

</script>



</html>
