(function($) {

  $(document).ready(function() {


    if($("#acf-field_614152be36a37").length) {

      if($("#acf-field_614152be36a37").val().length < 11){
        $("#acf-field_614152be36a37").mask("999.999.999-99");
      } else {
        $("#acf-field_614152be36a37").mask("99.999.999/9999-99");
      }
    }


    $("#acf-field_614152be36a37").keydown(function(){
      try {
          $("#acf-field_614152be36a37").unmask();
      } catch (e) {}

      var tamanho = $("#acf-field_614152be36a37").val().length;

      if(tamanho < 11){
          $("#acf-field_614152be36a37").mask("999.999.999-99");
      } else {
          $("#acf-field_614152be36a37").mask("99.999.999/9999-99");
      }

      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

    $("#acf-field_614153d536a3b").keydown(function(){
      try {
          $("#acf-field_614153d536a3b").unmask();
      } catch (e) {}

      var tamanho = $("#acf-field_614153d536a3b").val().length;
      console.log(tamanho);

      if(tamanho < 10){
          $("#acf-field_614153d536a3b").mask("(99) 9999-9999");
      } else {
          $("#acf-field_614153d536a3b").mask("(99) 99999-9999");
      }

      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

    $("#acf-field_6141540336a3c").keydown(function(){
      try {
          $("#acf-field_6141540336a3c").unmask();
      } catch (e) {}

      var tamanho = $("#acf-field_6141540336a3c").val().length;

      if(tamanho < 10){
          $("#acf-field_6141540336a3c").mask("(99) 9999-9999");
      } else {
          $("#acf-field_6141540336a3c").mask("(99) 99999-9999");
      }

      // ajustando foco
      var elem = this;
      setTimeout(function(){
          // mudo a posição do seletor
          elem.selectionStart = elem.selectionEnd = 10000;
      }, 0);
      // reaplico o valor para mudar o foco
      var currentValue = $(this).val();
      $(this).val('');
      $(this).val(currentValue);
    });

  });

})( jQuery );