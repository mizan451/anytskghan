$(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })

$('.toggle-class').on('change', function () {
    var status=$(this).prop('checked')==true ? 1 : 0;
    var user_id=$(this).data('id');
    $.ajax({
        type:'GET',
        dataType:'json',
        url:'route{{"changeStatus"}}',
        data:{ 'status': status, 'user_id': user_id },
        success: function (data) {
            $('.$message').html('<p class="alert alert-danger">'+data.success+'</p>')
        }
    })
})
