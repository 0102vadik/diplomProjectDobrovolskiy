$('.custom-image-upload input[type=file]').on('change', function(){
    let file = this.files[0];
    $(this).closest('.custom-image-upload').find('.custom-image-upload-text').html(file.name);
});
