function addStu(){
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var password = $("#password").val();

}
$.ajax({
    url:'Student/addstudent.php',
    method:'POST',
    
    data:{
        stusignup: 'stusignup',
        stuname: stuname,
        stuemail: stuemail,
        password: password,
    },

    success:function(data){
        console.log(data)   
    }
})