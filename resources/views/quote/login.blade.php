<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso - Propuesta Digital</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #0b4c5f 0%, #1a8fa3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 400px;
            width: 90%;
        }
        
        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .logo {
            width: 150px;
            height: 150px;
            background: url('/images/logo_dentalosoario.jpg') center/contain no-repeat;
            margin: 0 auto;
        }
        
        h2 {
            color: #0b4c5f;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            color: #555;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        input[type="password"]:focus {
            outline: none;
            border-color: #1a8fa3;
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        
        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #1a8fa3 0%, #0b4c5f 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(26, 143, 163, 0.4);
        }
        
        .info-text {
            text-align: center;
            color: #888;
            font-size: 0.9rem;
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <div class="logo"></div>
        </div>
        <h2>Propuesta Digital</h2>
        
        <form method="POST" action="{{ route('quote.authenticate') }}">
            @csrf
            <div class="form-group">
                <label for="password">Contraseña de acceso</label>
                <input type="password" name="password" id="password" required autofocus>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="submit-btn">Ingresar</button>
        </form>
        
        <div class="info-text">
            Ingrese la contraseña proporcionada para ver la propuesta
        </div>
    </div>
</body>
</html>