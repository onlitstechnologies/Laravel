<!doctype html>
<html lang="en">

<head>
    @include('includes.head')


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="/configure_admin" method="POST">
            @csrf
            <img class="mb-4" src="images/iMOC.png" alt="" width="168" height="57">
            <h1 class="h3 mb-3 fw-normal">Admin Configuration</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="ido" id="ido" placeholder="IDO">
                <label for="ido">IDO</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>



</body>

</html>