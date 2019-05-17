$(document).ready(function()
{
    updateAdmins();
});

function updateAdmins()
{
    $.ajax(
       {
          type: "GET",
          url: '../php/verAdministradores',
          success: function(data)
          {
              $('#administradores').html(data);
              initBtnDelete();
          }
       });
}

function initBtnDelete()
{
    var deleteButtons = document.querySelectorAll('.btnDelete');
    console.log(deleteButtons);
    for(let i = 0; i < deleteButtons.length; i ++)
    {
        deleteButtons[i].addEventListener('click', function()
        {
            let todelete = {nombre: this.dataset.nombre, idusuario: this.dataset.idusuario};
            deleteAdmin(todelete);
        });
    }
}

function deleteAdmin(todelete)
{
    if(confirm("Seguro que deseas eliminar a " + todelete['nombre']))
    {
        $.ajax({
            url: '../php/eliminarAdmin',
            type: 'POST',
            data: {idusuario: todelete['idusuario']},
            success: function(data)
            {
                updateAdmins();
                alert(data);
            }
        });
    }
}