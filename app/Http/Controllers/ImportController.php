<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        $content = <<<CSV
16;01;051;3;Agurain/Salvatierra
16;01;001;4;Alegr�a-Dulantzi
16;01;002;9;Amurrio
16;01;049;3;A�ana
16;01;003;5;Aramaio
16;01;006;6;Armi��n
16;01;037;6;Arraia-Maeztu
16;01;008;8;Arratzua-Ubarrundia
16;01;004;0;Artziniega
16;01;009;1;Asparrena
16;01;010;5;Ayala/Aiara
16;01;011;2;Ba�os de Ebro/Ma�ueta
16;01;013;3;Barrundia
16;01;014;8;Berantevilla
16;01;016;4;Bernedo
16;01;017;0;Campezo/Kanpezu
16;01;021;0;Elburgo/Burgelu
16;01;022;5;Elciego
16;01;023;1;Elvillar/Bilar
16;01;046;8;Erriberagoitia/Ribera Alta
16;01;056;5;Harana/Valle de Arana
16;01;901;5;Iru�a Oka/Iru�a de Oca
16;01;027;8;Iruraiz-Gauna
16;01;019;9;Kripan
16;01;020;3;Kuartango
16;01;028;4;Labastida/Bastida
16;01;030;1;Lagr�n
16;01;031;8;Laguardia
16;01;032;3;Lanciego/Lantziego
16;01;902;0;Lantar�
10;46;237;8;Tavernes Blanques
10;46;238;4;Tavernes de la Valldigna
10;46;239;7;Teresa de Cofrentes
10;46;240;1;Terrateig
10;46;241;8;Titaguas
10;46;242;3;Torrebaja
10;46;243;9;Torrella
10;46;244;4;Torrent
10;46;245;7;Torres Torres
10;46;246;0;Tous
10;46;247;6;Tu�jar
10;46;248;2;Tur�s
10;46;249;5;Utiel
10;46;250;8;Valencia
10;46;251;5;Vallada
10;46;252;0;Vallanca
10;46;253;6;Vall�s
10;46;254;1;Venta del Moro
10;46;255;4;Vilallonga/Villalonga
10;46;256;7;Vilamarxant
10;46;257;3;Villanueva de Castell�n
10;46;258;9;Villar del Arzobispo
10;46;259;2;Villargordo del Cabriel
10;46;260;6;Vinalesa
10;46;145;8;X�tiva
10;46;143;0;Xeraco
10;46;146;1;Xeresa
10;46;110;8;Xirivella
10;46;261;3;Y�tova
10;46;262;8;Yesa, La
10;46;263;4;Zarra
07;47;001;4;Adalia
07;47;002;9;Aguasal
07;47;003;5;Aguilar de Campos
07;47;004;0;Alaejos
07;47;005;3;Alcazar�n
07;47;006;6;Aldea de San Miguel
07;47;007;2;Aldeamayor de San Mart�n
07;47;008;8;Almenara de Adaja
07;47;009;1;Amusquillo
07;47;010;5;Arroyo de la Encomienda
07;47;011;2;Ataquines
07;47;012;7;Bahab�n
07;47;013;3;Barcial de la Loma
07;47;014;8;Barruelo del Valle
07;47;015;1;Becilla de Valderaduey
07;47;016;4;Benafarces
07;47;017;0;Bercero
07;47;018;6;Berceruelo
07;47;019;9;Berrueces
07;47;020;3;Bobadilla del Campo
07;47;021;0;Bocigas
07;47;022;5;Bocos de Duero
07;47;023;1;Boecillo
07;47;024;6;Bola�os de Campos
07;47;025;9;Brahojos de Medina
07;47;026;2;Bustillo de Chaves
07;47;027;8;Cabez�n de Pisuerga
07;47;028;4;Cabez�n de Valderaduey
07;47;029;7;Cabreros del Monte
07;47;030;1;Campaspero
07;47;031;8;Campillo, El
07;47;032;3;Camporredondo
07;47;033;9;Canalejas de Pe�afiel
07;47;034;4;Canillas de Esgueva
07;47;035;7;Carpio
07;47;036;0;Casasola de Ari�n
07;47;037;6;Castrej�n de Trabancos
07;47;038;2;Castrillo de Duero
07;47;039;5;Castrillo-Tejeriego
07;47;040;9;Castrobol
07;47;041;6;Castrodeza
07;47;042;1;Castromembibre
07;47;043;7;Castromonte
07;47;044;2;Castronuevo de Esgueva
07;47;045;5;Castronu�o
07;47;046;8;Castroponce
07;47;047;4;Castroverde de Cerrato
07;47;048;0;Ceinos de Campos
07;47;049;3;Cervillego de la Cruz
07;47;050;6;Cigales
07;47;051;3;Cigu�uela
07;47;052;8;Cist�rniga
07;47;053;4;Cogeces de �scar
07;47;054;9;Cogeces del Monte
07;47;055;2;Corcos
07;47;056;5;Corrales de Duero
07;47;057;1;Cubillas de Santa Marta
07;47;058;7;Cuenca de Campos
07;47;059;0;Curiel de Duero
07;47;060;4;Encinas de Esgueva
07;47;061;1;Esguevillas de Esgueva
07;47;062;6;Fombellida
07;47;063;2;Fompedraza
07;47;064;7;Fontihoyuelo
07;47;065;0;Fresno el Viejo
07;47;066;3;Fuensalda�a
07;47;067;9;Fuente el Sol
07;47;068;5;Fuente-Olmedo
07;47;069;8;Gallegos de Hornija
07;47;070;2;Gat�n de Campos
07;47;071;9;Geria
07;47;073;0;Herr�n de Campos
07;47;074;5;Hornillos de Eresma
07;47;075;8;�scar
07;47;076;1;Laguna de Duero
07;47;077;7;Langayo
07;47;079;6;Llano de Olmedo
07;47;078;3;Lomoviejo
07;47;080;0;Manzanillo
07;47;081;7;Marzales
07;47;082;2;Matapozuelos
07;47;083;8;Matilla de los Ca�os
07;47;084;3;Mayorga
07;47;086;9;Medina de Rioseco
07;47;085;6;Medina del Campo
07;47;087;5;Megeces
07;47;088;1;Melgar de Abajo
07;47;089;4;Melgar de Arriba
07;47;090;8;Mojados
07;47;091;5;Monasterio de Vega
07;47;092;0;Montealegre de Campos
07;47;093;6;Montemayor de Pililla
07;47;094;1;Moral de la Reina
07;47;095;4;Moraleja de las Panaderas
07;47;096;7;Morales de Campos
07;47;097;3;Mota del Marqu�s
07;47;098;9;Mucientes
07;47;099;2;Mudarra, La
07;47;100;6;Muriel
07;47;101;3;Nava del Rey
07;47;102;8;Nueva Villa de las Torres
07;47;103;4;Olivares de Duero
07;47;104;9;Olmedo
07;47;105;2;Olmos de Esgueva
07;47;106;5;Olmos de Pe�afiel
07;47;109;0;Palazuelo de Vedija
07;47;110;4;Parrilla, La
07;47;111;1;Pedraja de Portillo, La
07;47;112;6;Pedrajas de San Esteban
07;47;113;2;Pedrosa del Rey
07;47;114;7;Pe�afiel
07;47;115;0;Pe�aflor de Hornija
07;47;116;3;Pesquera de Duero
07;47;117;9;Pi�a de Esgueva
07;47;118;5;Pi�el de Abajo
07;47;119;8;Pi�el de Arriba
07;47;121;9;Pollos
07;47;122;4;Portillo
07;47;123;0;Pozal de Gallinas
07;47;124;5;Pozaldez
07;47;125;8;Pozuelo de la Orden
07;47;126;1;Puras
07;47;127;7;Quintanilla de Arriba
07;47;129;6;Quintanilla de On�simo
07;47;130;0;Quintanilla de Trigueros
07;47;128;3;Quintanilla del Molar
07;47;131;7;R�bano
07;47;132;2;Ramiro
07;47;133;8;Renedo de Esgueva
07;47;134;3;Roales de Campos
07;47;135;6;Robladillo
07;47;137;5;Roturas
07;47;138;1;Rub� de Bracamonte
07;47;139;4;Rueda
07;47;140;8;Saelices de Mayorga
07;47;141;5;Salvador de Zapardiel
07;47;142;0;San Cebri�n de Mazote
07;47;143;6;San Llorente
07;47;144;1;San Mart�n de Valven�
07;47;145;4;San Miguel del Arroyo
07;47;146;7;San Miguel del Pino
07;47;147;3;San Pablo de la Moraleja
07;47;148;9;San Pedro de Latarce
07;47;149;2;San Pelayo
07;47;150;5;San Rom�n de Hornija
07;47;151;2;San Salvador
07;47;156;4;San Vicente del Palacio
07;47;152;7;Santa Eufemia del Arroyo
07;47;153;3;Santerv�s de Campos
07;47;154;8;Santib��ez de Valcorba
07;47;155;1;Santovenia de Pisuerga
07;47;157;0;Sard�n de Duero
07;47;158;6;Seca, La
07;47;159;9;Serrada
07;47;160;3;Siete Iglesias de Trabancos
07;47;161;0;Simancas
07;47;162;5;Tamariz de Campos
07;47;163;1;Tiedra
07;47;164;6;Tordehumos
07;47;165;9;Tordesillas
07;47;169;7;Torre de Esgueva
07;47;170;1;Torre de Pe�afiel
07;47;166;2;Torrecilla de la Abadesa
07;47;167;8;Torrecilla de la Orden
07;47;168;4;Torrecilla de la Torre
07;47;171;8;Torrelobat�n
07;47;172;3;Torresc�rcela
07;47;173;9;Traspinedo
07;47;174;4;Trigueros del Valle
07;47;175;7;Tudela de Duero
07;47;176;0;Uni�n de Campos, La
07;47;177;6;Urones de Castroponce
07;47;178;2;Urue�a
07;47;179;5;Valbuena de Duero
07;47;180;9;Valdearcos de la Vega
07;47;181;6;Valdenebro de los Valles
07;47;182;1;Valdestillas
07;47;183;7;Valdunquillo
07;47;186;8;Valladolid
07;47;184;2;Valoria la Buena
07;47;185;5;Valverde de Campos
07;47;187;4;Vega de Ruiponce
07;47;188;0;Vega de Valdetronco
07;47;189;3;Velasc�lvaro
07;47;190;7;Velilla
07;47;191;4;Velliza
07;47;192;9;Ventosa de la Cuesta
07;47;193;5;Viana de Cega
07;47;195;3;Villab��ez
07;47;196;6;Villabaruz de Campos
07;47;197;2;Villabr�gima
07;47;198;8;Villacarral�n
07;47;199;1;Villacid de Campos
07;47;200;5;Villaco
07;47;203;3;Villafrades de Campos
07;47;204;8;Villafranca de Duero
07;47;205;1;Villafrech�s
07;47;206;4;Villafuerte
07;47;207;0;Villagarc�a de Campos
07;47;208;6;Villag�mez la Nueva
07;47;209;9;Villal�n de Campos
07;47;210;3;Villalar de los Comuneros
07;47;211;0;Villalba de la Loma
07;47;212;5;Villalba de los Alcores
07;47;213;1;Villalbarba
07;47;214;6;Villal�n de Campos
07;47;215;9;Villamuriel de Campos
07;47;216;2;Vill�n de Tordesillas
07;47;217;8;Villanubla
07;47;218;4;Villanueva de Duero
07;47;219;7;Villanueva de la Condesa
07;47;220;1;Villanueva de los Caballeros
07;47;221;8;Villanueva de los Infantes
07;47;222;3;Villanueva de San Mancio
07;47;223;9;Villardefrades
07;47;224;4;Villarmentero de Esgueva
07;47;225;7;Villasexmir
07;47;226;0;Villavaquer�n
07;47;227;6;Villavellid
07;47;228;2;Villaverde de Medina
07;47;229;5;Villavicencio de los Caballeros
07;47;194;0;Viloria
07;47;230;9;Wamba
07;47;231;6;Zarat�n
07;47;232;1;Zarza, La
16;48;001;0;Abadi�o
16;48;002;5;Abanto y Ci�rvana-Abanto Zierbena
16;48;911;9;Ajangiz
16;48;912;4;Alonsotegi
16;48;003;1;Amorebieta-Etxano
16;48;004;6;Amoroto
16;48;005;9;Arakaldo
16;48;006;2;Arantzazu
16;48;093;2;Areatza
16;48;009;7;Arrankudiaga
16;48;914;5;Arratzu
16;48;010;1;Arrieta
16;48;011;8;Arrigorriaga
16;48;023;7;Artea
16;48;008;4;Artzentales
16;48;091;1;Atxondo
16;48;070;8;Aulesti
16;48;012;3;Bakio
16;48;090;4;Balmaseda
16;48;013;9;Barakaldo
16;48;014;4;Barrika
16;48;015;7;Basauri
16;48;092;6;Bedia
16;48;016;0;Berango
16;48;017;6;Bermeo
16;48;018;2;Berriatua
16;48;019;5;Berriz
16;48;020;9;Bilbao
16;48;021;6;Busturia
16;48;901;1;Derio
16;48;026;8;Dima
16;48;027;4;Durango
16;48;028;0;Ea
16;48;031;4;Elantxobe
16;48;032;9;Elorrio
16;48;902;6;Erandio
16;48;033;5;Ere�o
16;48;034;0;Ermua
16;48;079;2;Errigoiti
16;48;029;3;Etxebarri
16;48;030;7;Etxebarria
16;48;906;3;Forua
16;48;035;3;Fruiz
16;48;036;6;Galdakao
16;48;037;2;Galdames
16;48;038;8;Gamiz-Fika
16;48;039;1;Garai
16;48;040;5;Gatika
16;48;041;2;Gautegiz Arteaga
16;48;046;4;Gernika-Lumo
16;48;044;8;Getxo
16;48;047;0;Gizaburuaga
16;48;042;7;Gordexola
16;48;043;3;Gorliz
16;48;045;1;G�e�es
16;48;048;6;Ibarrangelu
16;48;094;7;Igorre
16;48;049;9;Ispaster
16;48;910;2;Iurreta
16;48;050;2;Izurtza
16;48;022;1;Karrantza Harana/Valle de Carranza
16;48;907;9;Kortezubi
16;48;051;9;Lanestosa
16;48;052;4;Larrabetzu
16;48;053;0;Laukiz
16;48;054;5;Leioa
16;48;057;7;Lekeitio
16;48;055;8;Lemoa
16;48;056;1;Lemoiz
16;48;081;3;Lezama
16;48;903;2;Loiu
16;48;058;3;Mallabia
16;48;059;6;Ma�aria
16;48;060;0;Markina-Xemein
16;48;061;7;Maruri-Jatabe
16;48;062;2;Mendata
16;48;063;8;Mendexa
16;48;064;3;Me�aka
16;48;066;9;Morga
16;48;068;1;Mundaka
16;48;069;4;Mungia
16;48;007;8;Munitibar-Arbatzegi Gerrikaitz
16;48;908;5;Murueta
16;48;071;5;Muskiz
16;48;067;5;Muxika
16;48;909;8;Nabarniz
16;48;073;6;Ondarroa
16;48;075;4;Orozko
16;48;083;4;Ortuella
16;48;072;0;Otxandio
16;48;077;3;Plentzia
16;48;078;9;Portugalete
16;48;082;8;Santurtzi
16;48;084;9;Sestao
16;48;904;7;Sondika
16;48;085;2;Sopela
16;48;086;5;Sopuerta
16;48;076;7;Sukarrieta
16;48;087;1;Trucios-Turtzioz
16;48;088;7;Ubide
16;48;065;6;Ugao-Miraballes
16;48;089;0;Urduliz
16;48;074;1;Urdu�a/Ordu�a
16;48;080;6;Valle de Tr�paga-Trapagaran
16;48;095;0;Zaldibar
16;48;096;3;Zalla
16;48;905;0;Zamudio
16;48;097;9;Zaratamo
16;48;024;2;Zeanuri
16;48;025;5;Zeberio
16;48;913;0;Zierbena
16;48;915;8;Ziortza-Bolibar
07;49;002;8;Abezames
07;49;003;4;Alca�ices
07;49;004;9;Alcubilla de Nogales
07;49;005;2;Alfaraz de Sayago
07;49;006;5;Algodre
07;49;007;1;Almaraz de Duero
07;49;008;7;Almeida de Sayago
07;49;009;0;Andav�as
07;49;010;4;Arcenillas
07;49;011;1;Arcos de la Polvorosa
07;49;012;6;Arga��n
07;49;013;2;Argujillo
07;49;014;7;Arquillinos
07;49;015;0;Arrabalde
07;49;016;3;Aspariegos
07;49;017;9;Asturianos
07;49;018;5;Ayo� de Vidriales
07;49;019;8;Barcial del Barco
07;49;020;2;Belver de los Montes
07;49;021;9;Benavente
07;49;022;4;Benegiles
07;49;023;0;Bermillo de Sayago
07;49;024;5;B�veda de Toro, La
07;49;025;8;Bret�
07;49;026;1;Bretocino
07;49;027;7;Brime de Sog
07;49;028;3;Brime de Urz
07;49;029;6;Burganes de Valverde
07;49;030;0;Bustillo del Oro
07;49;031;7;Caba�as de Sayago
07;49;032;2;Calzadilla de Tera
07;49;033;8;Camarzana de Tera
07;49;034;3;Ca�izal
07;49;035;6;Ca�izo
07;49;036;9;Carbajales de Alba
07;49;037;5;Carbellino
07;49;038;1;Casaseca de Campe�n
07;49;039;4;Casaseca de las Chanas
07;49;040;8;Castrillo de la Guare�a
07;49;041;5;Castrogonzalo
07;49;042;0;Castronuevo
07;49;043;6;Castroverde de Campos
07;49;044;1;Cazurra
07;49;046;7;Cerecinos de Campos
07;49;047;3;Cerecinos del Carrizal
07;49;048;9;Cernadilla
07;49;050;5;Cobreros
07;49;052;7;Coomonte
07;49;053;3;Coreses
07;49;054;8;Corrales del Vino
07;49;055;1;Cotanes del Monte
07;49;056;4;Cubillos
07;49;057;0;Cubo de Benavente
07;49;058;6;Cubo de Tierra del Vino, El
07;49;059;9;Cuelgamures
07;49;061;0;Entrala
07;49;062;5;Espada�edo
07;49;063;1;Faramontanos de T�bara
07;49;064;6;Fariza
07;49;065;9;Fermoselle
07;49;066;2;Ferreras de Abajo
07;49;067;8;Ferreras de Arriba
07;49;068;4;Ferreruela
07;49;069;7;Figueruela de Arriba
07;49;071;8;Fonfr�a
07;49;075;7;Fresno de la Polvorosa
07;49;076;0;Fresno de la Ribera
07;49;077;6;Fresno de Sayago
07;49;078;2;Friera de Valverde
07;49;079;5;Fuente Encalada
07;49;080;9;Fuentelape�a
07;49;082;1;Fuentes de Ropel
07;49;081;6;Fuentesa�co
07;49;083;7;Fuentesecas
07;49;084;2;Fuentespreadas
07;49;085;5;Galende
07;49;086;8;Gallegos del Pan
07;49;087;4;Gallegos del R�o
07;49;088;0;Gamones
07;49;090;7;Gema
07;49;091;4;Granja de Moreruela
07;49;092;9;Granucillo
07;49;093;5;Guarrate
07;49;094;0;Hermisende
07;49;095;3;Hiniesta, La
07;49;096;6;Jambrina
07;49;097;2;Justel
07;49;098;8;Losacino
07;49;099;1;Losacio
07;49;100;5;Lubi�n
07;49;101;2;Luelmo
07;49;102;7;Maderal, El
07;49;103;3;Madridanos
07;49;104;8;Mahide
07;49;105;1;Maire de Castroponce
07;49;107;0;Malva
07;49;108;6;Manganeses de la Lampreana
07;49;109;9;Manganeses de la Polvorosa
07;49;110;3;Manzanal de Arriba
07;49;112;5;Manzanal de los Infantes
07;49;111;0;Manzanal del Barco
07;49;113;1;Matilla de Arz�n
07;49;114;6;Matilla la Seca
07;49;115;9;Mayalde
07;49;116;2;Melgar de Tera
07;49;117;8;Micereces de Tera
07;49;118;4;Milles de la Polvorosa
07;49;119;7;Molacillos
07;49;120;1;Molezuelas de la Carballeda
07;49;121;8;Mombuey
07;49;122;3;Monfarracinos
07;49;123;9;Montamarta
07;49;124;4;Moral de Sayago
07;49;126;0;Moraleja de Sayago
07;49;125;7;Moraleja del Vino
07;49;128;2;Morales de Rey
07;49;129;5;Morales de Toro
07;49;130;9;Morales de Valverde
07;49;127;6;Morales del Vino
07;49;131;6;Moralina
07;49;132;1;Moreruela de los Infanzones
07;49;133;7;Moreruela de T�bara
07;49;134;2;Muelas de los Caballeros
07;49;135;5;Muelas del Pan
07;49;136;8;Muga de Sayago
07;49;137;4;Navianos de Valverde
07;49;138;0;Olmillos de Castro
07;49;139;3;Otero de Bodas
07;49;141;4;Pajares de la Lampreana
07;49;143;5;Palacios de Sanabria
07;49;142;9;Palacios del Pan
07;49;145;3;Pedralba de la Prader�a
07;49;146;6;Pego, El
07;49;147;2;Peleagonzalo
07;49;148;8;Peleas de Abajo
07;49;149;1;Pe�ausende
07;49;150;4;Peque
07;49;151;1;Perdig�n, El
07;49;152;6;Pereruela
07;49;153;2;Perilla de Castro
07;49;154;7;P�as
07;49;155;0;Piedrahita de Castro
07;49;156;3;Pinilla de Toro
07;49;157;9;Pino del Oro
07;49;158;5;Pi�ero, El
07;49;160;2;Pobladura de Valderaduey
07;49;159;8;Pobladura del Valle
07;49;162;4;Porto
07;49;163;0;Pozoantiguo
07;49;164;5;Pozuelo de T�bara
07;49;165;8;Prado
07;49;166;1;Puebla de Sanabria
07;49;167;7;Pueblica de Valverde
07;49;170;0;Quintanilla de Urz
07;49;168;3;Quintanilla del Monte
07;49;169;6;Quintanilla del Olmo
07;49;171;7;Quiruelas de Vidriales
07;49;172;2;Rabanales
07;49;173;8;R�bano de Aliste
07;49;174;3;Requejo
07;49;175;6;Revellinos
07;49;176;9;Riofr�o de Aliste
07;49;177;5;Rionegro del Puente
07;49;178;1;Roales
07;49;179;4;Robleda-Cervantes
07;49;180;8;Roelos de Sayago
07;49;181;5;Rosinos de la Requejada
07;49;183;6;Salce
07;49;184;1;Samir de los Ca�os
07;49;185;4;San Agust�n del Pozo
07;49;186;7;San Cebri�n de Castro
07;49;187;3;San Crist�bal de Entrevi�as
07;49;188;9;San Esteban del Molar
07;49;189;2;San Justo
07;49;190;6;San Mart�n de Valderaduey
07;49;191;3;San Miguel de la Ribera
07;49;192;8;San Miguel del Valle
07;49;193;4;San Pedro de Ceque
07;49;194;9;San Pedro de la Nave-Almendra
07;49;208;5;San Vicente de la Cabeza
07;49;209;8;San Vitero
07;49;197;1;Santa Clara de Avedillo
07;49;199;0;Santa Colomba de las Monjas
07;49;200;4;Santa Cristina de la Polvorosa
07;49;201;1;Santa Croya de Tera
07;49;202;6;Santa Eufemia del Barco
07;49;203;2;Santa Mar�a de la Vega
07;49;204;7;Santa Mar�a de Valverde
07;49;205;0;Santib��ez de Tera
07;49;206;3;Santib��ez de Vidriales
07;49;207;9;Santovenia
07;49;210;2;Sanzoles
07;49;214;5;T�bara
07;49;216;1;Tapioles
07;49;219;6;Toro
07;49;220;0;Torre del Valle, La
07;49;221;7;Torregamones
07;49;222;2;Torres del Carrizal
07;49;223;8;Trabazos
07;49;224;3;Trefacio
07;49;225;6;U�a de Quintana
07;49;226;9;Vadillo de la Guare�a
07;49;227;5;Valcabado
07;49;228;1;Valdefinjas
07;49;229;4;Valdescorriel
07;49;230;8;Vallesa de la Guare�a
07;49;231;5;Vega de Tera
07;49;232;0;Vega de Villalobos
07;49;233;6;Vegalatrave
07;49;234;1;Venialbo
07;49;235;4;Vezdemarb�n
07;49;236;7;Vidayanes
07;49;237;3;Videmala
07;49;238;9;Villabr�zaro
07;49;239;2;Villabuena del Puente
07;49;240;6;Villadepera
07;49;241;3;Villaescusa
07;49;242;8;Villaf�fila
07;49;243;4;Villaferrue�a
07;49;244;9;Villageriz
07;49;245;2;Villalaz�n
07;49;246;5;Villalba de la Lampreana
07;49;247;1;Villalcampo
07;49;248;7;Villalobos
07;49;249;0;Villalonso
07;49;250;3;Villalpando
07;49;251;0;Villalube
07;49;252;5;Villamayor de Campos
07;49;255;9;Villamor de los Escuderos
07;49;256;2;Villan�zar
07;49;257;8;Villanueva de Azoague
07;49;258;4;Villanueva de Campe�n
07;49;259;7;Villanueva de las Peras
07;49;260;1;Villanueva del Campo
07;49;263;9;Villar de Fallaves
07;49;264;4;Villar del Buey
07;49;261;8;Villaralbo
07;49;262;3;Villardeciervos
07;49;265;7;Villardiegua de la Ribera
07;49;266;0;Vill�rdiga
07;49;267;6;Villardondiego
07;49;268;2;Villarr�n de Campos
07;49;269;5;Villaseco del Pan
07;49;270;9;Villavendimio
07;49;272;1;Villaveza de Valverde
07;49;271;6;Villaveza del Agua
07;49;273;7;Vi�as
07;49;275;5;Zamora
02;50;001;6;Abanto
02;50;002;1;Acered
02;50;003;7;Ag�n
02;50;004;2;Aguar�n
02;50;005;5;Aguil�n
02;50;006;8;Ainz�n
02;50;007;4;Aladr�n
02;50;008;0;Alag�n
02;50;009;3;Alarba
02;50;010;7;Alberite de San Juan
02;50;011;4;Albeta
02;50;012;9;Alborge
02;50;013;5;Alcal� de Ebro
02;50;014;0;Alcal� de Moncayo
02;50;015;3;Alconchel de Ariza
02;50;016;6;Aldehuela de Liestos
02;50;017;2;Alfajar�n
02;50;018;8;Alfam�n
02;50;019;1;Alforque
02;50;020;5;Alhama de Arag�n
02;50;021;2;Almochuel
02;50;022;7;Almolda, La
02;50;023;3;Almonacid de la Cuba
02;50;024;8;Almonacid de la Sierra
02;50;025;1;Almunia de Do�a Godina, La
02;50;026;4;Alpartir
02;50;027;0;Ambel
02;50;028;6;Anento
02;50;029;9;Ani��n
02;50;030;3;A��n de Moncayo
02;50;031;0;Aranda de Moncayo
02;50;032;5;Ar�ndiga
02;50;033;1;Ardisa
02;50;034;6;Ariza
02;50;035;9;Artieda
02;50;036;2;As�n
02;50;037;8;Atea
02;50;038;4;Ateca
02;50;039;7;Azuara
02;50;040;1;Badules
02;50;041;8;Bag��s
02;50;042;3;Balconch�n
02;50;043;9;B�rboles
02;50;044;4;Bardallur
02;50;045;7;Belchite
02;50;046;0;Belmonte de Graci�n
02;50;047;6;Berdejo
02;50;048;2;Berrueco
02;50;901;7;Biel
02;50;050;8;Bijuesca
02;50;051;5;Biota
02;50;052;0;Bisimbre
02;50;053;6;Boqui�eni
02;50;054;1;Bordalba
02;50;055;4;Borja
02;50;056;7;Botorrita
02;50;057;3;Brea de Arag�n
02;50;058;9;Bubierca
02;50;059;2;Bujaraloz
02;50;060;6;Bulbuente
02;50;061;3;Bureta
02;50;062;8;Burgo de Ebro, El
02;50;063;4;Buste, El
02;50;064;9;Caba�as de Ebro
02;50;065;2;Cabolafuente
02;50;066;5;Cadrete
02;50;067;1;Calatayud
02;50;068;7;Calatorao
02;50;069;0;Calcena
02;50;070;4;Calmarza
02;50;071;1;Campillo de Arag�n
02;50;072;6;Carenas
02;50;073;2;Cari�ena
02;50;074;7;Caspe
02;50;075;0;Castej�n de Alarba
02;50;076;3;Castej�n de las Armas
02;50;077;9;Castej�n de Valdejasa
02;50;078;5;Castiliscar
02;50;079;8;Cervera de la Ca�ada
02;50;080;2;Cerveruela
02;50;081;9;Cetina
02;50;092;2;Chiprana
02;50;093;8;Chodes
02;50;082;4;Cimballa
02;50;083;0;Cinco Olivas
02;50;084;5;Clar�s de Ribota
02;50;085;8;Codo
02;50;086;1;Codos
02;50;087;7;Contamina
02;50;088;3;Cosuenda
02;50;089;6;Cuarte de Huerva
02;50;090;0;Cubel
02;50;091;7;Cuerlas, Las
02;50;094;3;Daroca
02;50;095;6;Ejea de los Caballeros
02;50;096;9;Embid de Ariza
02;50;098;1;Encinacorba
02;50;099;4;�pila
02;50;100;8;Erla
02;50;101;5;Escatr�n
02;50;102;0;Fabara
02;50;104;1;Farlete
02;50;105;4;Fay�n
02;50;106;7;Fayos, Los
02;50;107;3;Figueruelas
02;50;108;9;Fombuena
02;50;109;2;Frago, El
02;50;110;6;Frasno, El
02;50;111;3;Fr�scano
02;50;113;4;Fuendejal�n
02;50;114;9;Fuendetodos
02;50;115;2;Fuentes de Ebro
02;50;116;5;Fuentes de Jiloca
02;50;117;1;Gallocanta
02;50;118;7;Gallur
02;50;119;0;Gelsa
02;50;120;4;Godojos
02;50;121;1;Gotor
02;50;122;6;Grisel
02;50;123;2;Gris�n
02;50;124;7;Herrera de los Navarros
02;50;125;0;Ibdes
02;50;126;3;Illueca
02;50;128;5;Isuerre
02;50;129;8;Jaraba
02;50;130;2;Jarque
02;50;131;9;Jaul�n
02;50;132;4;Joyosa, La
02;50;133;0;Lagata
02;50;134;5;Langa del Castillo
02;50;135;8;Layana
02;50;136;1;L�cera
02;50;138;3;Lech�n
02;50;137;7;Leci�ena
02;50;139;6;Letux
02;50;140;0;Litago
02;50;141;7;Litu�nigo
02;50;142;2;Lobera de Onsella
02;50;143;8;Longares
02;50;144;3;Long�s
02;50;146;9;Lucena de Jal�n
02;50;147;5;Luceni
02;50;148;1;Luesia
02;50;149;4;Luesma
02;50;150;7;Lumpiaque
02;50;151;4;Luna
02;50;152;9;Maella
02;50;153;5;Magall�n
02;50;154;0;Mainar
02;50;155;3;Malanquilla
02;50;156;6;Malej�n
02;50;160;5;Mall�n
02;50;157;2;Mal�n
02;50;159;1;Maluenda
02;50;161;2;Manchones
02;50;162;7;Mara
02;50;163;3;Mar�a de Huerva
02;50;902;2;Marracos
02;50;164;8;Mediana de Arag�n
02;50;165;1;Mequinenza
02;50;166;4;Mesones de Isuela
02;50;167;0;Mezalocha
02;50;168;6;Mianos
02;50;169;9;Miedes de Arag�n
02;50;170;3;Monegrillo
02;50;171;0;Moneva
02;50;172;5;Monreal de Ariza
02;50;173;1;Monterde
02;50;174;6;Mont�n
02;50;175;9;Morata de Jal�n
02;50;176;2;Morata de Jiloca
02;50;177;8;Mor�s
02;50;178;4;Moros
02;50;179;7;Moyuela
02;50;180;1;Mozota
02;50;181;8;Muel
02;50;182;3;Muela, La
02;50;183;9;Mun�brega
02;50;184;4;Murero
02;50;185;7;Murillo de G�llego
02;50;186;0;Navard�n
02;50;187;6;Nig�ella
02;50;188;2;Nombrevilla
02;50;189;5;Nonaspe
02;50;190;9;Novallas
02;50;191;6;Novillas
02;50;192;1;Nu�valos
02;50;193;7;Nuez de Ebro
02;50;194;2;Olv�s
02;50;195;5;Orcajo
02;50;196;8;Orera
02;50;197;4;Or�s
02;50;198;0;Oseja
02;50;199;3;Osera de Ebro
02;50;200;7;Paniza
02;50;201;4;Paracuellos de Jiloca
02;50;202;9;Paracuellos de la Ribera
02;50;203;5;Pastriz
02;50;204;0;Pedrola
02;50;205;3;Pedrosas, Las
02;50;206;6;Perdiguera
02;50;207;2;Piedratajada
02;50;208;8;Pina de Ebro
02;50;209;1;Pinseque
02;50;210;5;Pintanos, Los
02;50;211;2;Plasencia de Jal�n
02;50;212;7;Pleitas
02;50;213;3;Plenas
02;50;214;8;Pomer
02;50;215;1;Pozuel de Ariza
02;50;216;4;Pozuelo de Arag�n
02;50;217;0;Pradilla de Ebro
02;50;218;6;Puebla de Albort�n
02;50;219;9;Puebla de Alfind�n, La
02;50;220;3;Puendeluna
02;50;221;0;Purujosa
02;50;222;5;Quinto
02;50;223;1;Remolinos
02;50;224;6;Retasc�n
02;50;225;9;Ricla
02;50;227;8;Romanos
02;50;228;4;Rueda de Jal�n
02;50;229;7;Ruesca
02;50;241;6;Sabi��n
02;50;230;1;S�daba
02;50;231;8;Salillas de Jal�n
02;50;232;3;Salvatierra de Esca
02;50;233;9;Samper del Salz
02;50;234;4;San Mart�n de la Virgen de Moncayo
02;50;235;7;San Mateo de G�llego
02;50;236;0;Santa Cruz de Gr�o
02;50;237;6;Santa Cruz de Moncayo
02;50;238;2;Santa Eulalia de G�llego
02;50;239;5;Santed
02;50;240;9;S�stago
02;50;242;1;Sediles
02;50;243;7;Sestrica
02;50;244;2;Sierra de Luna
02;50;245;5;Sig��s
02;50;246;8;Sisam�n
02;50;247;4;Sobradiel
02;50;248;0;Sos del Rey Cat�lico
02;50;249;3;Tabuenca
02;50;250;6;Talamantes
02;50;251;3;Tarazona
02;50;252;8;Tauste
02;50;253;4;Terrer
02;50;254;9;Tierga
02;50;255;2;Tobed
02;50;256;5;Torralba de los Frailes
02;50;257;1;Torralba de Ribota
02;50;258;7;Torralbilla
02;50;259;0;Torrehermosa
02;50;260;4;Torrelapaja
02;50;261;1;Torrellas
02;50;262;6;Torres de Berrell�n
02;50;263;2;Torrijo de la Ca�ada
02;50;264;7;Tosos
02;50;265;0;Trasmoz
02;50;266;3;Trasobares
02;50;267;9;Uncastillo
02;50;268;5;Undu�s de Lerda
02;50;269;8;Urrea de Jal�n
02;50;270;2;Urri�s
02;50;271;9;Used
02;50;272;4;Utebo
02;50;274;5;Val de San Mart�n
02;50;273;0;Valdehorna
02;50;275;8;Valmadrid
02;50;276;1;Valpalmas
02;50;277;7;Valtorres
02;50;278;3;Velilla de Ebro
02;50;279;6;Velilla de Jiloca
02;50;280;0;Vera de Moncayo
02;50;281;7;Vierlas
02;50;283;8;Villadoz
02;50;284;3;Villafeliche
02;50;285;6;Villafranca de Ebro
02;50;286;9;Villalba de Perejil
02;50;287;5;Villalengua
02;50;903;8;Villamayor de G�llego
02;50;288;1;Villanueva de G�llego
02;50;290;8;Villanueva de Huerva
02;50;289;4;Villanueva de Jiloca
02;50;291;5;Villar de los Navarros
02;50;292;0;Villarreal de Huerva
02;50;293;6;Villarroya de la Sierra
02;50;294;1;Villarroya del Campo
02;50;282;2;Vilue�a, La
02;50;295;4;Vistabella
02;50;296;7;Zaida, La
02;50;297;3;Zaragoza
02;50;298;9;Zuera
18;51;001;3;Ceuta
19;52;001;8;Melilla

CSV;
        $csv = explode('\n', $content);
        foreach ($csv as $item) {
            echo $item . '<hr />';
        }
    }
}
