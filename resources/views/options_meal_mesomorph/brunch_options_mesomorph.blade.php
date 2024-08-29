@extends('layouts.layout')

@section('title', 'Opciones de media mañana para mesomorfo')

@section('content')
    <div class="intro-section">
        <h1>Opciones de media mañana - Mesomorfo</h1>
        <p>Explora una variedad de opciones de snacks para media mañana, diseñadas para mantener un equilibrio adecuado de energía y nutrientes.</p>
    </div>

<div class="row">
  <div class="col-md-6">
    <div class="meal-section">
        <h2>Opción 1: Tostadas de batata con pavo y espinacas</h2>
        <ul>
            <li>2 rebanadas de batata asada</li>
            <li>50 g de pavo en lonchas</li>
            <li>Un puñado de espinacas frescas</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/2.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 2: Rollos de jamón con queso de cabra</h2>
        <ul>
            <li>4 lonchas de jamón</li>
            <li>50 g de queso de cabra</li>
            <li>Unas hojas de rúcula</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/3.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 3: Chía pudding con coco y mango</h2>
        <ul>
            <li>1/4 taza de semillas de chía</li>
            <li>1 taza de leche de coco</li>
            <li>1/2 taza de mango en cubos</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/4.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 4: Galletas de garbanzos y espinacas</h2>
        <ul>
            <li>3 galletas de garbanzos</li>
            <li>Un puñado de espinacas</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/5.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 5: Tacos de pescado con salsa de aguacate</h2>
        <ul>
            <li>2 tortillas de maíz</li>
            <li>50 g de pescado blanco cocido</li>
            <li>Salsa de aguacate</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/6.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 6: Sopa de lentejas y zanahoria</h2>
        <ul>
            <li>1 taza de sopa de lentejas</li>
            <li>1/2 taza de zanahorias cocidas</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/7.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 7: Ensalada de pollo con aguacate</h2>
        <ul>
            <li>50 g de pechuga de pollo</li>
            <li>1/2 aguacate</li>
            <li>Un puñado de lechuga</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/8.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 8: Batido de proteínas con kale y piña</h2>
        <ul>
            <li>1 taza de kale</li>
            <li>1/2 taza de piña</li>
            <li>1 scoop de proteína en polvo</li>
            <li>1 taza de agua</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/9.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 9: Hummus con pita integral</h2>
        <ul>
            <li>1/2 taza de hummus</li>
            <li>1 pita integral</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/10.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 10: Yogur griego con granola y frambuesas</h2>
        <ul>
            <li>1 taza de yogur griego</li>
            <li>1/4 taza de granola</li>
            <li>1/2 taza de frambuesas</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/11.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 11: Pudding de proteína con frutos rojos</h2>
        <ul>
            <li>1 scoop de proteína en polvo</li>
            <li>1/2 taza de frutos rojos</li>
            <li>1 taza de leche de almendras</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/12.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 12: Rollos de pavo y queso</h2>
        <ul>
            <li>4 lonchas de pavo</li>
            <li>50 g de queso cheddar</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/13.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 13: Muffins de avena y plátano</h2>
        <ul>
            <li>2 muffins de avena</li>
            <li>1 plátano</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/14.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 14: Batido de proteínas con arándanos y espinacas</h2>
        <ul>
            <li>1 taza de arándanos</li>
            <li>1 taza de espinacas</li>
            <li>1 scoop de proteína en polvo</li>
            <li>1 taza de leche de coco</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/15.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 15: Ensalada de atún con tomate y pepino</h2>
        <ul>
            <li>1 lata de atún</li>
            <li>1 tomate</li>
            <li>1/2 pepino</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/16.jpg') }}" style="width: 226px; height: auto;">

<div class="col-md-6">
    <div class="meal-section">
        <h2>Opción 16: Tostadas de aguacate con huevo poché</h2>
        <ul>
            <li>2 rebanadas de pan integral</li>
            <li>1/2 aguacate</li>
            <li>1 huevo pochado</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/17.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 17: Yogur griego con miel y nueces</h2>
        <ul>
            <li>1 taza de yogur griego</li>
            <li>1 cucharada de miel</li>
            <li>1/4 taza de nueces</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/18.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 18: Ensalada de pollo y mango</h2>
        <ul>
            <li>50 g de pechuga de pollo</li>
            <li>1/2 taza de mango en cubos</li>
            <li>Un puñado de espinacas</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/19.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 19: Tostadas integrales con hummus y pimientos</h2>
        <ul>
            <li>2 rebanadas de pan integral</li>
            <li>1/2 taza de hummus</li>
            <li>1/2 pimiento rojo</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/20.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 20: Smoothie de proteínas con cacao y mantequilla de almendra</h2>
        <ul>
            <li>1 scoop de proteína en polvo</li>
            <li>1 cucharada de cacao en polvo</li>
            <li>1 cucharada de mantequilla de almendra</li>
            <li>1 taza de leche de almendras</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/21.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 21: Tostadas de pan integral con queso cottage y pavo</h2>
        <ul>
            <li>2 rebanadas de pan integral</li>
            <li>3 cucharadas de queso cottage</li>
            <li>50 g de pavo</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/22.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 22: Galletas de avena y mantequilla de maní</h2>
        <ul>
            <li>3 galletas de avena</li>
            <li>1 cucharada de mantequilla de maní</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/23.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 23: Batido de proteínas con frutas del bosque</h2>
        <ul>
            <li>1 taza de frutas del bosque</li>
            <li>1 scoop de proteína en polvo</li>
            <li>1 taza de leche de almendras</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/24.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 24: Hummus con tostadas integrales</h2>
        <ul>
            <li>1/2 taza de hummus</li>
            <li>4 tostadas integrales</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/25.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 25: Ensalada de tomate y queso feta</h2>
        <ul>
            <li>1 tomate</li>
            <li>50 g de queso feta</li>
            <li>Un puñado de albahaca</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/26.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 26: Batido verde con pepino y manzana</h2>
        <ul>
            <li>1 taza de pepino en rodajas</li>
            <li>1 manzana verde</li>
            <li>1 scoop de proteína en polvo</li>
            <li>1 taza de agua de coco</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/27.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 27: Rollos de jamón y espárragos</h2>
        <ul>
            <li>4 lonchas de jamón</li>
            <li>6 espárragos cocidos</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/28.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 28: Muffins de zanahoria y nueces</h2>
        <ul>
            <li>2 muffins de zanahoria</li>
            <li>Un puñado de nueces</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/29.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 29: Ensalada de frutas con queso cottage</h2>
        <ul>
            <li>1/2 taza de fresas</li>
            <li>1/2 taza de melón</li>
            <li>1/4 taza de queso cottage</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/30.jpg') }}" style="width: 226px; height: auto;">

        <h2>Opción 30: Batido de proteínas con kiwi y plátano</h2>
        <ul>
            <li>1 kiwi</li>
            <li>1 plátano</li>
            <li>1 scoop de proteína en polvo</li>
            <li>1 taza de leche de almendras</li>
        </ul>
        <img src="{{ asset('images/brunch_mesomorph/31.jpg') }}" style="width: 226px; height: auto;">
    </div>
@endsection
