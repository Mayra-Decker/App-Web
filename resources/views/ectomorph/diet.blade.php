@extends('layouts.layout')
@vite(['resources/js/app.js', 'resources/css/app.css'])
@section('title', 'Dieta para Ectomorfo')

@section('content')
    <div class="intro-section">
        <h1>Dieta Completa para Ectomorfo</h1>
        <p>Para un ectomorfo, la dieta debe enfocarse en aumentar la ingesta calórica y de proteínas para apoyar la ganancia muscular y de peso. A continuación, te proporciono una dieta completa que incluye todas las comidas del día, diseñada para un ectomorfo que busca ganar masa muscular.</p>
    </div>
    
    <div class="cascading-section">
        <div class="meal-section">
            <h2 class="meal-title">Desayuno</h2>
            <div class="meal-content">
                <h3>Avena con frutos secos y miel:</h3>
                <ul>
                    <li>1 taza de avena cocida en leche entera.</li>
                    <li>2 cucharadas de almendras o nueces picadas.</li>
                    <li>1 cucharada de miel.</li>
                    <li>1 plátano en rodajas.</li>
                </ul>
                <h3>Batido de proteínas:</h3>
                <ul>
                    <li>1 scoop de proteína en polvo.</li>
                    <li>1 taza de leche entera.</li>
                    <li>1 cucharada de mantequilla de maní.</li>
                    <li>1/2 taza de avena.</li>
                    <li>1/2 taza de frutos rojos (opcional).</li>
                    <li>Mezcla todo en una licuadora hasta que quede suave.</li>
                </ul>
                <a href="{{ route('breakfast.options.ectomorph') }}" class="btn btn-primary">Más Opciones</a>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Media Mañana</h2>
            <div class="meal-content">
                <h3>Sándwich de pavo:</h3>
                <ul>
                    <li>2 rebanadas de pan integral.</li>
                    <li>100g de pechuga de pavo.</li>
                    <li>1 rebanada de queso.</li>
                    <li>Aguacate en rodajas.</li>
                    <li>Un puñado de espinacas frescas.</li>
                </ul>
                <h3>Fruta:</h3>
                <ul>
                    <li>1 manzana o 1 naranja.</li>
                </ul>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Almuerzo</h2>
            <div class="meal-content">
                <h3>Pechuga de pollo a la parrilla:</h3>
                <ul>
                    <li>150-200g de pechuga de pollo.</li>
                    <li>Marinada con limón, ajo, y aceite de oliva.</li>
                </ul>
                <h3>Arroz integral o quinoa:</h3>
                <ul>
                    <li>1 taza cocida.</li>
                </ul>
                <h3>Vegetales asados o al vapor:</h3>
                <ul>
                    <li>Brócoli, zanahorias, y espárragos.</li>
                </ul>
                <h3>Ensalada:</h3>
                <ul>
                    <li>Mezcla de lechuga, tomate, pepino, y aceitunas.</li>
                    <li>Aliñado con aceite de oliva y vinagre balsámico.</li>
                </ul>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda (Pre-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Batata (camote) asada:</h3>
                <ul>
                    <li>1 batata mediana asada.</li>
                </ul>
                <h3>Yogur griego con miel y granola:</h3>
                <ul>
                    <li>1 taza de yogur griego.</li>
                    <li>2 cucharadas de granola.</li>
                    <li>1 cucharada de miel.</li>
                </ul>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Cena (Post-entrenamiento)</h2>
            <div class="meal-content">
                <h3>Salmón a la parrilla:</h3>
                <ul>
                    <li>150-200g de salmón.</li>
                    <li>Marinada con limón, ajo, y hierbas.</li>
                </ul>
                <h3>Pasta integral:</h3>
                <ul>
                    <li>1 taza cocida.</li>
                    <li>Salsa de tomate natural y un toque de queso parmesano.</li>
                </ul>
                <h3>Verduras al vapor:</h3>
                <ul>
                    <li>Espinacas y calabacín.</li>
                </ul>
            </div>
        </div>

        <div class="meal-section">
            <h2 class="meal-title">Merienda Nocturna</h2>
            <div class="meal-content">
                <h3>Requesón con frutas:</h3>
                <ul>
                    <li>1/2 taza de requesón.</li>
                    <li>1/2 taza de piña o mango en trozos.</li>
                    <li>Puñado de nueces y almendras.</li>
                </ul>
            </div>
        </div>

        <div class="tips-section">
            <h2>Consejos Generales</h2>
            <ul>
                <li><strong>Comidas frecuentes:</strong> Consume 5-6 comidas al día para mantener un aporte constante de calorías y nutrientes.</li>
                <li><strong>Aumenta las calorías:</strong> Los ectomorfos necesitan un exceso calórico para ganar masa muscular. Asegúrate de estar comiendo más de lo que quemas.</li>
                <li><strong>Proteínas:</strong> Incluye una fuente de proteína en cada comida (pollo, pavo, pescado, huevos, legumbres, lácteos).</li>
                <li><strong>Carbohidratos complejos:</strong> Prioriza los carbohidratos complejos como avena, arroz integral, batatas, y quinoa para proporcionar energía sostenida.</li>
                <li><strong>Grasas saludables:</strong> Incorpora grasas saludables como aguacate, aceite de oliva, frutos secos y semillas para aumentar las calorías sin volumen de comida.</li>
                <li><strong>Hidratación:</strong> Bebe al menos 2-3 litros de agua al día.</li>
                <li><strong>Suplementación:</strong> Considera añadir un suplemento de proteína en polvo y creatina para apoyar el crecimiento muscular, especialmente alrededor del entrenamiento.</li>
            </ul>
        </div>
    </div>
@endsection
