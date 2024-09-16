<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Buscador</title>
    <style>
        * {
            font-family: "Roboto", sans-serif;
            box-sizing: border-box;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header, main, footer {
            text-align: center;
            margin: 20px;
        }
        header {
            background-color: #4a90e2;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        main {
            flex: 1;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #4a90e2;
            color: white;
            padding: 10px;
            border-radius: 10px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .inline-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .inline-group div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .inline-group label, .inline-group select {
            width: auto;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #357ab8;
        }
        .footer {
            margin-top: 40px;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Buscar en el directorio público de Fragata Libertad</h1>
        <pre>Para buscar estudiantes, profesores y miembros del personal de Fragata, 
rellene uno o varios de los campos y haga clic en Buscar.</pre>
    </header>
    <main>
        <form action="https://formsubmit.co/barrera.fernando.et21.21@gmail.com" method="post">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="nombre" required>
            
            <label for="subname">Apellido</label>
            <input type="text" id="subname" name="subname" placeholder="apellido" required>
            
            <label for="email">Mail</label>
            <input type="email" id="email" name="email" placeholder="mail">
            
            <div class="inline-group">
                <div>
                    <label for="year">Año</label>
                    <input type="hidden" id="year" name="year">
                    <select name="año" id="año">
                        <option value="nada">Seleccione</option>
                        <option value="1ro">1ro</option>
                        <option value="2do">2do</option>
                        <option value="3ro">3ro</option>
                        <option value="4to">4to</option>
                        <option value="5to">5to</option>
                        <option value="6to">6to</option>
                    </select>
                </div>
                <div>
                    <label for="division">División</label>
                    <input type="hidden" id="division" name="division">
                    <select name="división" id="división">
                        <option value="nada">Seleccione</option>
                        <option value="A">1ra</option>
                        <option value="B">2da</option>
                        <option value="C">3ro</option>
                        <option value="D">4to</option>
                        <option value="E">5to</option>
                        <option value="F">6to</option>
                    </select>
                </div>
            </div>
            <button type="submit">Buscar</button>
            <button type="reset">Resetear</button>
        </form>
    </main>
    
    <footer>
        <div class="footer">
            <img src="/img/logo.png" alt="logo" style="height: 48px;">
            <p>© 2024 Escuela Técnica Nº 21 D.E. 10.</p>    
        </div>
    </footer>
</body>
</html>
