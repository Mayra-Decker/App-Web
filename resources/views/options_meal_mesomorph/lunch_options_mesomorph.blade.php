@extends('layouts.layout')

@section('title', 'Opciones de almuerzo para mesomorfo')

@section('content')
    <div class="intro-section">
        <h1>Opciones de almuerzo - Mesomorfo</h1>
        <p>Descubre una variedad de almuerzos diseñados para mantener un equilibrio perfecto de proteínas, carbohidratos y grasas saludables.</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="meal-section">
                <h2>Opción 1: Ensalada de pollo con aguacate y quinoa</h2>
                <ul>
                    <li>150 g de pechuga de pollo a la parrilla</li>
                    <li>1/2 taza de quinoa cocida</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>Ensalada mixta (espinacas, lechuga, tomate, pepino)</li>
                    <li>Aderezo de aceite de oliva y limón</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/2.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 2: Tacos de pescado con salsa de mango</h2>
                <ul>
                    <li>2 tortillas de maíz</li>
                    <li>150 g de pescado blanco a la parrilla</li>
                    <li>Salsa de mango (mango, cebolla, cilantro, chile)</li>
                    <li>Rodajas de aguacate</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/3.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 3: Ensalada de garbanzos con espinacas y feta</h2>
                <ul>
                    <li>1 taza de garbanzos cocidos</li>
                    <li>1 taza de espinacas frescas</li>
                    <li>50 g de queso feta desmenuzado</li>
                    <li>Tomates cherry y pepino en cubos</li>
                    <li>Aderezo de aceite de oliva y vinagre balsámico</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/4.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 4: Sopa de lentejas y verduras</h2>
                <ul>
                    <li>1 taza de lentejas cocidas</li>
                    <li>1 zanahoria en cubos</li>
                    <li>1 papa en cubos</li>
                    <li>1/2 taza de apio picado</li>
                    <li>Caldo de verduras y especias al gusto</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/5.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 5: Ensalada de atún con frijoles y maíz</h2>
                <ul>
                    <li>1 lata de atún en agua</li>
                    <li>1/2 taza de frijoles negros cocidos</li>
                    <li>1/2 taza de maíz</li>
                    <li>Ensalada mixta (lechuga, tomate, pepino)</li>
                    <li>Aderezo de limón y aceite de oliva</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/6.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 6: Carne de vaca curry con arroz integral</h2>
                <ul>
                    <li>150 g de pcarne de vaca en trozos</li>
                    <li>1 taza de arroz integral cocido</li>
                    <li>Salsa de curry (leche de coco, pasta de curry, especias)</li>
                    <li>Verduras al vapor (brócoli, zanahoria)</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/7.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 7: Rollos de lechuga con carne de res y verduras</h2>
                <ul>
                    <li>150 g de carne de res molida</li>
                    <li>Hojas de lechuga para envolver</li>
                    <li>Verduras en tiras (pimiento, cebolla, zanahoria)</li>
                    <li>Salsa de soya y jengibre</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/8.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 8: Ensalada de quinoa con aguacate y edamame</h2>
                <ul>
                    <li>1 taza de quinoa cocida</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>1/2 taza de edamame cocido</li>
                    <li>Tomates cherry y cebolla morada</li>
                    <li>Aderezo de aceite de sésamo y limón</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/9.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 9: Pechuga de pavo al horno con batata</h2>
                <ul>
                    <li>150 g de pechuga de pavo al horno</li>
                    <li>1 batata asada</li>
                    <li>Ensalada verde</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/10.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 10: Ensalada de pollo con manzana y nueces</h2>
                <ul>
                    <li>150 g de pechuga de pollo a la parrilla</li>
                    <li>1 manzana en cubos</li>
                    <li>1/4 taza de nueces</li>
                    <li>Ensalada de hojas verdes</li>
                    <li>Aderezo de yogur y mostaza</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/11.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 11: Tacos de carne de cerdo con salsa de piña</h2>
                <ul>
                    <li>2 tortillas de maíz</li>
                    <li>150 g de carne de cerdo desmenuzada</li>
                    <li>Salsa de piña (piña, cebolla, cilantro)</li>
                    <li>Rodajas de jalapeño</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/12.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 12: Ensalada de pollo con espárragos y champiñones</h2>
                <ul>
                    <li>150 g de pechuga de pollo a la parrilla</li>
                    <li>1 taza de espárragos cocidos</li>
                    <li>1/2 taza de champiñones salteados</li>
                    <li>Ensalada de hojas verdes</li>
                    <li>Aderezo de aceite de oliva y vinagre de manzana</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/13.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 13: Quiche de espinacas y queso feta</h2>
                <ul>
                    <li>1 porción de quiche casero (espinacas, queso feta, huevo)</li>
                    <li>Ensalada verde</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/14.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 14: Pollo al limón con brócoli al vapor</h2>
                <ul>
                    <li>150 g de pechuga de pollo con salsa de limón</li>
                    <li>1 taza de brócoli al vapor</li>
                    <li>1/2 taza de arroz integral</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/15.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 15: Ensalada de garbanzos con pimientos asados</h2>
                <ul>
                    <li>1 taza de garbanzos cocidos</li>
                    <li>1/2 taza de pimientos asados en tiras</li>
                    <li>1/2 cebolla roja en rodajas</li>
                    <li>Ensalada verde</li>
                    <li>Aderezo de aceite de oliva y vinagre</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/16.jpg') }}" style="width: 226px; height: auto;">

        </div>
        <div class="col-md-6">
            <div class="meal-section">
                <h2>Opción 16: Ensalada de pollo con pimiento y aguacate</h2>
                <ul>
                    <li>150 g de pechuga de pollo a la parrilla</li>
                    <li>1/2 pimiento rojo en tiras</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>Ensalada mixta</li>
                    <li>Aderezo de cilantro y limón</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/17.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 17: Pita de falafel con salsa de yogur</h2>
                <ul>
                    <li>1 pita integral</li>
                    <li>4-5 bolitas de falafel</li>
                    <li>Salsa de yogur (yogur griego, ajo, limón)</li>
                    <li>Verduras frescas (tomate, pepino, cebolla)</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/18.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 18: Ensalada de atún con aguacate y huevo</h2>
                <ul>
                    <li>1 lata de atún en agua</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>1 huevo duro en rodajas</li>
                    <li>Ensalada verde</li>
                    <li>Aderezo de mostaza y miel</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/19.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 19: Pollo al horno con papas y zanahorias</h2>
                <ul>
                    <li>150 g de pechuga de pollo al horno</li>
                    <li>1 papa asada en cubos</li>
                    <li>1 zanahoria asada en rodajas</li>
                    <li>Ensalada verde</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/20.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 20: Ensalada de quinoa con mango y camarones</h2>
                <ul>
                    <li>1 taza de quinoa cocida</li>
                    <li>150 g de camarones cocidos</li>
                    <li>1/2 mango en cubos</li>
                    <li>Ensalada de hojas verdes</li>
                    <li>Aderezo de cilantro y limón</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/21.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 21: Carne de res con pimientos y cebolla</h2>
                <ul>
                    <li>150 g de carne de res en tiras</li>
                    <li>1 pimiento rojo en tiras</li>
                    <li>1 cebolla en tiras</li>
                    <li>1/2 taza de arroz integral</li>
                    <li>Especias al gusto</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/22.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 22: Ensalada de espinacas con salmón y aguacate</h2>
                <ul>
                    <li>150 g de salmón a la parrilla</li>
                    <li>1 taza de espinacas frescas</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>Ensalada mixta</li>
                    <li>Aderezo de aceite de oliva y vinagre balsámico</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/23.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 23: Pita con hummus y verduras asadas</h2>
                <ul>
                    <li>1 pita integral</li>
                    <li>1/2 taza de hummus</li>
                    <li>Verduras asadas (berenjena, pimiento, calabacín)</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/24.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 24: Ensalada de garbanzos con aguacate y tomate</h2>
                <ul>
                    <li>1 taza de garbanzos cocidos</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>1 tomate en cubos</li>
                    <li>Ensalada verde</li>
                    <li>Aderezo de aceite de oliva y limón</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/25.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 25: Tacos de pollo con salsa de aguacate</h2>
                <ul>
                    <li>2 tortillas de maíz</li>
                    <li>150 g de pollo desmenuzado</li>
                    <li>Salsa de aguacate (aguacate, cilantro, limón)</li>
                    <li>Verduras frescas (lechuga, cebolla)</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/26.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 26: Ensalada de atún con huevo y pimientos</h2>
                <ul>
                    <li>1 lata de atún en agua</li>
                    <li>1 huevo duro en rodajas</li>
                    <li>1/2 pimiento amarillo en tiras</li>
                    <li>Ensalada de hojas verdes</li>
                    <li>Aderezo de mostaza y miel</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/27.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 27: Carne de cerdo con salsa de manzana y col rizada</h2>
                <ul>
                    <li>150 g de carne de cerdo a la parrilla</li>
                    <li>1/2 taza de salsa de manzana</li>
                    <li>1 taza de col rizada salteada</li>
                    <li>1/2 taza de arroz integral</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/28.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 28: Quiche de pavo con espinacas y champiñones</h2>
                <ul>
                    <li>1 porción de quiche casero (pavo, espinacas, champiñones)</li>
                    <li>Ensalada verde</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/29.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 29: Ensalada de edamame con aguacate y tomates</h2>
                <ul>
                    <li>1 taza de edamame cocido</li>
                    <li>1/2 aguacate en cubos</li>
                    <li>1/2 taza de tomates cherry</li>
                    <li>Ensalada de hojas verdes</li>
                    <li>Aderezo de aceite de sésamo y vinagre de arroz</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/30.jpg') }}" style="width: 226px; height: auto;">

                <h2>Opción 30: Sopa de pollo con fideos de arroz y verduras</h2>
                <ul>
                    <li>150 g de pechuga de pollo en tiras</li>
                    <li>1 taza de fideos de arroz</li>
                    <li>Verduras (zanahoria, cebolla, pimiento)</li>
                    <li>Caldo de pollo</li>
                    <li>Especias al gusto</li>
                </ul>
                <img src="{{ asset('images/lunch_mesomorph/31.jpg') }}" style="width: 226px; height: auto;">
            </div>
        </div>
    </div>
@endsection
