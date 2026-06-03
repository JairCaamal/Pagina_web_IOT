<?php

use yii\bootstrap5\Alert;

$this->title = 'Safe Drive';
?>

<style>
.hero-section{
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: white;
    border-radius: 20px;
    padding: 80px 40px;
    text-align: center;
    margin-bottom: 50px;
    box-shadow: 0 10px 30px rgba(0,0,0,.15);
}

.hero-section h1{
    font-size: 3.5rem;
    font-weight: bold;
}

.hero-section p{
    font-size: 1.2rem;
    opacity: .9;
}

.feature-card{
    border: none;
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    transition: all .3s ease;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    background: white;
}

.feature-card:hover{
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,.15);
}

.feature-icon{
    font-size: 50px;
    margin-bottom: 20px;
}

.stats-section{
    margin-top: 60px;
    padding: 40px;
    background: #f8f9fa;
    border-radius: 20px;
}

.stat{
    text-align: center;
}

.stat h2{
    color: #0d6efd;
    font-weight: bold;
}

body{
    background-color: #f4f6f9;
}
</style>

<div class="site-index">

    <!-- HERO -->
    <div class="hero-section">
        <h1>🚗 Safe Drive</h1>

        <p>
            Plataforma inteligente de monitoreo vehicular basada en tecnología IoT.
            Protegemos conductores y vehículos mediante sensores inteligentes,
            alertas en tiempo real y monitoreo continuo.
        </p>

        <div class="mt-4">
            <a href="#servicios" class="btn btn-light btn-lg me-2">
                Conocer Más
            </a>

            <a href="/Pagina_web_IOT/backend/web" class="btn btn-outline-light btn-lg">
                Acceso Administrativo
            </a>
        </div>
    </div>

    <!-- MENSAJE -->
    <div class="container mb-4">
        <?= Alert::widget([
            'options' => ['class' => 'alert-primary'],
            'body' => 'Safe Drive permite monitorear vehículos y conductores en tiempo real mediante sensores IoT, GPS y alertas inteligentes.'
        ]) ?>
    </div>

    <!-- SERVICIOS -->
    <div class="container" id="servicios">

        <h2 class="text-center mb-5">Nuestros Servicios</h2>

        <div class="row">

            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">📡</div>
                    <h4>Monitoreo en Tiempo Real</h4>

                    <p>
                        Supervisión continua de vehículos y conductores mediante sensores inteligentes.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">⚠️</div>
                    <h4>Alertas Inteligentes</h4>

                    <p>
                        Detección automática de eventos de riesgo para mejorar la seguridad vial.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">📍</div>
                    <h4>Geolocalización GPS</h4>

                    <p>
                        Seguimiento preciso de vehículos y rutas en tiempo real.
                    </p>
                </div>
            </div>

        </div>

    </div>

    <!-- BENEFICIOS -->
    <div class="container stats-section">

        <h2 class="text-center mb-5">¿Por qué elegir Safe Drive?</h2>

        <div class="row">

            <div class="col-md-3 stat">
                <h2>24/7</h2>
                <p>Monitoreo Permanente</p>
            </div>

            <div class="col-md-3 stat">
                <h2>100%</h2>
                <p>Control de Eventos</p>
            </div>

            <div class="col-md-3 stat">
                <h2>IoT</h2>
                <p>Tecnología Inteligente</p>
            </div>

            <div class="col-md-3 stat">
                <h2>GPS</h2>
                <p>Ubicación Precisa</p>
            </div>

        </div>

    </div>

    <!-- ACERCA DE -->
    <div class="container mt-5">

        <div class="card shadow border-0">
            <div class="card-body p-5">

                <h2>Acerca de Safe Drive</h2>

                <p>
                    Safe Drive es una plataforma desarrollada para mejorar la seguridad vial
                    mediante el uso de dispositivos IoT capaces de recopilar información en tiempo real.
                </p>

                <p>
                    Nuestro sistema permite monitorear conductores, detectar incidentes,
                    generar alertas y brindar información útil para la toma de decisiones.
                </p>

            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <footer class="text-center mt-5 mb-4">

        <hr>

        <h5>Safe Drive</h5>

        <p class="text-muted">
            Plataforma de monitoreo vehicular basada en tecnología IoT.
        </p>

        <small class="text-muted">
            © <?= date('Y') ?> Safe Drive | Todos los derechos reservados
        </small>

    </footer>

</div>