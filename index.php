<!DOCTYPE html>
<html>
<head>
  <title>Nicholas Carpenter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/socializer.css">
  <link rel="stylesheet" type="text/css" href="css/socializer.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>
  <script type="text/javascript">
    $(function() {
      $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function() {
        $('.navbar-toggle:visible').click();
      });
    });
    $(function() {
      $(window).scroll(function() {
        var top_of_element = $("#Home").offset().top;
        var bottom_of_element = $("#Home").offset().top + $("#Home").outerHeight();
        var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
          $('.navbar').removeClass('f-nav');
          $('.bg-2').removeClass('nav-container2');

        } else {

          $('.navbar').addClass('f-nav');
          $('.bg-2').addClass('nav-container2');

        }


      });
    });

    AOS.init({
      duration: 800,
    });
    window.onload = function() {

      var aHome = document.getElementById("HomeLink");

      aHome.onclick = function(e) {

        e.preventDefault();
        $('html, body').animate({
          scrollTop: $("#Home").offset().top
        }, 2900);
      }

      var aPerson = document.getElementById("WhoAmILink");

//Set code to run when the link is clicked
// by assigning a function to "onclick"
aPerson.onclick = function() {

  $('html, body').animate({
    scrollTop: $("#WhoAmI").offset().top - ($('.navbar').height())
  }, 2900);

}


var aProject = document.getElementById("CurrentProjectLink");

//Set code to run when the link is clicked
// by assigning a function to "onclick"
aProject.onclick = function() {

  $('html, body').animate({
    scrollTop: $("#CurrentProjects").offset().top - ($('.navbar').height())
  }, 2900);

}

var aContact = document.getElementById("ContactLink");

aContact.onclick = function(e) {

  e.preventDefault();
  $('html, body').animate({
    scrollTop: $("#Contact").offset().top
  }, 4000);

}


var aContact = document.getElementById("FinishedProjectLink");

aContact.onclick = function(e) {

  e.preventDefault();
  $('html, body').animate({
    scrollTop: $("#FinishedProjects").offset().top - ($('.navbar').height())
  }, 2900);

}
}
</script>
<?php include '_layouts/header.php' ?> 

<div id="WhoAmI">
  <div  data-aos="fade-up" class="container-fluid bg-2 text-center" >
    <h3>Who Am i?</h3>
    <p style="margin-bottom:100px;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas lectus et dolor maximus, eget tempor massa vestibulum. Nullam at magna quis enim scelerisque consequat eget ut arcu. In aliquam tellus tellus, viverra aliquet felis ornare eget. Ut vitae sodales lacus, id consectetur elit. Curabitur molestie sagittis quam, in tincidunt est dictum eu. Fusce faucibus, mi eu euismod convallis, turpis augue tempus dolor, ac vehicula ex odio ut libero. Nullam elit ligula, aliquam nec nulla et, pulvinar lacinia libero. Integer orci arcu, dapibus sit amet lorem id, tempus egestas nisl. Integer sodales condimentum ligula, vel dignissim orci fringilla sed. Nam a fringilla nunc. Nunc ut gravida libero. Praesent consequat dignissim fringilla.

      Sed id scelerisque quam. Fusce vel posuere ex. Sed scelerisque eros nec dui accumsan lacinia. Ut metus eros, ultricies in ligula vel, porttitor lacinia quam. Vestibulum non velit lectus. Mauris eu consectetur purus. Cras vel augue id odio iaculis tempor. Suspendisse vel vehicula neque. Donec ultrices ipsum id massa euismod, vitae pulvinar leo rutrum. Suspendisse potenti. Sed varius porta porta. Mauris quis laoreet diam. Nunc egestas purus quis ex aliquam fermentum. Nunc vehicula urna ipsum, eu eleifend purus mollis eu. Curabitur vel consequat felis. Sed tincidunt ante urna, et commodo elit pulvinar quis.

      Curabitur consectetur rhoncus sollicitudin. Nam convallis condimentum libero, quis vestibulum enim tincidunt ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin at erat nec eros feugiat pharetra eget id tortor. Maecenas quis dolor a libero rhoncus ultrices sed sed arcu. Quisque in mi orci. Donec aliquam mauris non iaculis tincidunt. Phasellus felis velit, ornare in mattis nec, finibus sed urna.

      Donec et sem ante. Cras egestas elementum pellentesque. Vivamus non libero hendrerit, malesuada justo id, placerat nisi. Donec feugiat facilisis neque id luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu scelerisque lorem, at scelerisque lacus. Nunc congue magna id nunc lacinia volutpat. Vivamus gravida arcu vitae finibus consequat. Vestibulum rutrum, dolor eget tempor pretium, dolor nibh vestibulum ex, quis varius orci ligula a purus. Cras sed pharetra augue, eu fermentum dolor. Maecenas id sapien justo. Nullam nisi tortor, sodales vitae convallis vitae, tincidunt sit amet leo. Fusce accumsan imperdiet nunc, sit amet porta orci.

    Curabitur massa dui, vestibulum quis neque sit amet, posuere finibus metus. Fusce vitae congue enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec tincidunt ante, quis fermentum felis. Fusce quis rutrum purus. Proin id nulla sed tellus rhoncus ultricies. Nulla sollicitudin ipsum sit amet bibendum sollicitudin. Nullam risus lorem, accumsan eget diam et, mattis laoreet eros.</p>
  </div>
</div>
<?php include '_layouts/projects.php' ?> 
<div id="Contact">
  <div data-aos="fade-up" class="container-fluid bg-3 text-center">
    <h3>How to contact me?</h3>
    <div class="row">
      <div class="col-sm-4">
        <p>Lorem ipsum..</p>
        <img src="birds1.jpg" alt="Image">
      </div>
      <div class="col-sm-4">
        <p>Lorem ipsum..</p>
        <img src="birds2.jpg" alt="Image">
      </div>
      <div class="col-sm-4">
        <p>Lorem ipsum..</p>
        <img src="birds3.jpg" alt="Image">
      </div>
    </div>
  </div>
</div>
</body>
<?php include '_layouts/footer.php' ?> 

</html>