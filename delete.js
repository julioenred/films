// lo hemos trabajado en conjunto // 

function validate(){
    var id = document.getElementById("id").value;
    console.log(id);

    if (id == '') {
      alert('No puedes dejar vacío los campos');
      return false;
    }
  }
