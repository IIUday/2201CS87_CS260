function fetchemp(){
    var id=document.getElementById("email").value;
    s.ajax({
        url:"fetchEmployee.php",
        method: "POST",
        data:{
            x : id
        },
        dataType: "JSON",
        success: function(data){
            console.log(data.firstname);
            document.getElementById("fname").value = data.firstname;
        }

    });
}

fetchemp();