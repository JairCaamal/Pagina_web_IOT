<?php

use yii\helpers\Html;

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

    <!-- Hero -->
    <div class="hero-section">
        <h1>🚗 Bienvenido a Safe Drive</h1>
        <p>
            Plataforma inteligente para la gestión y monitoreo de conductores,
            vehículos y seguridad vial.
        </p>

        <?= Html::a(
            'Comenzar Ahora',
            ['site/login'],
            ['class' => 'btn btn-light btn-lg mt-3 px-4']
        ) ?>
    </div>

    <!-- Características -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Seguridad</h3>
                <p>
                    Monitoreo constante para garantizar viajes seguros y
                    una mejor experiencia para los usuarios.
                </p>
                <a href="#" class="btn btn-primary">
                    Más información
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Estadísticas</h3>
                <p>
                    Visualiza información en tiempo real mediante reportes
                    y paneles de control interactivos.
                </p>
                <a href="#" class="btn btn-success">
                    Ver reportes
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon">🚘</div>
                <h3>Gestión Vehicular</h3>
                <p>
                    Administra conductores, vehículos y rutas desde una
                    interfaz sencilla y moderna.
                </p>
                <a href="#" class="btn btn-dark">
                    Explorar
                </a>
            </div>
        </div>

    </div>

    <!-- Estadísticas -->
    <div class="stats-section">
        <div class="row">

            <div class="col-md-4 stat">
                <h2>500+</h2>
                <p>Usuarios Registrados</p>
            </div>

            <div class="col-md-4 stat">
                <h2>1,200+</h2>
                <p>Viajes Monitoreados</p>
            </div>

            <div class="col-md-4 stat">
                <h2>99%</h2>
                <p>Satisfacción de Usuarios</p>
            </div>

        </div>
    </div>

</div>