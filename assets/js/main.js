(function ($) {
  $("#activity_form").on("submit", function (event) {
    event.preventDefault();

    if ($("#activity_name").val() == "") {
      $("#message").html(
        '<div class="alert alert-danger">Enter Activity Details</div>'
      );
      return false;
    } else {
      $("#submit").attr("disabled", "disabled");
      $.ajax({
        url: "models/Insert.php",
        method: "POST",
        data: $(this).serialize(),
        success: function (data) {
          $("#submit").attr("disabled", false);
          $("#activity_form")[0].reset();
          $(".list-group").prepend(data);
        },
      });
    }
  });


  $(document).on('click', '.list-group-item',function(){
    var activity_id = $(this).data('id');
    $.ajax({
     url:"models/Update.php",
     method:"POST",
     data:{activity_id:activity_id},
     success:function(data)
     {
      $('#list-group-item-'+activity_id).css('text-decoration', 'line-through');
     }
    })
   });

   $(document).on('click', '.badge', function(){
    var activity_id = $(this).data('id');
    $.ajax({
     url:"models/Delete.php",
     method:"POST",
     data:{activity_id:activity_id},
     success:function(data)
     {
      $('#list-group-item-'+activity_id).fadeOut('slow');
     }
    })
   });

})(jQuery);
