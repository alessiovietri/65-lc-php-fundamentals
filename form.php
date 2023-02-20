<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>
        
        <h1>
            Login
        </h1>

        <form action="./checklogin.php" method="POST">
            <div>
                <label for="email-input">
                    Email
                </label>
                <input type="text" name="email" id="email-input">
            </div>
            
            <div>
                <label for="password-input">
                    Password
                </label>
                <input type="password" name="password" id="password-input">
            </div>

            <button>
                Login
            </button>
        </form>

    </body>
</html>