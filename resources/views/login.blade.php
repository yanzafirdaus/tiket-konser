<!DOCTYPE html>
<html>
    <title>Login Admin/Agen X</title>
    <head></head>
    <body>
        <div>
            <form id="form" method="POST" action="/sign-in">
                @csrf
                <h2>Login</h2>
                <div>
                    <label>User Name</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <br>
                <div>
                    <label>password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>