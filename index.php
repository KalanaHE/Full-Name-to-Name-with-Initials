<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SL_REG_FORM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <div class="container text-center"><br>
        <h4 class="text-uppercase" data-bs-hover-animate="rubberBand">Register Form Most Useful Attributes&nbsp;</h4>
        <hr>
        <div class="form-group">
            <form>
                <div class="form-row">
                    <div class="col"><label>Full name</label><input class="form-control" type="text" id="fname"></div>
                    <div class="col"><label>Name with initials</label><input class="form-control" type="text" id="nameini"></div>
                </div>
            </form>
            </div>
        <div class="alert alert-warning" role="alert">
            This simple function is extracted from a project i did and, the function is written in PHP (Used AJAX for passing data). I will provide the equilavant JS function in future.
        </div>
        <div class="alert alert-info" role="alert">

            Simply while you typing the full name in the input field, this PHP script generates the Name with initials field. <hr>
            Most suitable for Sri Lankan digital register forms. <hr>
            © Kalana Hettiarachchi <br>
            <a href="https://www.linkedin.com/in/kalanahe/">https://www.linkedin.com/in/kalanahe/</a>

        </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    
    <!--  -->
        <script type="text/javascript">

                   $('#fname').keyup(function() {
                    var fname = $('#fname').val();
                    $.ajax({
                      type: "POST",
                      url: "fnametonwi.php",
                      data:{fname:fname},
                      success: function(data) {
                        $("#nameini").val(data)
                      }
                    });
                  });

        </script>
    <!--  -->

</body>

</html>
