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
        calculerHeurePanier();
        calculerHeureNuit();
        calculerHeureJour();

        calculerHeureDimanche();

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

    var diff = dateFinVac.valueOf() - dateDebVac.valueOf();
    var diffInHours = diff/1000/60/60;

    var heurePanier = 0;
    if(diffInHours % 6 === 0){
        heurePanier = diffInHours / 6;
    }else if(diffInHours > 6){
        heurePanier = Math.trunc(diffInHours / 6);
    }

    if(heurePanier < 0){
        heurePanier = 0;
    }
    $('#heure_panier').val(heurePanier);


}

function concatenerDate(day, month, year, hour, minute) {
    return day + "/" + month + "/" + year + " " + hour + ":" + minute;
}

function concatenerHeureMinute(hour, minute) {
    return hour + ":" + minute;
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

function calculerHeureJour() {

    var heureDebHour = formaterTime($("#agibundle_vacation_heureDebVac_time_hour").val());
    var heureDebMinute = parseInt($("#agibundle_vacation_heureDebVac_time_minute").val());

    if(heureDebHour.split(':')[0] === "00"){
        heureDebHour = 24;
    }else {
        heureDebHour = parseInt(heureDebHour.split(':')[0]);
    }

    var heureJourDeb = $('#heureJour').data('debut');
    if(heureJourDeb.split(':')[0] === "00"){
        heureJourDeb = 24;
    }else {
        heureJourDeb = parseInt(heureJourDeb.split(':')[0]);
    }

    var heureJourFin = $('#heureJour').data('fin');
    if(heureJourFin.split(':')[0] === "00"){
        heureJourFin = 24;
    }else {
        heureJourFin = parseInt(heureJourFin.split(':')[0]);
    }

    var nbheureJour = 0;

    if(heureDebHour >= heureJourDeb && heureDebHour <= heureJourFin){
        nbheureJour = 1;
        $("#heure_jour").val(nbheureJour);
    }

    if(heureDebHour > heureJourFin){
        nbheureJour = 0;
        $("#heure_nuit").val(1);
        $("#heure_jour").val(0);
    }else {
        nbheureJour = 0;
        if(heureDebMinute > 0){
            $("#heure_nuit").val(1);
        }else {
            $("#heure_nuit").val(0);
        }
    }

    if(heureDebHour < heureJourDeb){
        $("#heure_nuit").val(1);
    }

}

function calculerHeureNuit() {

    var heureFinHour = formaterTime($("#agibundle_vacation_heureFinVac_time_hour").val());
    var heureFinMinute = parseInt($("#agibundle_vacation_heureFinVac_time_minute").val());

    if(heureFinHour.split(':')[0] === "00"){
        heureFinHour = 24;
    }else {
        heureFinHour = parseInt(heureFinHour.split(':')[0]);
    }

    var heureNuitDeb = $('#heureNuit').data('debut');

    if(heureNuitDeb.split(':')[0] === "00"){
        heureNuitDeb = 24;
    }else {
        heureNuitDeb = parseInt(heureNuitDeb.split(':')[0]);
    }

    var nbheureNuit = 0;

    if(heureFinHour > heureNuitDeb){
        nbheureNuit = 1;
    }else {
        if(heureFinMinute > 0){
            nbheureNuit = 1;
        }else {
            nbheureNuit = 0;
        }
    }

    $("#heure_jour").val(1);
    $("#heure_nuit").val(nbheureNuit);

}

function calculerHeureDimanche() {
    
}

function calculer() {
    var heureJourDeb = $('#heureJour').data('debut'); var heureJourFin = $('#heureJour').data('fin');
    var heureNuitDeb = $('#heureNuit').data('debut'); var heureNuitFin = $('#heureNuit').data('fin');
    var heureDimancheDeb = $('#heureDimanche').data('debut'); var heureDimancheFin = $('#heureDimanche').data('fin');


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