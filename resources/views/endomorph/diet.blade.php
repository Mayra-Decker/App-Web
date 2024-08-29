@extends('layouts.layout')
@vite(['resources/js/app.js', 'resources/css/app.css'])
@section('title', 'Dieta para Endomorfo')

@section('content')
    <div class="intro-section">
        <h1>Dieta Completa para Endomorfo</h1>
        <p>Los endomorfos tienden a acumular grasa con más facilidad, por lo que su dieta debe enfocarse en la pérdida de grasa y la ganancia de músculo magro. A continuación, te proporciono una dieta completa diseñada para un endomorfo que busca mejorar su composición corporal.</p>
    </div>

    <div class="cascading-section">
        <div class="meal-section">
            <h2 class="meal-title">Desayuno</h2>
            <div class="meal-content">
                <h3>Omelette de Claras de Huevo:</h3>
                <ul>
                    <li>4 claras de huevo y 1 huevo entero.</li>
                    <li>1 taza de espinacas y champiñones salteados.</li>
                    <li>1 rebanada de pan integral.</li>
                </ul>
                <h3>Batido Verde:</h3>
                <ul>
                    <li>1 taza de espinacas.</li>
                    <li>1 manzana verde.</li>
                    <li>1/2 pepino.</li>
                    <li>1 scoop de proteína en polvo.</li>
                    <li>1 taza de agua o leche de almendras.</li>
                    <li>Mezcla todo en una licuadora hasta que quede suave.</li>
                </ul>
                <a href="{{ route('breakfast.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Media Mañana</h2>
            <div class="meal-content">
                <h3>Nueces y Almendras:</h3>
                <ul>
                    <li>Un puñado de nueces o almendras.</li>
                </ul>
                <h3>Fruta:</h3>
                <ul>
                    <li>1 pera o 1 toronja.</li>
                </ul>
                <a href="{{ route('brunch.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Almuerzo</h2>
            <div class="meal-content">
                <h3>Pechuga de pollo al horno:</h3>
                <ul>
                    <li>150-200g de pechuga de pollo.</li>
                    <li>Aliñado con especias y limón.</li>
                </ul>
                <h3>Ensalada grande:</h3>
                <ul>
                    <li>Mezcla de lechuga, espinacas, tomate, pepino, y zanahorias ralladas.</li>
                    <li>Aliñado con aceite de oliva y vinagre.</li>
                </ul>
                <h3>Quinoa:</h3>
                <ul>
                    <li>1/2 taza cocida.</li>
                </ul>
                <a href="{{ route('lunch.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda (Pre-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Yogur Griego:</h3>
                <ul>
                    <li>1 taza de yogur griego bajo en grasa.</li>
                </ul>
                <h3>Semillas de Chía:</h3>
                <ul>
                    <li>1 cucharada de semillas de chía.</li>
                    <li>Mezcladas con el yogur.</li>
                </ul>
                <a href="{{ route('pre-em.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Cena (Post-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Pescado al Horno:</h3>
                <ul>
                    <li>150-200g de pescado blanco o salmón.</li>
                    <li>Aliñado con limón y especias.</li>
                </ul>
                <h3>Verduras Asadas:</h3>
                <ul>
                    <li>Brócoli, coliflor, y zanahorias.</li>
                    <li>Aliñado con aceite de oliva.</li>
                </ul>
                <h3>Batata (camote) asada:</h3>
                <ul>
                    <li>1 batata pequeña asada.</li>
                </ul>
                <a href="{{ route('post-em.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda Nocturna</h2>
            <div class="meal-content">
                <h3>Requesón con Frutas:</h3>
                <ul>
                    <li>1/2 taza de requesón bajo en grasa.</li>
                    <li>1/2 taza de bayas frescas.</li>
                </ul>
                <a href="{{ route('msnack.options.endomorph') }}" class="btn btn-primary">Más opciones</a>
            </div>
        </div>

        <div class="tips-section">
            <h2>Consejos Generales</h2>
            <ul>
                <li><strong>Control de Porciones:</strong> Come porciones más pequeñas y frecuentes para controlar el hambre.</li>
                <li><strong>Carbohidratos Complejos:</strong> Prioriza los carbohidratos de bajo índice glucémico como quinoa, avena, y batatas.</li>
                <li><strong>Proteínas Magras:</strong> Elige fuentes de proteínas magras como pollo, pescado, claras de huevo, y productos lácteos bajos en grasa.</li>
                <li><strong>Evita Azúcares Refinados:</strong> Limita el consumo de azúcares refinados y carbohidratos simples.</li>
                <li><strong>Hidratación:</strong> Bebe al menos 2-3 litros de agua al día.</li>
                <li><strong>Actividad Física:</strong> Mantén un nivel alto de actividad física para apoyar la pérdida de grasa.</li>
            </ul>
        </div>
    </div>
@endsection
