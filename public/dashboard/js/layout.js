function showMessage(message)
{
  
    
    toastr.success(message, {
      timeOut: "50000"
    });
}

function showError(errors)
{
    for (var i in errors)
    {
        
        toastr.success(errors[i], {
          timeOut: "50000"
        });
        
    }
}
