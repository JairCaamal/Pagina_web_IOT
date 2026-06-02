<?php

use \yii\bootstrap\Modal;
use \yii\bootstrap\Alert;
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

    <!-- Hero Section con fondo degradado -->
    <div class="p-5 mb-4 rounded-3 text-white" style="background: linear-gradient(90deg, #007bff, #6610f2);">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4 fw-bold">Bienvenido a Yii 2 Build</h1>
            <p class="fs-5 text-light">Tu aplicación está lista para crecer con estilo.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="https://www.yiiframework.com">Explora Yii</a>
                <?= Html::button('Contáctanos', [
                    'class' => 'btn btn-outline-light ms-2',
                    'data-toggle' => 'modal',
                    'data-target' => '#contactModal'
                ]) ?>
            </p>
        </div>
    </div>

    <!-- Alerta dinámica -->
    <div class="container">
        <?= Alert::widget([
            'options' => ['class' => 'alert-success'],
            'body' => '¡Felicidades! Has configurado correctamente tu aplicación Yii2.'
        ]) ?>
    </div>

    <!-- Sección de contenido con Cards -->
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Documentación</h2>
                        <p class="card-text text-muted">
                            Encuentra guías oficiales, tutoriales y referencias para dominar Yii2.
                        </p>
                        <a class="btn btn-outline-dark" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Foro</h2>
                        <p class="card-text text-muted">
                            Conéctate con la comunidad, comparte dudas y aprende de otros desarrolladores.
                        </p>
                        <a class="btn btn-outline-dark" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Extensiones</h2>
                        <p class="card-text text-muted">
                            Descubre librerías y plugins que amplían las capacidades de tu aplicación.
                        </p>
                        <a class="btn btn-outline-dark" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de contacto -->
    <?php
    Modal::begin([
        'id' => 'contactModal',
        'header' => '<h4>Formulario de Contacto</h4>',
    ]);
    echo '<form>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-2">Enviar</button>
          </form>';
    Modal::end();
    ?>
</div>
