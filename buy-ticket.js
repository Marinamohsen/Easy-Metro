var Line1 = "Line 1";
var Line2 = "Line 2";
var Line3 = "Line 3";
var transitionStations = [
    {
        label: "Sadat",
        lines: [Line1, Line2]
    },
    {
        label: "Al-Shohadaa",
        lines: [Line1, Line2]
    },
    {
        label: "Attaba",
        lines: [Line2, Line3]
    }
];

var stations = [
    {
        label: "New El-Marg",
        category: Line1
    },
    {
        label: "El-Marg",
        category: Line1
    },
    {
        label: "Ezbet El-Nakhl",
        category: Line1
    },
    {
        label: "Ain Shams",
        category: Line1
    },
    {
        label: "El-Mataryya",
        category: Line1
    },
    {
        label: "Helmeyet El-Zaitoun",
        category: Line1
    },
    {
        label: "Hadayeq El-Zaitoun",
        category: Line1
    },
    {
        label: "Saray El-Qobba ",
        category: Line1
    },
    {
        label: "Hammamat El-Qobba",
        category: Line1
    },
    {
        label: "Kobri El-Qobba",
        category: Line1
    },
    {
        label: "Manshiet El-Sadr",
        category: Line1
    },
    {
        label: "El-Demerdash",
        category: Line1
    },
    {
        label: "Ghamra",
        category: Line1
    },
    {
        label: "Al-Shohadaa",
        category: Line1
    },
    {
        label: "Orabi",
        category: Line1
    },
    {
        label: "Nasser",
        category: Line1
    },
    {
        label: "Sadat",
        category: Line1
    },
    {
        label: "Saad Zaghloul",
        category: Line1
    },
    {
        label: "Al-Sayeda Zeinab",
        category: Line1
    },
    {
        label: "El-Malek El-Saleh",
        category: Line1
    },
    {
        label: "Mar Girgis",
        category: Line1
    },
    {
        label: "El-Zahraa'",
        category: Line1
    },
    {
        label: "Dar El-Salam",
        category: Line1
    },
    {
        label: "Hadayek El-Maadi",
        category: Line1
    },
    {
        label: "Maadi",
        category: Line1
    },
    {
        label: "Sakanat El-Maadi",
        category: Line1
    },
    {
        label: "Tora El-Balad",
        category: Line1
    },
    {
        label: "Kozzika",
        category: Line1
    },
    {
        label: "Tora El-Asmant",
        category: Line1
    },
    {
        label: "El-Maasara",
        category: Line1
    },
    {
        label: "Hadayek Helwan",
        category: Line1
    },
    {
        label: "Wadi Hof",
        category: Line1
    },
    {
        label: "Helwan University",
        category: Line1
    },
    {
        label: "Ain Helwan",
        category: Line1
    },
    {
        label: "Helwan",
        category: Line1
    },

    {
        label: "El-Mounib ",
        category: Line2
    },
    {
        label: "Sakiat Mekky",
        category: Line2
    },
    {
        label: "Omm El-Masryeen",
        category: Line2
    },
    {
        label: "Giza",
        category: Line2
    },
    {
        label: "Faisal",
        category: Line2
    },
    {
        label: "Cairo University",
        category: Line2
    },
    {
        label: "El Bohoth",
        category: Line2
    },
    {
        label: "Dokki",
        category: Line2
    },
    {
        label: "Opera",
        category: Line2
    },
    {
        label: "Sadat",
        category: Line2
    },
    {
        label: "Mohamed Naguib",
        category: Line2
    },
    {
        label: "Attaba",
        category: Line2
    },
    {
        label: "Al Shohadaa",
        category: Line2
    },
    {
        label: "Masarra",
        category: Line2
    },
    {
        label: "Rod El-Farag",
        category: Line2
    },
    {
        label: "St. Teresa",
        category: Line2
    },
    {
        label: "Khalafawy ",
        category: Line2
    },
    {
        label: "Mezallat",
        category: Line2
    },
    {
        label: "Kolleyyet El-Zeraa",
        category: Line2
    },
    {
        label: "Shubra El-Kheima",
        category: Line2
    },

    {
        label: "Al-Ahram",
        category: Line3
    },
    {
        label: "Koleyet El-Banat",
        category: Line3
    },
    {
        label: "Stadium",
        category: Line3
    },
    {
        label: "Fair Zone",
        category: Line3
    },
    {
        label: "Abbassiya",
        category: Line3
    },
    {
        label: "Abdou Pasha",
        category: Line3
    },
    {
        label: "El-Geish",
        category: Line3
    },
    {
        label: "Bab El-Shaaria",
        category: Line3
    },
    {
        label: "Attaba",
        category: Line3
    }
];

var stationsAr = [
    {
        label: "ﺓﺪﻳﺪﺠﻟا ﺝﺮﻤﻟا ",
        category: "People"
    },
    {
        label: "ﺝﺮﻤﻟا ",
        category: "People"
    },
    {
        label: "ﻞﺨﻨﻟا ﺔﺑﺰﻋ  ",
        category: "People"
    },
    {
        label: "ﺲﻤﺷ ﻦﻴﻋ ",
        category: "People"
    },
    {
        label: "ﺔﻳﺮﻄﻤﻟا ",
        category: "People"
    },
    {
        label: "ﻥﻮﺘﻳﺰﻟا ﺔﻴﻤﻠﺣ ",
        category: "People"
    },
    {
        label: "ﻥﻮﺘﻳﺰﻟا ﻖﺋاﺪﺣ ",
        category: "People"
    },
    {
        label: "ﺔﺒﻘﻟا ﻱاﺭﺎﺳ ",
        category: "People"
    },
    {
        label: "ﺔﺒﻘﻟا ﺕﺎﻣﺎﻤﺣ  ",
        category: "People"
    },
    {
        label: "ﺔﺒﻘﻟا ﻱﺮﺑﻮﻛ ",
        category: "People"
    }
];

$(function() {
    $.widget("custom.stationscomplete", $.ui.autocomplete, {
        _create: function() {
            this._super();
            this.widget().menu(
                "option",
                "items",
                "> :not(.ui-autocomplete-category)"
            );
        },
        _renderMenu: function(ul, items) {
            var that = this,
                currentCategory = "";
            $.each(items, function(index, item) {
                var li;
                if (item.category != currentCategory) {
                    ul.append(
                        "<li class='ui-autocomplete-category'>" +
                            item.category +
                            "</li>"
                    );
                    currentCategory = item.category;
                }
                li = that._renderItemData(ul, item);
                if (item.category) {
                    li.attr("aria-label", item.category + " : " + item.label);
                }
            });
        }
    });

    var onStationSelect = function(value, targetField) {
        var count = 0;
        for (var i = 0; i < stations.length; i++) {
            /// Shohad ,,, Sadat
            if (stations[i].label == value) {
                count = count + 1;
            }
        }

        if (count == 0) {
            alert("station does not exist");
            $(targetField).val("");
        }
    };

    $("#fromstation").stationscomplete({
        delay: 0,
        source: stations,
        change: function(value) {
            onStationSelect(value.target.value, "#fromstation");
        }
    });
    $("#tostation").stationscomplete({
        delay: 0,
        source: stations,
        change: function(value) {
            onStationSelect(value.target.value, "#tostation");
        }
    });

    //fromstation
    //tostation
    //js-go-button

    var getStationLine = function(stationName) {
        // sadat
        for (var i = 0; i < stations.length; i++) {
            // shoda
            // sadat
            if (stations[i].label == stationName) {
                // sadat
                return stations[i].category; // line 1
            }
        }
    };

    var getStationIndex = function(stationName) {
        for (var i = 0; i < stations.length; i++) {
            // shoda
            // sadat
            if (stations[i].label == stationName) {
                // sadat
                return i; // line 1
            }
        }
    };

    var calcTicketPrice = function(stationsCount) {
        var stationsCountAbs = Math.abs(stationsCount);
        var ticektPrice = "Error";

        if (stationsCountAbs <= 5) {
            ticektPrice = 3;
        } else if (stationsCountAbs <= 10) {
            ticektPrice = 5;
        } else if (stationsCountAbs > 10) {
            ticektPrice = 7;
        }
        return ticektPrice;
    };

    $(".js-go-clicked").submit(function(event) {
        event.preventDefault();
        $(".js-step1").removeClass("hidden");
        $(".js-step2-done").addClass("hidden");

        var fromInput = $("#fromstation").val(); // sadat
        var toInput = $("#tostation").val();
        var ticektPriceResult = "Error";
        var decidedTransationStation = "";
        var changeTwice = false;

        if (fromInput == toInput) {
            alert("You can not select the same Stations");
            return;
        }

        // Check if FromStation & ToStation are the same line
        if (getStationLine(fromInput) == getStationLine(toInput)) {
            var stationsCount =
                getStationIndex(fromInput) - getStationIndex(toInput);
            ticektPriceResult = calcTicketPrice(stationsCount);
        } else {
            // if they're not the same line
            // Ghamra to Dokki (Shohda or sadat) Line 1 & 2
            // Find transation station
            for (var i = 0; i < transitionStations.length; i++) {
                if (
                    (transitionStations[i].lines[0] ==
                        getStationLine(fromInput) &&
                        transitionStations[i].lines[1] ==
                            getStationLine(toInput)) ||
                    (transitionStations[i].lines[1] ==
                        getStationLine(fromInput) &&
                        transitionStations[i].lines[0] ==
                            getStationLine(toInput))
                ) {
                    decidedTransationStation = transitionStations[i].label;
                }
            }
            if (decidedTransationStation != "") {
                // Calc count of stations from Ghamra to nearest transition station (Shohda or sadat)
                var stationsCountPart1 =
                    getStationIndex(fromInput) -
                    getStationIndex(decidedTransationStation);
                // Calc count of stations from Shodha to Dokki
                var stationsCountPart2 =
                    getStationIndex(decidedTransationStation) -
                    getStationIndex(toInput);
                // Sum two counts
                var stationsCountTotal =
                    stationsCountPart1 + stationsCountPart2;
                // Use calcTicketPrice function
                ticektPriceResult = calcTicketPrice(stationsCountTotal);
            } else {
                // By logic we know that he should change betweeen Line 1 & Line 3
                changeTwice = true;
                decidedTransationStation =
                    "You will need to change twice from: 'Al-Shohadaa or Sadat' then 'Attaba', or the other way around from 'Attaba' to 'Al-Shohadaa or Sadat'";

                ticektPriceResult = 7;
            }
        }

        // Print Results
        $("#startstation").text(fromInput);
        if (decidedTransationStation != "") {
            if (changeTwice) {
                $("#changestation").html(
                    'Change <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="' +
                        decidedTransationStation +
                        '"></i>'
                );
                $('[data-toggle="tooltip"]').tooltip();
            } else {
                $("#changestation").text(
                    "Change (" + decidedTransationStation + ")"
                );
            }
        } else {
            $("#changestation").text(" ");
        }
        $("#endstation").text(toInput);
        $(".ticketprice").text(ticektPriceResult);
        $("#ticket-modal").modal("show");

        //Inputs
        $("#input-from").val(fromInput);
        $("#input-to").val(toInput);
        $("#input-price").val(ticektPriceResult);
    });
});