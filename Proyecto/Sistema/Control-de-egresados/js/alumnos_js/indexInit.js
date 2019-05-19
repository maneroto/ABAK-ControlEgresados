$(document).ready(function() 
{
    $('#loginform').submit(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url: '../../php/loginVal',
            data: $(this).serialize(),
            success: function(data)
            {
                if (data == "Login") 
                {
                    window.location = 'form';
                }
                else 
                {
                    alert(data);
                }
            }
        });
    });
});