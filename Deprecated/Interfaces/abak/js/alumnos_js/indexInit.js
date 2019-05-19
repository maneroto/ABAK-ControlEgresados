$(document).ready(function() 
{
    $('#loginform').submit(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url: 'php/loginVal.php',
            data: $(this).serialize(),
            success: function(data)
            {
                if (data == 'Login') 
                {
                    window.location = 'views/alumnos/form.php';
                }
                else 
                {
                    alert(data);
                }
            }
        });
    });
});