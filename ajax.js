$('form.ajax').on('submit', function(){
    var frm = $(this),
        url = frm.attr('action'),
        type = frm.attr('method'),
        data = {};
    
    frm.find('[name]').each(function(index, value){
        var input = $(this),
            name = input.attr('name'),
            value = input.val();
        
        data[name] = value;
    });
    
    $.ajax({
       url: url,
        type: type,
        data: data,
        success: function(response){
           $('#msg').html(data).fadeIn('slow');
           $('#msg').html(response).fadeIn('slow') //also show a success message 
           $('#msg').delay(5000).fadeOut('slow');
        }
        
    });
    
    frm[0].reset();
    
    return false;
});