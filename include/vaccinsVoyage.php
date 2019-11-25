<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Partir en voyage</title>
    <style type="text/css">
        body {
            color: #5d5d5d;
            font-family: Helvetica, Arial, sans-serif;
        }

        h1 {
            font-size: 30px;
            margin: auto;
            margin-top: 50px;
        }

        .container {
            max-width: 1500px;
            margin: auto;
        }

        /* Specific mapael css class are below
         * 'mapael' class is added by plugin
        */

        .mapael .map {
            position: relative;
        }

        .mapael .mapTooltip {
            position: absolute;
            background-color: #fff;
            moz-opacity: 0.70;
            opacity: 0.70;
            filter: alpha(opacity=70);
            border-radius: 10px;
            padding: 10px;
            z-index: 1000;
            max-width: 200px;
            display: none;
            color: #343434;
        }

        .mapael .areaLegend {
            margin-bottom: 20px;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
            charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
    <script src="../assets/js/jQuery-Mapael-2.2.0/js/jquery.mapael.js" charset="utf-8"></script>
    <script src="../assets/js/jQuery-Mapael-2.2.0/js/maps/world_countries.js" charset="utf-8"></script>


    <script type="text/javascript">
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "world_countries",
                    defaultArea: {
                        attrs: {
                            stroke: "#fff",
                            "stroke-width": 1
                        }
                    }
                },
                legend: {
                    area: {
                        mode: "horizontal",
                        title: "Countries desease",
                        labelAttrs: {
                            "font-size": 12
                        },
                        marginLeft: 5,
                        marginLeftLabel: 5,
                        slices: [
                            {
                                max: 5000000,
                                attrs: {
                                    fill: "#6aafe1"
                                },
                                label: "< 5 millions"
                            },
                            {
                                min: 5000000,
                                max: 10000000,
                                attrs: {
                                    fill: "#459bd9"
                                },
                                label: "> 5 millions and < 10 millions"
                            },
                            {
                                min: 10000000,
                                max: 50000000,
                                attrs: {
                                    fill: "#2579b5"
                                },
                                label: "> 10 millions and < 50 millions"
                            },
                            {
                                min: 50000000,
                                attrs: {
                                    fill: "#1a527b"
                                },
                                label: "> 50 millions"
                            }
                        ]
                    },
                    plot: {
                        labelAttrs: {
                            "font-size": 12
                        },
                        marginLeft: 5,
                        marginLeftLabel: 5,

                    }
                },

                areas: {
                    "AF": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme",
                        "attrs": {
                            "href": "#"
                        },
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Afghanistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme"
                        }
                    },
                    "ZA": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Afrique du Sud<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme"
                        }
                    },
                    "AL": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Albanie<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite à tiques"
                        }
                    },
                    "DZ": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Algerie<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme"
                        }
                    },
                    "DE": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Allemagne<\/span><br \/>"
                        }
                    },
                    "AD": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Andorre<\/span><br \/>"
                        }
                    },
                    "AO": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Angola<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Fièvre jaune"
                        }
                    },
                    "AG": {
                        "value": "Hépatite A, Hépatite B,Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Antigue<\/span><br \/>Maladies : Hépatite A, Hépatite B,Tiphoïde"
                        }
                    },
                    "SA": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Arabie Saoudite<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Méningite à méningocoques"
                        }
                    },
                    "AR": {
                        "value": "Hépatite A, Hépatite B, rage, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Argentine<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Paludisme, Fièvre jaune"
                        }
                    },
                    "AM": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Armenie<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde"
                        }
                    },
                    "AU": {
                        "value": "Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Australie<\/span><br \/>Maladies : Encéphalite japonaise"
                        }
                    },
                    "AT": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Autriche<\/span><br \/>"
                        }
                    },
                    "AZ": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Azerbaïdjan<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme"
                        }
                    },
                    "BS": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bahamas<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "BH": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bahrain<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde"
                        }
                    },
                    "BD": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bangladesh<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "BB": {
                        "value": "Hépatite A, Hépatite B,Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Barbade<\/span><br \/>Maladies : Hépatite A, Hépatite B,Tiphoïde"
                        }
                    },
                    "BE": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Belgique<\/span><br \/>"
                        }
                    },
                    "BZ": {
                        "value": "Hépatite A, Hépatite B,Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Belize<\/span><br \/>Maladies : Hépatite A, Hépatite B,Tiphoïde"
                        }
                    },
                    "BJ": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à Méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Benin<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à Méningocoques"
                        }
                    },
                    "BT": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bhoutan<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "BY": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Biélorussie<\/span><br \/>Maladies : Hépatite A, Hépatite B, rage, Tiphoïde"
                        }
                    },

                    "BO": {
                        "value": "Hépatite A, Hépatite B, rage, Tiphoïde, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bolivie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune"
                        }
                    },
                    "BA": {
                        "value": "Hépatite A, Hépatite B",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bosnie<\/span><br \/>Maladies : Hépatite A, Hépatite B"
                        }
                    },
                    "BW": {
                        "value": ": Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Botswana<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },
                    "BR": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Brésil<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune"
                        }
                    },

                    "BG": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Bulgarie<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite à tiques"
                        }
                    },
                    "BF": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Burkina Faso<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune"
                        }
                    },
                    "BI": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Burundi<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Méningite à méningocoques"
                        }
                    },
                    "KH": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Cambodge<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite japonaise"
                        }
                    },
                    "CM": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Cameroun<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune"
                        }
                    },
                    "CA": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Canada<\/span><br \/>"
                        }
                    },

                    "CF": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centre-Afrique<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "CL": {
                        "value": "Hépatite A, Rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Chili<\/span><br \/>Maladies : Hépatite A, Rage, Tiphoïde "
                        }
                    },
                    "CN": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite à tiques, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Chine<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Encéphalite à tiques, Encéphalite japonaise"
                        }
                    },
                    "CY": {
                        "value": "Hépatite A",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Chypre<\/span><br \/>Maladies : Hépatite A"
                        }
                    },
                    "CO": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Colombie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme"
                        }
                    },
                    "KM": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Comores<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Paludisme"
                        }
                    },
                    "CG": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Congo<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme"
                        }
                    },
                    "CD": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">République Démocratique du Congo<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde,Fièvre jaune, Paludisme"
                        }
                    },
                    "KP": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Corée du Nord<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "KR": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Corée du Sud<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "CR": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Costa Rica<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde"
                        }
                    },
                    "CI": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Cote D'ivoire<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques "
                        }
                    },
                    "HR": {
                        "value": "Hépatite A",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Croatie<\/span><br \/>Maladies : Hépatite A"
                        }
                    },
                    "CU": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Cuba<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde"
                        }
                    },
                    "DK": {
                        "value": "Eucéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Danemark<\/span><br \/>Maladies : Eucéphalite à tiques"
                        }
                    },
                    "DJ": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Djibouti<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },

                    "EG": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Egypte<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde"
                        }
                    },
                    "AE": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Emirats Arabes Unis<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde"
                        }
                    },
                    "EC": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Equateur<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Fièvre jaune"
                        }
                    },
                    "ER": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Erythree<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },
                    "ES": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Espagne<\/span><br \/>"
                        }
                    },
                    "EE": {
                        "value": "Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Estonie<\/span><br \/>Maladies : Encéphalite à tiques"
                        }
                    },
                    "US": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Etats Unis<\/span><br \/>"
                        }
                    },
                    "ET": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ethiopie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "FJ": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Fidji<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "FI": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Finlande<\/span><br \/>"
                        }
                    },
                    "FR": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">France<\/span><br \/>"
                        }
                    },
                    "GA": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Gabon<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Fièvre jaune"
                        }
                    },
                    "GM": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Gambie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "GE": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Georgie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "GH": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ghana<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "GR": {
                        "value": "Hépatite A",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Grece<\/span><br \/>Maladies : Hépatite A"
                        }
                    },
                    "GD": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Grenade<\/span><br \/>"
                        }
                    },
                    "GT": {
                        "value": " Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Guatemala<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },
                    "GN": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Guinee<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "GQ": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Guinee Equatoriale<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "GW": {
                        "value": "Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Guinee-Konakry<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "GY": {
                        "value": " Hépatite A, Hépatite B, Rage, Tiphoïde, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Guyane<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Fièvre jaune"
                        }
                    },
                    "HT": {
                        "value": " Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Haiti<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },
                    "HN": {
                        "value": " Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Honduras<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Rage, Tiphoïde, Paludisme"
                        }
                    },
                    "HU": {
                        "value": "Hépatite A, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hongrie<\/span><br \/>Maladies : Hépatite A, Encéphalite à tiques"
                        }
                    },
                    "JM": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jamaique<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "JP": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Japon<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise"
                        }
                    },

                    "IN": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise, rage, paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Inde<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise, rage, paludisme"
                        }
                    },
                    "ID": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise, rage, paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Indonesie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Encéphalite japonaise, rage, paludisme"
                        }
                    },
                    "JO": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Jordanie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "IR": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Iran<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "IQ": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Irak<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "IE": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Irlande<\/span><br \/>"
                        }
                    },
                    "IS": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Islande<\/span><br \/>"
                        }
                    },
                    "IL": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Israel<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "IT": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Italie<\/span><br \/>"
                        }
                    },
                    "KZ": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Kazakhstan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "KE": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Fièvre jaune, paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Kenya<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Fièvre jaune, paludisme"
                        }
                    },
                    "KG": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Kirghizistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "KI": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Kiribati<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "KW": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Kowait<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "LA": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite japonaise, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Laos<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite japonaise, Paludisme"
                        }
                    },
                    "LS": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Lesotho<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Méningite à méningocoques"
                        }
                    },
                    "LV": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Lettonie<\/span><br \/>"
                        }
                    },
                    "LB": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Liban<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "LR": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Liberia<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune"
                        }
                    },
                    "LY": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Libye<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "LI": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Liechtenstein<\/span><br \/>"
                        }
                    },
                    "LT": {
                        "value": "Hépatite A, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Lituanie<\/span><br \/>Maladies : Hépatite A, Encéphalite à tiques"
                        }
                    },
                    "LU": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Luxembourg<\/span><br \/>"
                        }
                    },
                    "MK": {
                        "value": "Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Macedoine<\/span><br \/>Maladies : Encéphalite à tiques"
                        }
                    },
                    "MG": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Madagascar<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "MY": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Malaisie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "MW": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Malawi<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "MV": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Maldives<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "ML": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Mali<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "MT": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Malte<\/span><br \/>"
                        }
                    },
                    "MA": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Maroc<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage"
                        }
                    },
                    "MU": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ile Maurice<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "MR": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Mauritanie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Fièvre jaune, Méningite à méningocoques"
                        }
                    },
                    "MX": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Mexique<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "FM": {
                        "value": " Hépatite A, Hépatite B, Tiphoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Micronesie<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Tiphoïde"
                        }
                    },
                    "MD": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moldavie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "MC": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Monaco<\/span><br \/>"
                        }
                    },
                    "MN": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Mongolie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "ME": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Montenegro<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "MZ": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Mozambique<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "NA": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Namibie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "NP": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nepal<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "NI": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nicaragua<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme"
                        }
                    },
                    "NE": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Niger<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Méningite à méningocoques"
                        }
                    },
                    "NG": {
                        "value": "Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nigeria<\/span><br \/>Maladies : Hépatite A, Hépatite B, Tiphoïde, Rage, Paludisme, Méningite à méningocoques"
                        }
                    },
                    "NO": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Norvège<\/span><br \/>"
                        }
                    },
                    "NZ": {
                        "value": "Hépatite A, Hépatite B, Typhoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Nouvelle-Zelande<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde"
                        }
                    },
                    "OM": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Oman<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme"
                        }
                    },
                    "UG": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ouganda<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune"
                        }
                    },
                    "UZ": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ouzbekistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage"
                        }
                    },
                    "PK": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Pakistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "PS": {
                        "value": "Hépatite A, Hépatite B, Typhoïde",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Palestine<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde"
                        }
                    },
                    "PA": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Panama<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune"
                        }
                    },
                    "PG": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Papua Nouvelle Guine<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "PY": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Paraguay<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme"
                        }
                    },
                    "NL": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Pays-Bas<\/span><br \/>"
                        }
                    },
                    "PE": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Perou<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Fièvre jaune"
                        }
                    },
                    "PH": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Philippines<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "PL": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Pologne<\/span><br \/>"
                        }
                    },
                    "PT": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Portugal<\/span><br \/>"
                        }
                    },
                    "QA": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Qatar<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage"
                        }
                    },
                    "DO": {
                        "value": " Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\"> Republique Dominicaine<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme"
                        }
                    },
                    "RO": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Roumanie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "GB": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Royaume Uni<\/span><br \/>"
                        }
                    },
                    "RU": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Russie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques"
                        }
                    },
                    "RW": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Rwanda<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Paludisme"
                        }
                    },

                    "SV": {
                        "value": " Hépatite A, Hépatite B, Typhoïde, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">El Salvador<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Typhoïde, Rage"
                        }
                    },
                    "WS": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Samoa<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Encéphalite japonaise"
                        }
                    },

                    "SN": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Senegal<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune"
                        }
                    },
                    "RS": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Serbie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite à tiques"
                        }
                    },

                    "SG": {
                        "value": "5183700",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Singapour<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Encéphalite japonaise"
                        }
                    },
                    "SK": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Slovaquie<\/span><br \/>"
                        }
                    },
                    "SI": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Slovenie<\/span><br \/>"
                        }
                    },
                    "SO": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Somalie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques, Fièvre jaune"
                        }
                    },
                    "SD": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Soudan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques"
                        }
                    },
                    "SS": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Soudan du sud<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques"
                        }
                    },
                    "LK": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Sri Lanka<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Rage, Encéphalite japonaise"
                        }
                    },
                    "SE": {
                        "value": "Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Suède<\/span><br \/>Maladies : Encéphalite à tiques"
                        }
                    },
                    "CH": {
                        "value": "",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Suisse<\/span><br \/>"
                        }
                    },
                    "SR": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Suriname<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune"
                        }
                    },
                    "SZ": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Swaziland<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "SY": {
                        "value": " Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Syrie<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "TJ": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Tadjikistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "TZ": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage,Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Tanzanie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques"
                        }
                    },
                    "TD": {
                        "value": " Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage,Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Tchad<\/span><br \/>Maladies :  Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Méningite à méningocoques"
                        }
                    },
                    "CZ": {
                        "value": "Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">République Tchèque<\/span><br \/>Maladies : Encéphalite à tiques"
                        }
                    },
                    "TH": {
                        "value": "Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Thailande<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "TL": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Timor-leste<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune"
                        }
                    },
                    "TG": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune, Méningite à méningocoques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Togo<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune, Méningite à méningocoques"
                        }
                    },

                    "TT": {
                        "value": " Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Trinidad Et Tobago<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage, Fièvre jaune"
                        }
                    },
                    "TN": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Tunisie<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "TM": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Turkménistan<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "TR": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Turquie<\/span><br \/>Population : Hépatite A, Hépatite B, Typhoïde, Paludisme, Rage"
                        }
                    },
                    "TV": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Tuvalu<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme"
                        }
                    },
                    "VU": {
                        "value": "Hépatite A, Hépatite B, Typhoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Vanuatu<\/span><br \/>Maladies : Hépatite A, Hépatite B, Typhoïde, Paludisme"
                        }
                    },
                    "VE": {
                        "value": "Hépatite A, Hépatite B, Rage, Fièvre jaune",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Venezuela<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Fièvre jaune"
                        }
                    },
                    "VN": {
                        "value": "Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme, Encéphalite japonaise",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Viet Nam<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme, Encéphalite japonaise"
                        }
                    },
                    "UA": {
                        "value": "Hépatite A, Hépatite B, Rage, Encéphalite à tiques",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Ukraine<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Encéphalite à tiques"
                        }
                    },
                    "UY": {
                        "value": "Hépatite A, Hépatite B, Rage",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Uruguay<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage"
                        }
                    },
                    "YE": {
                        "value": "Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Yemen<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme"
                        }
                    },
                    "ZM": {
                        "value": " Hépatite A, Fièvre jaune, Hépatite B, Méningite à méningocoques, Rage, Typhoïde, paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Zambia<\/span><br \/>Maladies : Hépatite A, Fièvre jaune, Hépatite B, Méningite à méningocoques, Rage, Typhoïde, paludisme"
                        }
                    },
                    "ZW": {
                        "value": "Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme",
                        "href": "#",
                        "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Zimbabwe<\/span><br \/>Maladies : Hépatite A, Hépatite B, Rage, Typhoïde, Paludisme"
                        }
                    }
                }
            });
        });
    </script>

</head>

<body>
<div class="container">

    <h1>Carte des maladies selon les pays </h1>

    <div class="mapcontainer">
        <div class="map">
            <span>Alternative content for the map</span>
        </div>


    </div>


</div>


</body>
</html>
