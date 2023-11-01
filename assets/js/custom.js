jQuery(function($) {    
    $('body').on('change', '#file', function() {
        $this = $(this);
        file_obj = $this.prop('files');
        form_data = new FormData();
        for(i=0; i<file_obj.length; i++) {
            form_data.append('file[]', file_obj[i]);
        }
        form_data.append('action', 'file_upload');
        form_data.append('security', blog.security);
  
        $.ajax({
            url: blog.ajaxurl,
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            success: function (response) {
                console.log(response);
                $("#filepath").val(response);
                //$this.val('');
                //alert('File(s) uploaded successfully.');
            }
        });
    });
});