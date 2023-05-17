<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarcelController;
use App\Http\Controllers\MudagController;
use App\Http\Controllers\Panel\MedioController;
use App\Http\Controllers\Panel\SiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

* Decirle a Andrés Moreno que:

1. Solicite el cambio del logo en PQRSD
2. Suba los archivos a Datos Abiertos
3. Revisar los documentos de convocatorias

* Subir información de resolución 063 - Activos de información
* estudios-investigación-y-otras-publicaciones

* Decirle a Aldemar qué eventos vendrán en la AGENCIA y agregarlo al Calendario
* Decirle a Lina que me pase la información del SALARIO de todos 
* Organizar el directorio de entidades en una tabla
* Preguntar a Lina las ofertas laborales (https://www.cnsc.gov.co/) - Comisión Nacional del Servicio Civil

 - Guía para error de conexión: https://askubuntu.com/questions/1358221/ubuntu-20-04-temporary-failure-in-name-resolution-for-wired
|
*/

Route::get('/', function () {
   return view('index');
});

Route::get('/actos-administrativos', function () {
   return view('user.administrative-acts');
})->name('user.administrative-acts');

Route::get('/p', function () {
   return view('parallax');
})->name('parallax');


Route::get('/somos-app/historia', function () {
   return view('user.about.history');
})->name('user.about.history');

Route::get('/somos-app/estructura', function(){
   return view('user.about.structure');
})->name('user.about.structure');

Route::get('/somos-app/mapa_estrategico', function(){
   return view('user.about.strategic');
}) ->name('user.about.strategic');

Route::get('/somos-app/mision-vision', function(){
   return view('user.about.mision');
}) ->name('user.about.mision');

Route::get('/somos-app/vision', function(){
   return view('user.about.vision');
}) ->name('user.about.vision');




Route::get('/somos-app/funcionarios', function () {
   return view('user.about.team');
})->name('user.about.team');

Route::get('/somos-app/funciones', function () {
   return view('user.about.functions');
})->name('user.about.functions');

Route::get('/somos-app/directorio', function () {
   return view('user.about.directory');
})->name('user.about.directory');

Route::get('/somos-app/organigrama', function () {
   return view('user.about.organization_chart');
})->name('user.about.organization_chart');

Route::get('/somos-app/banco-de-proyectos', function () {
   return view('user.about.projects');
})->name('user.about.projects');


/*Subdirecciones*/

Route::get('/subdirecciones/gestión-de-alianza-público-privada', function () {
   return view('user.subdirections.app');
})->name('user.subdirections.app');

Route::get('/subdirecciones/gestión-inmobiliaria', function () {
   return view('user.subdirections.inmo');
})->name('user.subdirections.inmo');

Route::get('/subdirecciones/gestión-del-paisaje-y-patrimonio', function () {
   return view('user.subdirections.landscape');
})->name('user.subdirections.landscape');



Route::get('/subdirectores/gestión-de-alianza-público-privada', function () {
   return view('user.about.subdirectors.app');
})->name('user.subdirectors.app');

Route::get('/subdirectores/gestión-inmobiliaria', function () {
   return view('user.about.subdirectors.inmo');
})->name('user.subdirectors.inmo');

Route::get('/subdirectores/gestión-del-paisaje-y-patrimonio', function () {
   return view('user.about.subdirectors.landscape');
})->name('user.subdirectors.landscape');

Route::get('/subdirectores/tecnica', function () {
   return view('user.about.subdirectors.tecnical');
})->name('user.subdirectors.tecnical');


/*Multimedia*/

Route::get('/multimedia', function () {
   return view('user.multimedia');
})->name('user.multimedia');



/*Transparencia*/

Route::get('/transparencia/trámites-en-el-suit', function () {
   return view('user.transparency.suit');
})->name('user.transparency.suit');

Route::get('/transparencia/solicitud-información-bienes-inmuebles-de-oportunidad', function () {
   return view('user.transparency.real_states_opportunity');
})->name('user.transparency.real_states_opportunity');

Route::get('/transparencia/normatividad', function () {
   return view('user.transparency.normativity');
})->name('user.transparency.normativity');

Route::get('/transparencia/registro-bases-de-datos', function () {
   return view('user.transparency.rnbd');
})->name('user.transparency.rnbd');

Route::get('/transparencia/informacion-de-interes', function () {
   return view('user.transparency.info');
})->name('user.transparency.info');

Route::get('/transparencia/estructura-organica-y-talento-humanos', function () {
   return view('user.transparency.structure');
})->name('user.transparency.structure');

Route::get('/transparencia/control', function () {
   return view('user.transparency.control');
})->name('user.transparency.control');

Route::get('/transparencia/instrumentos-de-gestión-de-información-pública', function () {
   return view('user.transparency.info_management');
})->name('user.transparency.info_management');

Route::get('/transparencia/contacto', function () {
   return view('user.transparency.contact-us');
})->name('user.transparency.contact-us');

Route::get('/transparencia/manual-de-gestion-de-cobro-persuasivo-y-coactivo', function () {
   return view('user.transparency.manual');
})->name('user.transparency.manual');

Route::get('/transparencia/política-de-manejo-de-datos-personales', function () {
   return view('user.transparency.tyc');
})->name('user.transparency.tyc');

Route::get('/transparencia/sistema-integrado-de-gestión', function () {
   return view('user.transparency.processes');
})->name('user.transparency.processes');


Route::get('/plan-estratégico', function () {
   return view('user.transparency.planning.strategic_plan');
})->name('user.transparency.planning.strategic_plan');


Route::get('/plan-de-acción', function () {
   return view('user.transparency.planning.action_plan');
})->name('user.transparency.planning.action_plan');

Route::get('/seguimiento-plan-indicativo-municipio-medellín', function () {
   return view('user.transparency.planning.medellin_plan');
})->name('user.transparency.planning.medellin_plan');

Route::get('/plan-anticorrupción-y-de-atención-al-ciudadano', function () {
   return view('user.transparency.planning.anti_corruption');
})->name('user.transparency.planning.anti_corruption');


Route::get('/ejecución-presupuestal-histórica-anual', function () {
   return view('user.transparency.annual_budget');
})->name('user.transparency.annual_budget');

Route::get('/plan-anual-de-adquisiciones', function () {
   return view('user.transparency.annual_procurement_plan');
})->name('user.transparency.annual_procurement_plan');


Route::get('/información-contable', function () {
   return view('user.transparency.financial_statements');
})->name('user.transparency.financial_statements');

Route::get('/transparencia/index', function () {
   return view('user.transparency.index');
})->name('user.transparency.index');

Route::get('/transparencia/general', function () {
   return view('user.transparency.verification');
})->name('user.transparency.verification');

Route::get('/transparencia/contratación', function () {
   return view('user.transparency.hiring');
})->name('user.transparency.hiring');

Route::get('/transparencia/informes-de-pqrs', function () {
   return view('user.transparency.pqrs');
})->name('user.transparency.pqrs');

Route::get('/plan-estratégico-institucional', function () {
   return view('user.transparency.planning.institutional');
})->name('user.transparency.planning.institutional');


// Route::get('/transparencia/app_medios', function(){
//    return view('user.transparency.medios');
// }) ->name('user.transparency.medios');

Route::get('/prensa/boletines', function(){
   return view('user.transparency.boletin');
}) ->name('user.transparency.boletin');

Route::get('/prensa/boletines2', function(){
   return view('user.noticias.index2');
}) ->name('user.noticias.index2');

Route::get('/prensa/boletines3', function(){
   return view('user.noticias.index3');
}) ->name('user.noticias.index3');



Route::get('/Prensa/galery', function(){
   return view('user.transparency.galery');
}) ->name('user.transparency.galery');

/*Proyectos*/

Route::get('/proyectos', function () {
   return view('user.projects.index');
})->name('user.projects.index');

Route::get('/proyectos2', function () {
   return view('user.projects.index2');
})->name('user.projects.index2');

Route::get('/proyectos3', function () {
   return view('user.projects.index3');
})->name('user.projects.index3');

Route::get('/proyectos/puentes', function () {
   return view('user.projects.puentes');
})->name('user.projects.puentes');

Route::get('/proyectos/naviera', function () {
   return view('user.projects.naviera');
})->name('user.projects.naviera');

Route::get('/proyectos/factibilidad', function () {
   return view('user.projects.factibilidad');
})->name('user.projects.factibilidad');

Route::get('/proyectos/estadio', function () {
   return view('user.projects.estadio');
})->name('user.projects.estadio');

// Route::get('/proyectos/mudag', function () {
//    return view('user.projects.mudag');
// })->name('user.projects.mudag');

Route::get('/proyectos/mudag_testimonios', function () {
   return view('user.projects.testimonios');
})->name('user.projects.testimonios');

Route::get('/test', function () {
   return view('user.projects.test');
})->name('user.projects.test');

Route::get('/proyectos/mudag/estadio', function () {
   return view('user.projects.estadio2');
})->name('user.projects.estadio2');

Route::get('/proyectos/mudag/edificio', function () {
   return view('user.projects.edificio');
})->name('user.projects.edificio');

Route::get('/proyectos/mudag/hotel', function () {
   return view('user.projects.hotel2');
})->name('user.projects.hotel2');

Route::get('/proyectos/mudag/gastronomia', function () {
   return view('user.projects.gastronomia');
})->name('user.projects.gastronomia');

Route::get('/proyectos/mudag/urbanismo', function () {
   return view('user.projects.urbanismo');
})->name('user.projects.urbanismo');




Route::get('/proyectos/centro_detencion', function () {
   return view('user.projects.carcel');
})->name('user.projects.carcel');

Route::get('/proyectos/minorista', function () {
   return view('user.projects.minorista');
})->name('user.projects.minorista');

Route::get('/proyectos/gestion_prado', function () {
   return view('user.projects.gestion');
})->name('user.projects.gestion');

Route::get('/proyectos/pasaje_bastilla', function () {
   return view('user.projects.bastilla');
})->name('user.projects.bastilla');

Route::get('/proyectos/avenida_jardin', function () {
   return view('user.projects.jardin');
})->name('user.projects.jardin');

Route::get('/proyectos/inmuebles_fiscales', function () {
   return view('user.projects.bienes');
})->name('user.projects.bienes');

Route::get('/proyectos/oportunidades_inmobiliarias', function () {
   return view('user.projects.oportunidades');
})->name('user.projects.oportunidades');

Route::get('/proyectos/prado_centro', function () {
   return view('user.projects.prado');
})->name('user.projects.prado');

Route::get('/proyectos/museo_antioquia', function () {
   return view('user.projects.museo');
})->name('user.projects.museo');

Route::get('/proyectos/centro_aurora', function () {
   return view('user.projects.aurora');
})->name('user.projects.aurora');

Route::get('/proyectos/gestion_alianzas_publico_privadas', function () {
   return view('user.projects.app');
})->name('user.projects.app');

Route::get('/proyectos/paisaje_patrimonio', function () {
   return view('user.projects.pyp');
})->name('user.projects.pyp');

Route::get('/proyectos/gestion_inmobiliaria', function () {
   return view('user.projects.inmo');
})->name('user.projects.inmo');


Route::get('/proyectos/arena_medellin', function () {
   return view('user.projects.arena');
})->name('user.projects.arena');

Route::get('/proyectos/medellin_saludable', function () {
   return view('user.projects.saludable');
})->name('user.projects.saludable');

Route::get('/proyectos/centro_norte', function () {
   return view('user.projects.centro-norte');
})->name('user.projects.centro-norte');

Route::get('/proyectos/centro_civico', function () {
   return view('user.projects.centro-civico');
})->name('user.projects.centro-civico');

Route::get('/proyectos/parque_norte', function () {
   return view('user.projects.parque-norte');
})->name('user.projects.parque-norte');

Route::get('/proyectos/red_neutra', function () {
   return view('user.projects.neutra');
})->name('user.projects.neutra');

Route::get('/proyectos/AIIRE', function () {
   return view('user.projects.aiire');
})->name('user.projects.aiire');

Route::get('/proyectos/barranquilla', function () {
   return view('user.projects.barranquilla');
})->name('user.projects.barranquilla');

Route::get('/proyectos/muros_verdes', function () {
   return view('user.projects.muros');
})->name('user.projects.muros');

Route::get('/proyectos/bulerias', function () {
   return view('user.projects.bulerias');
})->name('user.projects.bulerias');

Route::get('/proyectos/ciclorruta', function () {
   return view('user.projects.cicloruta');
})->name('user.projects.cicloruta');


Route::get('/proyectos/el_poblado', function () {
   return view('user.projects.poblado');
})->name('user.projects.poblado');


Route::get('/proyectos/parque_bolivar', function () {
   return view('user.projects.bolivar');
})->name('user.projects.bolivar');


Route::get('/proyectos/pasaje_junin', function () {
   return view('user.projects.junin');
})->name('user.projects.junin');


Route::get('/proyectos/AEEP', function () {
   return view('user.projects.aeep');
})->name('user.projects.aeep');


Route::get('/proyectos/AEEP_P', function () {
   return view('user.projects.aeep2');
})->name('user.projects.aeep2');


Route::get('/proyectos/inmobiliarios', function () {
   return view('user.projects.inmobiliarios');
})->name('user.projects.inmobiliarios');


Route::get('/proyectos/plaza_mayor', function () {
   return view('user.projects.hotel');
})->name('user.projects.hotel');

Route::get('/convocatoria-2023', function () {
   return view('user.projects.audiencia');
})->name('user.projects.audiencia');

Route::get('/proyectos/olimpica', function () {
   return view('user.projects.olimpica');
})->name('user.projects.olimpica');

/*Eventos*/

Route::get('/eventos/calendario', function () {
   return view('user.events.calendar');
})->name('user.events.calendar');

Route::get('/eventos/convocatorias', function () {
   return view('user.events.announcement');
})->name('user.events.announcement');




/*Rendición de cuentas*/

Route::get('/rendición/de/cuentas/accountability', function () {
   return view('user.rendition.accountability');
})->name('user.rendition.accountability');

Route::get('/rendición/de/cuentas/reglaments', function () {
   return view('user.rendition.reglaments');
})->name('user.rendition.reglaments');

Route::get('/rendición/de/cuentas/cuentas', function () {
   return view('user.rendition.cuentas');
})->name('user.rendition.cuentas');

Route::get('/rendición/de/cuentas2021', function () {
   return view('user.rendition.cuentas-2021');
})->name('user.rendition.cuentas-2021');

Route::get('/rendición/de/cuentas2022', function () {
   return view('user.rendition.cuentas-2022');
})->name('user.rendition.cuentas-2022');


Route::get('/rendición/de/cuentas/evaluacion', function () {
   return view('user.rendition.evaluacion');
})->name('user.rendition.evaluacion');


Route::get('/rendición/de/cuentas/galeria', function () {
   return view('user.rendition.galeria');
})->name('user.rendition.galeria');


Route::get('/rendicion/lineamientos', function () {
   return view('user.transparency.lineamientos');
})->name('user.transparency.lineamientos');

Route::get('/rendicion/rendicion_cuentas', function () {
   return view('user.transparency.cuentas');
})->name('user.transparency.cuentas');

Route::get('/rendicion/plan_indicativo', function () {
   return view('user.transparency.planning.indicativo');
})->name('user.transparency.planning.indicativo');



/* Aditional info */

Route::get('/transparencia/datos-abiertos', function () {
   return view('user.transparency.open-data');
})->name('user.open-data');

Route::get('/directorio-de-agremiaciones-asociaciones-y-otros-grupos-de-interes', function () {
   return view('user.info.union_directory');
})->name('user.info.union_directory');

Route::get('/directorio-de-entidades', function () {
   return view('user.info.entity_directory');
})->name('user.info.entity_directory');

Route::get('/preguntas-y-respuestas-frecuentes', function () {
   return view('user.info.faq');
})->name('user.info.faq');

Route::get('/estudios-investigación-y-otras-publicaciones', function () {
   return view('user.info.investigation');
})->name('user.info.investigation');


Route::get('/noticias/new1', function () {
   return view('user.noticias.new1');
})->name('user.noticias.new1');

Route::get('/noticias/new2', function () {
   return view('user.noticias.new2');
})->name('user.noticias.new2');

Route::get('/noticias/new3', function () {
   return view('user.noticias.new3');
})->name('user.noticias.new3');

Route::get('/noticias/new4', function () {
   return view('user.noticias.new4');
})->name('user.noticias.new4');

Route::get('/noticias/new5', function () {
   return view('user.noticias.new5');
})->name('user.noticias.new5');

Route::get('/noticias/new6', function () {
   return view('user.noticias.new6');
})->name('user.noticias.new6');

Route::get('/noticias/new7', function () {
   return view('user.noticias.new7');
})->name('user.noticias.new7');

Route::get('/noticias/new8', function () {
   return view('user.noticias.new8');
})->name('user.noticias.new8');


Route::get('/noticias/new9', function () {
   return view('user.noticias.new9');
})->name('user.noticias.new9');


Route::get('/noticias/new10', function () {
   return view('user.noticias.new10');
})->name('user.noticias.new10');

Route::get('/noticias/new11', function () {
   return view('user.noticias.new11');
})->name('user.noticias.new11');


Route::get('/noticias/new12', function () {
   return view('user.noticias.new12');
})->name('user.noticias.new12');

Route::get('/noticias/new13', function () {
   return view('user.noticias.new13');
})->name('user.noticias.new13');

Route::get('/noticias/new14', function () {
   return view('user.noticias.new14');
})->name('user.noticias.new14');

Route::get('/noticias/new15', function () {
   return view('user.noticias.new15');
})->name('user.noticias.new15');

Route::get('/noticias/new16', function () {
   return view('user.noticias.new16');
})->name('user.noticias.new16');

Route::get('/noticias/new17', function () {
   return view('user.noticias.new17');
})->name('user.noticias.new17');

Route::get('/noticias/new18', function () {
   return view('user.noticias.new18');
})->name('user.noticias.new18');

Route::get('/noticias/new19', function () {
   return view('user.noticias.new19');
})->name('user.noticias.new19');

Route::get('/noticias/new20', function () {
   return view('user.noticias.new20');
})->name('user.noticias.new20');


Route::get('/noticias/new21', function () {
   return view('user.noticias.new21');
})->name('user.noticias.new21');

Route::get('/noticias/new22', function () {
   return view('user.noticias.new22');
})->name('user.noticias.new22');

Route::get('/noticias/new23', function () {
   return view('user.noticias.new23');
})->name('user.noticias.new23');

Route::get('/noticias/new24', function () {
   return view('user.noticias.new24');
})->name('user.noticias.new24');

Route::get('/noticias/new25', function () {
   return view('user.noticias.new25');
})->name('user.noticias.new25');

Route::get('/noticias/new26', function () {
   return view('user.noticias.new26');
})->name('user.noticias.new26');


Route::get('/noticias/new27', function () {
   return view('user.noticias.new27');
})->name('user.noticias.new27');


Route::get('/noticias/new28', function () {
   return view('user.noticias.new28');
})->name('user.noticias.new28');

Route::get('/noticias/new29', function () {
   return view('user.noticias.new29');
})->name('user.noticias.new29');

Route::get('/noticias/new30', function () {
   return view('user.noticias.new30');
})->name('user.noticias.new30');

Route::get('/noticias/new31', function () {
   return view('user.noticias.new31');
})->name('user.noticias.new31');

Route::get('/noticias/new32', function () {
   return view('user.noticias.new32');
})->name('user.noticias.new32');

Route::get('/noticias/new33', function () {
   return view('user.noticias.new33');
})->name('user.noticias.new33');

Route::get('/noticias/new34', function () {
   return view('user.noticias.new34');
})->name('user.noticias.new34');

Route::get('/noticias/new35', function () {
   return view('user.noticias.new35');
})->name('user.noticias.new35');

Route::get('/noticias/new36', function () {
   return view('user.noticias.new36');
})->name('user.noticias.new36');

Route::get('/noticias/new37', function () {
   return view('user.noticias.new37');
})->name('user.noticias.new37');

Route::get('/noticias/new38', function () {
   return view('user.noticias.new38');
})->name('user.noticias.new38');

Route::get('/noticias/new39', function () {
   return view('user.noticias.new39');
})->name('user.noticias.new39');

Route::get('/noticias/new40', function () {
   return view('user.noticias.new40');
})->name('user.noticias.new40');

Route::get('/noticias/new41', function () {
   return view('user.noticias.new41');
})->name('user.noticias.new41');

Route::get('/noticias/new42', function () {
   return view('user.noticias.new42');
})->name('user.noticias.new42');

Route::get('/noticias/new43', function () {
   return view('user.noticias.new43');
})->name('user.noticias.new43');

Route::get('/noticias/new44', function () {
   return view('user.noticias.new44');
})->name('user.noticias.new44');

Route::get('/noticias/new45', function () {
   return view('user.noticias.new45');
})->name('user.noticias.new45');

Route::get('/noticias/new46', function () {
   return view('user.noticias.new46');
})->name('user.noticias.new46');

Route::get('/noticias/new47', function () {
   return view('user.noticias.new47');
})->name('user.noticias.new47');

Route::get('/noticias/new48', function () {
   return view('user.noticias.new48');
})->name('user.noticias.new48');

Route::get('/noticias/new49', function () {
   return view('user.noticias.new49');
})->name('user.noticias.new49');

Route::get('/noticias/new50', function () {
   return view('user.noticias.new50');
})->name('user.noticias.new50');

Route::get('/prueba', function () {
   return view('user.projects.prueba');
})->name('user.projects.prueba');

Route::get('/Prensa/album1', function(){
   return view('user.transparency.galeria.galery1');
}) ->name('user.transparency.galeria.galery1');

Route::get('/Prensa/album2', function(){
   return view('user.transparency.galeria.galery2');
}) ->name('user.transparency.galeria.galery2');

Route::get('/Prensa/album3', function(){
   return view('user.transparency.galeria.galery3');
}) ->name('user.transparency.galeria.galery3');

Route::get('/Prensa/album4', function(){
   return view('user.transparency.galeria.galery4');
}) ->name('user.transparency.galeria.galery4');

Route::get('/Prensa/album5', function(){
   return view('user.transparency.galeria.galery5');
}) ->name('user.transparency.galeria.galery5');

Route::get('/Prensa/album6', function(){
   return view('user.transparency.galeria.galery6');
}) ->name('user.transparency.galeria.galery6');

Route::get('/Prensa/album7', function(){
   return view('user.transparency.galeria.galery7');
}) ->name('user.transparency.galeria.galery7');

Route::get('/Prensa/album8', function(){
   return view('user.transparency.galeria.galery8');
}) ->name('user.transparency.galeria.galery8');

Route::get('/Prensa/album9', function(){
   return view('user.transparency.galeria.galery9');
}) ->name('user.transparency.galeria.galery9');

Route::get('/Prensa/album10', function(){
   return view('user.transparency.galeria.galery10');
}) ->name('user.transparency.galeria.galery10');

Route::get('/fiestadelpatrimonio2022', function(){
   return view('user.projects.patrimonio');
}) ->name('user.projects.patrimonio');

Route::get('/fiestadelpatrimonio2022/news', function(){
   return view('user.projects.newsPatrimonio');
}) ->name('user.projects.newsPatrimonio');

Route::get('/participa', function(){
   return view('user.projects.participa');
}) ->name('user.projects.participa');

Route::get('/SIG', function(){
   return view('user.projects.sig');
}) ->name('user.projects.sig');



Route::get('/SIG_datos', function(){
   return view('user.projects.SigDatos');
}) ->name('user.projects.SigDatos');

Route::get('/SIG_servicios', function(){
   return view('user.projects.SigServicios');
}) ->name('user.projects.SigServicios');

Route::get('/SIG_contacto', function(){
   return view('user.projects.SigContacto');
}) ->name('user.projects.SigContacto');

Route::get('/patrimonio', function(){
   return view('user.projects.landing');
}) ->name('user.projects.landing');

Route::get('/mapa', function(){
   return view('user.projects.mapa');
}) ->name('user.projects.mapa');

Route::get('/pqrsd', function(){
   return view('user.projects.pqrsd');
}) ->name('user.projects.pqrsd');

// Route::get('/Carcel', function(){
//    return view('user.projects.LandingCarcel');
// }) ->name('user.projects.LandingCarcel');

Route::get('/Carcel',[CarcelController::class, 'carcel'])->name('user.projects.LandingCarcel');

Route::post('/send-message',[CarcelController::class, 'sendEmail'])->name('contact.send');

Route::get('/proyectos/mudag',[MudagController::class, 'mudag'])->name('user.projects.mudag');

Route::post('/enviar-message',[MudagController::class, 'enviarEmail'])->name('contact.enviar');

Route::get('/nutibara', function(){
   return view('user.projects.nutibara');
}) ->name('user.projects.nutibara');





Auth::routes();

Route::get('/transparencia/app_medios', [MedioController::class, 'index'])->name('user.transparency.medios');
Route::get('/SIG_expediente', [SigController::class, 'index'])->name('SIG.index');

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])->name('panel');


Route::get('medios/lista', [MedioController::class, 'lista'])->name('medios.lista');
Route::get('medios/create', [MedioController::class, 'create'])->name('medios.create');
Route::get('medios/{id}/edit', [MedioController::class, 'edit'])->name('medios.edit');
Route::put('medios/{id}/update', [MedioController::class, 'update'])->name('medios.update');
Route::post('medios/index', [MedioController::class, 'store'])->name('medios.store');
Route::delete('medios/{id}', [MedioController::class, 'destroy'])->name('medios.destroy');


Route::get('SIG/lista', [SiController::class, 'lista'])->name('SIG.lista');
Route::get('SIG/create', [SiController::class, 'create'])->name('SIG.create');
Route::get('SIG/{id}/edit', [SiController::class, 'edit'])->name('SIG.edit');
Route::put('SIG/{id}/update', [SiController::class, 'update'])->name('SIG.update');
Route::post('SIG/index', [SiController::class, 'store'])->name('SIG.store');
Route::delete('SIG/{id}', [SiController::class, 'destroy'])->name('SIG.destroy');

});