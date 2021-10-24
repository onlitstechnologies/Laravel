<!doctype html>
<html lang="en">

<head>
    @include('includes.head')


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form>
            <img class="mb-4" src="images/iMOC.png" alt="" width="168" height="57">
            <h1 class="h3 mb-3 fw-normal">Verify OTP</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="otp" id="otp" placeholder="OTP">
                <label for="otp">OTP</label>
            </div>
            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Verify</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>



</body>

</html>