<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Monad Public School</title>
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="./style/landing.css">
    <link rel="stylesheet" href="./style/facility.css">
    <link rel="stylesheet" href="./style/why.css">
    <link rel="stylesheet" href="./style/khoj.css">
    <link rel="stylesheet" href="./style/result.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <?php require "./component/navbar.php";?>
    <?php require "./pageSection/landing.php";?>
    <?php require "./pageSection/facility.php";?>
    <?php require "./pageSection/why.php";?>
    <?php require "./pageSection/Khoj.php";?>
    <?php require "./pageSection/result.php";?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type",{
            strings : ["Monad Public School","Monad Family","The Educational Hub"],
            typeSpeed : 150,
            backSpeed : 150,
            loop : true,
        })
        var typed = new Typed(".auto-intro",{
            strings : ["Monad Public School"],
            typeSpeed : 150,
            backSpeed : 150,
            loop : true,
        })
    
        
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({

            offset: 200, // offset (in px) from the original trigger point
            duration: 1500, // values from 0 to 3000, with step 50ms
        });

    </script>
</body>

</html>