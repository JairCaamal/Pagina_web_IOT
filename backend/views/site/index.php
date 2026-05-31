<?php

use yii\helpers\Html;

$this->title = 'Sistema Inteligente de Monitoreo Vehicular';

?>

<div class="site-index">

    <div class="text-center bg-light p-5 rounded shadow-sm mb-5">

        <h1 class="display-4 fw-bold">
            Sistema Inteligente de Monitoreo Vehicular
        </h1>

        <p class="fs-4 text-muted mt-3">
            Plataforma de monitoreo en tiempo real para detección de fatiga,
            alcohol y riesgos críticos en conductores.
        </p>

        <p class="mt-4">
            <?= Html::a(
                'Ir a Monitoreos',
                ['/monitoreo/index'],
                ['class' => 'btn btn-success btn-lg']
            ) ?>
        </p>

    </div>

    <div class="row text-center">

        <!-- CONDUCTORES -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <i class="fa fa-user fa-3x text-primary mb-3"></i>

                    <h3>Conductores</h3>

                    <p class="text-muted">
                        Administración de conductores registrados.
                    </p>

                    <?= Html::a(
                        'Gestionar',
                        ['/conductor/index'],
                        ['class' => 'btn btn-primary']
                    ) ?>

                </div>

            </div>

        </div>

        <!-- MONITOREOS -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <i class="fa fa-chart-line fa-3x text-success mb-3"></i>

                    <h3>Monitoreos</h3>

                    <p class="text-muted">
                        Visualización de monitoreos inteligentes.
                    </p>

                    <?= Html::a(
                        'Gestionar',
                        ['/monitoreo/index'],
                        ['class' => 'btn btn-success']
                    ) ?>

                </div>

            </div>

        </div>

        <!-- ALERTAS -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <i class="fa fa-triangle-exclamation fa-3x text-danger mb-3"></i>

                    <h3>Alertas</h3>

                    <p class="text-muted">
                        Gestión de alertas críticas detectadas.
                    </p>

                    <?= Html::a(
                        'Gestionar',
                        ['/alerta/index'],
                        ['class' => 'btn btn-danger']
                    ) ?>

                </div>

            </div>

        </div>

        <!-- SENSORES -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body">

                    <i class="fa fa-microchip fa-3x text-dark mb-3"></i>

                    <h3>Sensores</h3>

                    <p class="text-muted">
                        Administración de sensores del sistema.
                    </p>

                    <?= Html::a(
                        'Gestionar',
                        ['/sensor/index'],
                        ['class' => 'btn btn-dark']
                    ) ?>

                </div>

            </div>

        </div>

    </div>

    <!-- PANEL INFORMATIVO -->

    <div class="row mt-5">

        <div class="col-md-12">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h3 class="mb-4">
                        Estado General del Sistema
                    </h3>

                    <div class="row text-center">

                        <div class="col-md-3">

                            <div class="p-3 bg-success text-white rounded">

                                <h2>15</h2>

                                <p>Conductores Registrados</p>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="p-3 bg-warning text-dark rounded">

                                <h2>8</h2>

                                <p>Monitoreos Activos</p>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="p-3 bg-danger text-white rounded">

                                <h2>3</h2>

                                <p>Alertas Críticas</p>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="p-3 bg-primary text-white rounded">

                                <h2>12</h2>

                                <p>Sensores Conectados</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>