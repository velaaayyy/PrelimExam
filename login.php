<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .login-container {
      width: 380px;
      padding: 40px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 10px;
      color: #333;
    }

    .login-container p {
      text-align: center;
      color: #777;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #444;
      font-weight: bold;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #667eea;
      box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      font-size: 14px;
    }

    .options a {
      color: #667eea;
      text-decoration: none;
    }

    .options a:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      padding: 13px;
      border: none;
      border-radius: 8px;
      background: #667eea;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #5568d8;
    }

    .signup {
      text-align: center;
      margin-top: 25px;
      color: #777;
      font-size: 14px;
    }

    .signup a {
      color: #667eea;
      text-decoration: none;
      font-weight: bold;
    }

    #message {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <h2>Welcome Back</h2>
    <p>Login to your account</p>

    <form id="loginForm">

      <div class="input-group">
        <label for="email">Email</label>
        <input
          type="email"
          id="email"
          placeholder="Enter your email"
          required
        >
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          placeholder="Enter your password"
          required
        >
      </div>

      <div class="options">
        <label>
          <input type="checkbox" id="remember">
          Remember me
        </label>

        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" class="login-btn">
        Login
      </button>

      <div id="message"></div>
    </form>

    <div class="signup">
      Don't have an account?
      <a href="#">Sign Up</a>
    </div>
  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      event.preventDefault();

      const email = document.getElementById("email").value;
      const password = document.getElementById("password").value;
      const message = document.getElementById("message");

      // Demo validation only
      if (email === "admin@example.com" && password === "123456") {
        message.style.color = "green";
        message.textContent = "Login successful!";
      } else {
        message.style.color = "red";
        message.textContent = "Invalid email or password.";
      }
    });
  </script>

</body>
</html>