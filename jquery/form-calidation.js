$(function(){
  $("form[name='agregar']").validate({
    rules: {
      name: {
        required: true,
        minlength: 4,
        maxlength: 12
      }
      price: {
        required: true,
        minlength: 1,
        maxlength: 6,
        number: true,
        digits: true
      }
    },
    messages: {
      name: "Please enter avalid name between 4 and 12 characters",
      price: "Please enter a valid price between 1 and 6 characters"
    }

  });
});
