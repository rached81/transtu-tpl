<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

  <script>

    // Selecting the iframe element
    // var iframe = document.getElementById("myIframe");

    // // Adjusting the iframe height onload event
    // iframe.onload = function () {
    //   window.top = window;
    //   window.opener = window;
    //   iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
    // }

    // function resizeIframe(obj) {
    //   obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    // }

//       $('#zframe').hover(function () {
//         var iframe = document.getElementById("myIframe");
//         window.top=window;
// window.opener=window;
//         // Adjusting the iframe height onload event
//         // iframe.on = function(){
//             iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
//         // }

//       });

$('a.metro').click(function(){
  console.log("hover correct ! ")
  $('#metro').show()
});
$('a.metro').mouseout(function(){
  $('#metro').hide();
});

$('a.bus').click(function(){
  console.log("hover correct ! ")
  $('#bus').show()
});
$('a.bus').mouseout(function(){
  $('#bus').hide();
});

$('a.tgm').click(function(){
  console.log("hover correct ! ")
  // $('#metro').css("display", "block!important");
  // $('#metro').css("display", "block");
  $('#tgm').show()
});
$('a.tgm').mouseout(function(){
  $('#tgm').hide();
});
  </script>
</body>

</html>