$(function() {
    $("#agibundle_agent_typeContrat").change(function (e) {

        if($(this).val() === 'CDD'){
            //CDD
            $(".div_datecontrat").show();
            $("#datepicker1").attr('required', true);
            $("#datepicker2").attr('required', true);

            $("#datepicker3").removeAttr('required');
            $("#div_date_embauche").addClass('hide');
        }else {
            //CDI
            $("#div_date_embauche").removeClass('hide');
            $("#datepicker3").attr('required', true);

            $("#datepicker1").removeAttr('required');
            $("#datepicker2").removeAttr('required');
            $(".div_datecontrat").hide();

        }
    });

    $("#btnactualiserHours").click(function () {
        $("#submitVacationForm").removeClass('hide');
        $("#divRefreshVacationHours").hide();

        calculerHeures();


    })

    $("#agibundle_vacation_heureDebVac_date_day").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureDebVac_date_month").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureDebVac_date_year").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureDebVac_time_hour").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureDebVac_time_minute").change(function () {
        hideBtnSaveVacation();
    })




    $("#agibundle_vacation_heureFinVac_date_day").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureFinVac_date_month").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureFinVac_date_year").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureFinVac_time_hour").change(function () {
        hideBtnSaveVacation();
    })

    $("#agibundle_vacation_heureFinVac_time_minute").change(function () {
        hideBtnSaveVacation();
    })

});


init();

function init(){

    if($("#agibundle_agent_typeContrat").val() === 'CDI'){
        $("#div_date_embauche").removeClass('hide');
        $("#datepicker3").attr('required', true);

        $("#datepicker1").removeAttr('required');
        $("#datepicker2").removeAttr('required');
        $(".div_datecontrat").hide();
    }
    $("#datepicker3").removeAttr('required');

    $(".timepicker").removeAttr('required');


}

function hideBtnSaveVacation() {
    $("#submitVacationForm").addClass('hide');
    $("#divRefreshVacationHours").show();
}

function diffDateInHoursAndMinutes(dd, df) {
    var diff = dd.getTime() - df.getTime();//in ms

    var secDiff = diff / 1000; //in s
    var minDiff = diff / 60 / 1000; //in minutes
    var hDiff = diff / 3600 / 1000; //in hours
    heure = Math.floor(hDiff);
    minute = minDiff - 60 * heure;

    if(heure.toString().length === 1)
        heure = '0' + heure;

    if(minute.toString().length === 1)
        minute = '0' + minute;

    return heure + ":" + minute;
}

function addTimes(start, end) {
    times = [];
    times1 = start.split(':');
    times2 = end.split(':');

    for (var i = 0; i < 3; i++) {
        times1[i] = (isNaN(parseInt(times1[i]))) ? 0 : parseInt(times1[i]);
        times2[i] = (isNaN(parseInt(times2[i]))) ? 0 : parseInt(times2[i]);
        times[i] = times1[i] + times2[i];
    }

    var seconds = times[2];
    var minutes = times[1];
    var hours = times[0];

    if (seconds % 60 === 0) {
        hours += seconds / 60;
    }

    if (minutes % 60 === 0) {
        res = minutes / 60;
        hours += res;
        minutes = minutes - (60 * res);
    }

    if( minutes >= 60) {
        hours += 1;
        minutes = minutes - 60;
    }

    if(hours.toString().length === 1)
        hours = '0' + hours;

    if(minutes.toString().length === 1)
        minutes = '0' + minutes;

    return hours + ':' + minutes;
}

function concatenerDate(day, month, year, hour, minute) {
    return day + "/" + month + "/" + year + " " + hour + ":" + minute;
}

function stringToDate(dStr) {
    var momentDate = moment(dStr, 'DD/MM/YYYY HH:mm');
    var date = momentDate;
    return new Date(date);
}

function formaterTime(time) {
    if(time.length === 1){
        time = '0' + time;
    }

    return time;
}

function calculerHeures() {
    var dateDebJour = formaterTime($("#agibundle_vacation_heureDebVac_date_day").val());
    var dateDebMois = formaterTime($("#agibundle_vacation_heureDebVac_date_month").val());
    var dateDebYear= formaterTime($("#agibundle_vacation_heureDebVac_date_year").val());
    var heureDebHour = formaterTime($("#agibundle_vacation_heureDebVac_time_hour").val());
    var heureDebMinute = formaterTime($("#agibundle_vacation_heureDebVac_time_minute").val());


    var dateFinJour = formaterTime($("#agibundle_vacation_heureFinVac_date_day").val());
    var dateFinMois = formaterTime($("#agibundle_vacation_heureFinVac_date_month").val());
    var dateFinYear = formaterTime($("#agibundle_vacation_heureFinVac_date_year").val());
    var heureFinHour = formaterTime($("#agibundle_vacation_heureFinVac_time_hour").val());
    var heureFinMinute = formaterTime($("#agibundle_vacation_heureFinVac_time_minute").val());

    var dateDebVac = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, heureDebHour, heureDebMinute));
    var dateFinVac = stringToDate(concatenerDate(dateFinJour, dateFinMois, dateFinYear, heureFinHour, heureFinMinute));

    var heureJourDeb = $('#heureJour').data('debut').split(':');

    var heureJourFin = $('#heureJour').data('fin').split(':');

    var heureNuitDeb = $('#heureNuit').data('debut').split(':');

    var heureNuitFin = $('#heureNuit').data('fin').split(':');

    var dateDebJourDiff = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, heureJourDeb[0], heureJourDeb[1]));
    var dateFinJourDiff = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, heureJourFin[0], heureJourFin[1]));

    var dateDebNuitDiff = stringToDate(concatenerDate(dateFinJour, dateFinMois, dateFinYear, heureNuitDeb[0], heureNuitDeb[1]));
    var dateFinNuitDiff = stringToDate(concatenerDate(dateFinJour, dateFinMois, dateFinYear, heureNuitFin[0], heureNuitFin[1]));

    var dateDimancheDiff = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, '23', '59'));


    var nbHeureJour = 0, nbHeureNuit = 0; var temp;
    if(dateDebVac < dateDebJourDiff){ //Heure debut avant 6h
        //il a begin avant 6h
        nbHeureNuit = diffDateInHoursAndMinutes(dateDebJourDiff, dateDebVac);

        if(dateFinVac < dateFinJourDiff || dateFinVac.valueOf() === dateFinJourDiff.valueOf()){
            nbHeureJour = diffDateInHoursAndMinutes(dateFinVac, dateDebJourDiff);
        }else if(dateFinVac > dateFinJourDiff){
            nbHeureJour = diffDateInHoursAndMinutes(dateFinJourDiff, dateDebJourDiff);
            var hm = diffDateInHoursAndMinutes(dateFinVac, dateFinJourDiff);
            nbHeureNuit = addTimes(nbHeureNuit+':00', hm+':00');
        }


    }else if(dateDebVac.valueOf() === dateDebJourDiff.valueOf() && (dateFinVac < dateFinJourDiff || dateFinVac.valueOf() === dateFinJourDiff.valueOf())) {
        //il a begin a 6h et fini pas apres 21h
        nbHeureJour = diffDateInHoursAndMinutes(dateFinVac, dateDebVac);

    } else if(dateDebVac.valueOf() === dateDebJourDiff.valueOf() && dateFinVac > dateFinJourDiff) {
        //il a begin a 6h et fini apres 21h
        nbHeureJour = diffDateInHoursAndMinutes(dateFinJourDiff, dateDebVac);
        nbHeureNuit = diffDateInHoursAndMinutes(dateFinVac, dateFinJourDiff);


    }   else {

        //il a begin apres 6h
        if(dateDebVac < dateFinJourDiff || dateDebVac.valueOf() === dateFinJourDiff.valueOf()){
            //il commence entre 6h et 21h
            if(dateFinVac < dateFinJourDiff || dateFinVac.valueOf() === dateFinJourDiff.valueOf()){
                //il commence entre 6h et 21h et finit entre 6h et 21h
                nbHeureJour = diffDateInHoursAndMinutes(dateFinVac, dateDebVac);


            }else if(dateFinVac > dateFinJourDiff){
                //il commence entre 6h et 21h et finit apres 21h

                if(dateFinVac < dateFinNuitDiff || dateFinVac.valueOf() === dateFinNuitDiff.valueOf()){
                    //il commence entre 6h et 21h et finit avant le prochain 6h
                    nbHeureJour = diffDateInHoursAndMinutes(dateFinJourDiff, dateDebVac);
                    nbHeureNuit = diffDateInHoursAndMinutes(dateFinVac, dateFinJourDiff);

                }else {
                    //il commence entre 6h et 21h et finit apres le prochain 6h
                    nbHeureJour = diffDateInHoursAndMinutes(dateFinJourDiff, dateDebVac);
                    nbHeureNuit = diffDateInHoursAndMinutes(dateFinNuitDiff, dateFinJourDiff);
                    nbHeureJour = addTimes(diffDateInHoursAndMinutes(dateFinVac, dateFinNuitDiff), nbHeureJour);

                }

            }

        }else {
            //il commence apres 21h
            if(dateFinVac < dateFinNuitDiff || dateFinVac.valueOf() === dateFinNuitDiff.valueOf()){
                //il commence apres 21h et finit avant le prochain 6h
                nbHeureNuit = diffDateInHoursAndMinutes(dateFinVac, dateDebVac);

            }else {
                //il commence apres 21h et finit apres le prochain 6h
                nbHeureJour = diffDateInHoursAndMinutes(dateFinVac, dateFinNuitDiff);
                nbHeureNuit = diffDateInHoursAndMinutes(dateFinNuitDiff, dateDebVac);

            }
        }



    }

    if(nbHeureJour === '00:00'){
        nbHeureJour = '0';
    }

    if(nbHeureNuit === '00:00'){
        nbHeureNuit = '0';
    }

    $("#heure_nuit").val(nbHeureNuit);
    $("#heure_jour").val(nbHeureJour);

    //Calcul heures paniers
    var nbHeurePanier = 0;
    if(nbHeureNuit === 0 || nbHeureNuit === '0'){
        nbHeureNuit = '00:00';
    }

    if(nbHeureJour === 0 || nbHeureJour === '0'){
        nbHeureJour = '00:00';
    }

    var totalHeure = addTimes(nbHeureNuit, nbHeureJour);
    if(parseInt(totalHeure.split(':')[0]) > 6 || (parseInt(totalHeure.split(':')[0]) === 6 && parseInt(totalHeure.split(':')[1]) > 0)){
        nbHeurePanier = 1;
    }

    $('#heure_panier').val(nbHeurePanier);

    //Calcul heures dimanche
    var nbHeureDimanche = 0, hm = '';

    if(dateDebVac.getDay() === 0){
        //il a commencé un dimanche
        if(dateFinVac.getDay() === 0){
            //il a fini le même dimanche
            nbHeureDimanche = diffDateInHoursAndMinutes(dateFinVac, dateDebVac);

        }else if(dateFinVac > dateDebVac) {
            //il a fini après dimanche
            nbHeureDimanche = diffDateInHoursAndMinutes(dateDimancheDiff, dateDebVac);
            var ph = nbHeureDimanche.split(':')[0];
            var pm = nbHeureDimanche.split(':')[1];
            pm = parseInt(pm) + 1;
            if(pm >= 60){
                ph = parseInt(ph) + 1;
                pm = 60 - pm;
            }

            if(ph.toString().length === 1){
                ph = '0' + ph.toString();
            }

            if(pm.toString().length === 1){
                pm = '0' + pm.toString();
            }

            nbHeureDimanche = ph.toString() + ':' + pm.toString();

        }
    }else {
        //il n'a pas commencé un dimanche
        if(dateFinVac.getDay() === 0){
            //il a fini un dimanche
            nbHeureDimanche = heureFinHour + ':' + heureFinMinute;

        }
    }


    $('#heure_dimanche').val(nbHeureDimanche);


}

function stringToHour(dStr,format) {
    var now = new Date();
    if (format == "h:m") {
        now.setHours(dStr.substr(0,dStr.indexOf(":")));
        now.setMinutes(dStr.substr(dStr.indexOf(":")+1));
        now.setSeconds(0);
        return now;
    }else
        return "Invalid Format";
}