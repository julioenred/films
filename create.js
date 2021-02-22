
// lo hemos trabajado en conjunto // 
    function validate(){
      var name = document.getElementById("name").value;
      console.log(name);
  
      if (name == '') {
        alert('No puedes dejar vacío los campos');
        return false;
      }
    }
