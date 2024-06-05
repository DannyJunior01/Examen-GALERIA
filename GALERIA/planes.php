<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes de Suscripción</title>
    <link rel="stylesheet" type="text/css" href="csss.css">

</head>
<body>
<div class="regresar">
    <a href="index.php" class="btn-regresar">Regresar al inicio</a>
</div>

    <section id="planes" class="planes">
        <div class="plan">
            <h2>Plan Básico</h2>
            <p>$9.99/mes</p>
            <ul>
                <li>Acceso limitado</li>
                <li>Soporte por correo</li>
                <li>1 usuario</li>
            </ul>
            <a href="simular_pago.php" class="btn">Suscribirse</a>
        </div>
        <div class="plan">
            <h2>Plan Estándar</h2>
            <p>$19.99/mes</p>
            <ul>
                <li>Acceso completo</li>
                <li>Soporte prioritario</li>
                <li>3 usuarios</li>
            </ul>
            <a href="simular_pago.php" class="btn">Suscribirse</a>
        </div>
        <div class="plan">
            <h2>Plan Premium</h2>
            <p>$29.99/mes</p>
            <ul>
                <li>Acceso completo</li>
                <li>Soporte dedicado</li>
                <li>Usuarios ilimitados</li>
            </ul>
            <a href="simular_pago.php" class="btn">Suscribirse</a>
        </div>
    </section>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    
</body>
</html>
