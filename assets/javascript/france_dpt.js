/*
Plugin Name: France departements map
Plugin URI: http://blog.comersis.com/articles/SVG-Raphael-map/
Description: France departements map.
Version: fr-dpt-1.0215
Author: S.Marmion ©2014
Author URI: http://www.cmap.comersis.com
License: non-comercial
*/
		var mapfill = "#bababa";/* couleur origine */
		var mapoff = "#dddddd";
		var maphover_fill = "#d77a16";/* couleur survol */
		var mapstroke = "#ffffff";/* bordures */
		var mapstroke_width = 0.8;
		var mapWidth=500;
		var mapHeight=500;
		if (window.matchMedia("(max-width: 600px)").matches) {
		  /* La largeur minimum de l'affichage est 600 px inclus */
		  	var mapWidth=250;
			var mapHeight=250;
		} else {
		  /* L'affichage est inférieur à 600px de large */
		}
		

var paths = {

		Z1: {
				title: "Ain",
				coul: "#FF0000",
				url: "http://google.fr",
				target: "_self"
				},
				Z2: {
				title: "Aisne",
				coul: "#6699CC",
				url: "",
				target: "_self"
				},
				Z3: {
				title: "Allier",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z4: {
				title: "Alpes-de-Haute-Provence",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z5: {
				title: "Hautes-Alpes",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z6: {
				title: "Alpes-Maritimes",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z7: {
				title: "Ardèche",
				coul: "#33CCFF",
				url: "#",
				target: "_self",
				},
				Z8: {
				title: "Ardennes",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z9: {
				title: "Ariège",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z10: {
				title: "Aube",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z11: {
				title: "Aude",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z12: {
				title: "Aveyron",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z13: {
				title: "Bouches-du-Rhône",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z14: {
				title: "Calvados",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z15: {
				title: "Cantal",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z16: {
				title: "Charente",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z17: {
				title: "Charente-Maritime",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z18: {
				title: "Cher",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z19: {
				title: "Corrèze",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z2A: {
				title: "Corse-du-Sud",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z2B: {
				title: "Haute-Corse",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z21: {
				title: "Côte-d-Or",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z22: {
				title: "Côtes-d-Armor",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z23: {
				title: "Creuse",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z24: {
				title: "Dordogne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z25: {
				title: "Doubs",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z26: {
				title: "Drôme",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z27: {
				title: "Eure",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z28: {
				title: "Eure-et-Loir",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z29: {
				title: "Finistère",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z30: {
				title: "Gard",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z31: {
				title: "Haute-Garonne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z32: {
				title: "Gers",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z33: {
				title: "Gironde",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z34: {
				title: "Hérault",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z35: {
				title: "Ille-et-Vilaine",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z36: {
				title: "Indre",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z37: {
				title: "Indre-et-Loire",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z38: {
				title: "Isère",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z39: {
				title: "Jura",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z40: {
				title: "Landes",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z41: {
				title: "Loir-et-Cher",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z42: {
				title: "Loire",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z43: {
				title: "Haute-Loire",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z44: {
				title: "Loire-Atlantique",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z45: {
				title: "Loiret",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z46: {
				title: "Lot",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z47: {
				title: "Lot-et-Garonne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z48: {
				title: "Lozère",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z49: {
				title: "Maine-et-Loire",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z50: {
				title: "Manche",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z51: {
				title: "Marne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z52: {
				title: "Haute-Marne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z53: {
				title: "Mayenne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z54: {
				title: "Meurthe-et-Moselle",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z55: {
				title: "Meuse",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z56: {
				title: "Morbihan",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z57: {
				title: "Moselle",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z58: {
				title: "Nièvre",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z59: {
				title: "Nord",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z60: {
				title: "Oise",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z61: {
				title: "Orne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z62: {
				title: "Pas-de-Calais",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z63: {
				title: "Puy-de-Dôme",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z64: {
				title: "Pyrénées-Atlantiques",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z65: {
				title: "Hautes-Pyrénées",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z66: {
				title: "Pyrénées-Orientales",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z67: {
				title: "Bas-Rhin",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z68: {
				title: "Haut-Rhin",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z69: {
				title: "Rhône",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z70: {
				title: "Haute-Saône",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z71: {
				title: "Saône-et-Loire",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z72: {
				title: "Sarthe",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z73: {
				title: "Savoie",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z74: {
				title: "Haute-Savoie",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z75: {
				title: "Paris",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z76: {
				title: "Seine-Maritime",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z77: {
				title: "Seine-et-Marne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z78: {
				title: "Yvelines",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z79: {
				title: "Deux-Sèvres",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z80: {
				title: "Somme",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z81: {
				title: "Tarn",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z82: {
				title: "Tarn-et-Garonne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z83: {
				title: "Var",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z84: {
				title: "Vaucluse",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z85: {
				title: "Vendée",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z86: {
				title: "Vienne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z87: {
				title: "Haute-Vienne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z88: {
				title: "Vosges",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z89: {
				title: "Yonne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z90: {
				title: "Belfort",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z91: {
				title: "Essonne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z92: {
				title: "Hauts-de-Seine",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z93: {
				title: "Seine-Saint-Denis",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z94: {
				title: "Val-de-Marne",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				},
				Z95: {
				title: "Val-d-Oise",
				coul: "#6699CC",
				url: "#",
				target: "_self"
				}
	
	
	
}
/* ne rien modifier ci-dessous */