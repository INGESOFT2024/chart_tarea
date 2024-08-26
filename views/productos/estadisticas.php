<h1 class="text-center">Grafica de productos con chart.js</h1>
<h2 class="text-center">Grafica de ventas</h2>

<div class="row justify-content-center">
    <div class="col">
        <button type="button" id="actualizar" class="btn btn-info w-100">actualizar</button>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col">
        <canvas id="chartVentas" width="100%"></canvas>
    </div>
</div>
<script src="<?= asset('./build/js/productos/estadisticas.js')?>"></script>