<?php

use \yii\bootstrap\Modal;
use \yii\bootstrap\Alert;
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Yii 2 Build';
?>
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
