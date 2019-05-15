$(function(){

  $("form[name='formulario']").validate({

    rules: {
      product: "required",
      price: "required"
    },
    messages: {
      product: "Please enter your product",
      price: "Please enter your product"
    },
    submitHandler: function(form){
      form.submit();
    }
  });
});
