@extends('layouts.layout')
@vite(['resources/js/app.js', 'resources/css/app.css'])
@section('title', 'Dieta para Mesomorfo')

@section('content')
    <div class="intro-section">
        <h1>Dieta completa para mesomorfo</h1>
        <p>Los mesomorfos tienden a ganar músculo y perder grasa con relativa facilidad, por lo que su dieta debe ser balanceada y adaptada a sus objetivos. Aquí te proporciono una dieta completa diseñada para un mesomorfo que busca mantener o ganar masa muscular.</p>
    </div>

    <div class="cascading-section">
        <div class="meal-section">
            <h2 class="meal-title">Desayuno</h2>
            <div class="meal-content">
                <h3>Huevos revueltos con espinacas:</h3>
                <ul>
                    <li>3-4 huevos.</li>
                    <li>1 taza de espinacas salteadas.</li>
                    <li>1 rebanada de pan integral.</li>
                </ul>
                <img src="{{ asset('images/breakfast_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <h3>Batido de proteínas:</h3>
                <ul>
                    <li>1 scoop de proteína en polvo.</li>
                    <li>1 taza de leche o agua.</li>
                    <li>1 plátano.</li>
                    <li>1 cucharada de mantequilla de almendra.</li>
                </ul>
                <img src="{{ asset('images/breakfast_mesomorph/2.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('breakfast.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Media Mañana</h2>
            <div class="meal-content">
                <h3>Yogur griego con frutos secos:</h3>
                <ul>
                    <li>1 taza de yogur griego.</li>
                    <li>Un puñado de nueces o almendras.</li>
                    <li>Frutas frescas como fresas o arándanos.</li>
                </ul>
                <h3>Fruta:</h3>
                <ul>
                    <li>1 manzana o 1 pera.</li>
                </ul>
                <img src="{{ asset('images/brunch_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('brunch.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Almuerzo</h2>
            <div class="meal-content">
                <h3>Pollo a la plancha:</h3>
                <ul>
                    <li>150-200g de pechuga de pollo.</li>
                    <li>Condimentado con hierbas y limón.</li>
                </ul>
                <h3>Arroz integral o batatas:</h3>
                <ul>
                    <li>1 taza cocida.</li>
                </ul>
                <h3>Ensalada de vegetales:</h3>
                <ul>
                    <li>Mezcla de lechuga, tomate, pepino, y zanahoria rallada.</li>
                    <li>Aliñado con aceite de oliva y limón.</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('lunch.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda (Pre-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Avena con frutas:</h3>
                <ul>
                    <li>1/2 taza de avena cocida.</li>
                    <li>1/2 taza de frutas como manzana o arándanos.</li>
                </ul>
                <img src="{{ asset('images/pre-em_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <h3>Yogur griego con granola:</h3>
                <ul>
                    <li>1 taza de yogur griego.</li>
                    <li>2 cucharadas de granola.</li>
                </ul>
                <img src="{{ asset('images/pre-em_mesomorph/2.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('pre-em.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Cena (Post-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Filete de ternera a la parrilla:</h3>
                <ul>
                    <li>150-200g de ternera.</li>
                    <li>Aliñado con sal, pimienta, y ajo.</li>
                </ul>
                <h3>Puré de patatas o quinoa:</h3>
                <ul>
                    <li>1 taza cocida.</li>
                </ul>
                <h3>Verduras al vapor:</h3>
                <ul>
                    <li>Brócoli y espárragos.</li>
                </ul>
                <img src="{{ asset('images/post-em_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('post-em.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda Nocturna</h2>
            <div class="meal-content">
                <h3>Requesón con miel:</h3>
                <ul>
                    <li>1/2 taza de requesón.</li>
                    <li>1 cucharada de miel.</li>
                </ul>
                <img src="{{ asset('images/msnack_mesomorph/1.jpg') }}" style="width: 226px; height: auto;">
                <a href="{{ route('msnack.options.mesomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="tips-section">
            <h2>Consejos Generales</h2>
            <ul>
                <li><strong>Equilibrio:</strong> Mantén un balance entre proteínas, carbohidratos, y grasas en cada comida.</li>
                <li><strong>Variedad:</strong> Cambia las fuentes de proteínas y carbohidratos para asegurarte de obtener una amplia gama de nutrientes.</li>
                <li><strong>Suplementación:</strong> Considera usar suplementos como proteína en polvo y BCAAs si buscas un mayor rendimiento deportivo.</li>
                <li><strong>Hidratación:</strong> Bebe al menos 2-3 litros de agua al día.</li>
            </ul>
        </div>
    </div>
@endsection
