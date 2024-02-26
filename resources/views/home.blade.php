<div style="text-align: center; background-color: #00FF00; color: #000; width: 400px; padding: 30px; border-radius: 10px; margin: 0 auto; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="font-size: 32px; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Google User Login</h1>
    <h2 style="font-size: 28px; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Welcome to the Home Page</h2>
    <h3 style="font-size: 24px; margin-bottom: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Welcome {{ Auth::user()->name }}</h3>
    <p style="font-size: 18px; margin-bottom: 30px;">Your Email for this Account is: {{ Auth::user()->email }}</p>
</div>
