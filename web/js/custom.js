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
        $("#submitVacationForm").show();
        $("#divRefreshVacationHours").hide();

        calculerHeures();
        //calculerHeurePanier();
        /*calculerHeureNuit();
        calculerHeureJour();

        calculerHeureDimanche();*/

    })

    $("#agibundle_vacation_heureDebVac_date_day").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureDebVac_date_month").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureDebVac_date_year").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureDebVac_time_hour").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureDebVac_time_minute").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })




    $("#agibundle_vacation_heureFinVac_date_day").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureFinVac_date_month").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureFinVac_date_year").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureFinVac_time_hour").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

    $("#agibundle_vacation_heureFinVac_time_minute").change(function () {
        $("#submitVacationForm").hide();
        $("#divRefreshVacationHours").show();
    })

});


init();

function init(){

    $("#submitVacationForm").hide();

    if($("#agibundle_agent_typeContrat").val() === 'CDI'){
        $("#div_date_embauche").removeClass('hide');
        $("#datepicker3").attr('required', true);

        $("#datepicker1").removeAttr('required');
        $("#datepicker2").removeAttr('required');
        $(".div_datecontrat").hide();
    }
    $("#datepicker3").removeAttr('required');

    $(".timepicker").removeAttr('required');

    var d = new Date();
    var j = d.getDate();
    var m = d.getMonth() + 1;
    var y = d.getFullYear();

    $('#agibundle_vacation_heureDebVac_date_day').val(j);
    $('#agibundle_vacation_heureDebVac_date_month').val(m);
    $('#agibundle_vacation_heureDebVac_date_year').val(y);

    $('#agibundle_vacation_heureFinVac_date_day').val(j);
    $('#agibundle_vacation_heureFinVac_date_month').val(m);
    $('#agibundle_vacation_heureFinVac_date_year').val(y);

}

function calculerHeurePanier() {

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

    var diff = dateFinVac.getTime() - dateDebVac.getTime();//in ms

    console.log(dateFinVac.getTime());
    console.log(dateDebVac.getTime());

    var secDiff = diff / 1000; //in s
    var minDiff = diff / 60 / 1000; //in minutes
    var hDiff = diff / 3600 / 1000; //in hours
    var humanReadable = {};
    humanReadable.hours = Math.floor(hDiff);
    humanReadable.minutes = minDiff - 60 * humanReadable.hours;

    //console.log(humanReadable);

    /*var heurePanier = 0;
    if(diffInHours % 6 === 0){
        heurePanier = diffInHours / 6;
    }else if(diffInHours > 6){
        heurePanier = Math.trunc(diffInHours / 6);
    }

    if(heurePanier < 0){
        heurePanier = 0;
    }
    $('#heure_panier').val(heurePanier);*/


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

    var dateDebJourDiff = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, heureJourDeb[0], heureJourDeb[1]));
    var dateFinJourDiff = stringToDate(concatenerDate(dateDebJour, dateDebMois, dateDebYear, heureJourFin[0], heureJourFin[1]));


    var nbHeureJour = 0, nbHeureNuit = 0;
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
        if(dateFinVac < dateFinJourDiff || dateFinVac.valueOf() === dateFinJourDiff.valueOf()){
            //il fini avant pas apres 21h
            nbHeureJour = diffDateInHoursAndMinutes(dateFinVac, dateDebVac);

        }else if(dateFinVac > dateFinJourDiff){
            //il fini apres 21h
            nbHeureJour = diffDateInHoursAndMinutes(dateFinJourDiff, dateDebVac);
            nbHeureNuit = diffDateInHoursAndMinutes(dateFinVac, dateFinJourDiff);

        }

    }

    $("#heure_nuit").val(nbHeureNuit);
    $("#heure_jour").val(nbHeureJour);

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