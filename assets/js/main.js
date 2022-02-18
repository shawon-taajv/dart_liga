/**
 * Created by Shawon on 2/4/2022.
 */
var currentView ="dashboard";
var phaseCalculator =[];
document.addEventListener("DOMContentLoaded", function(event) {
    const linkColor = document.querySelectorAll('.nav_link');
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);
        if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
                nav.classList.toggle('show');
            toggle.classList.toggle('bx-x');
            bodypd.classList.toggle('body-pd');
            headerpd.classList.toggle('body-pd');
            if (window.matchMedia('screen and (max-width: 768px)').matches) {
                // do nothing
            }
            else {
                linkColor.forEach(l=> l.classList.toggle('navicon-setwidth'));
            }
        })
        }
    }
    showNavbar('header-toggle','nav-bar','body-pd','header');
    function colorLink(){
        if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'));
            this.classList.add('active');
        }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink));
});

//====FileChooser====//
function filechooser(input, elem) {
    var path = window.URL.createObjectURL(input.files[0]);
    elem.src = window.URL.createObjectURL(input.files[0]);
    //input.value = window.URL.createObjectURL(input.files[0]);
    console.log(window.URL.createObjectURL(input.files[0]));
}



//region ========Load Document JQuery========//
$(document).ready(function() {
    var table1 = $('#leagueHistoryTable').DataTable( {
        responsive: true,
        "dom":' <"search"fl><"top">rt<"bottom"ip><"clear">'
    } );
    var table1 = $('#example2').DataTable( {
        responsive: true
    } );
    var table1 = $('#example3').DataTable( {
        responsive: true
    } );
    $(".dropdown-menu").on('click', 'li a', function($this){
        $(this).parent().parent().parent().find('.btn').text($(this).text());
        $(this).parent().parent().parent().find('.btn').val($(this).text());
    });
    $.fn.datepicker.defaults.format = 'MM d, yyyy';
    $('.datepicker').datepicker({
        startDate: '-3d'
    });
    $('#al_timeline_datepicker').datepicker().on('changeDate', function (ev) {
        $("#al_timeline_end").val($('#al_timeline_datepicker').val());
    });
    $("#al_timeline_datepicker").on("change", function() {
        var startDate = $("#al_timeline_datepicker").val();
        var input = document.getElementById('al_timeline_end');
        setEndSession(input,(['al_timeline_datepicker']));
    });
} );
//endregion

//region ========Common Methods========//

//region --------Spinner Input -------//

//----Spinner Input Minus----//
function spinnerInputMinus(button) {
    var text = parseInt(button.nextElementSibling.value);
    if(text<1){
        //do nothing
    }
    else{
        if(text<10){
            text = text -1;
            button.nextElementSibling.value = '0'+ text;
        }else{
            text = text -1;
            button.nextElementSibling.value = text;
        }
    }
}

//----Spinner Input Plus----//
function spinnerInputPlus(button) {
    var text = parseInt(button.previousElementSibling.value);
    if(text<9){
        //do nothing
        text = text + 1;
        button.previousElementSibling.value = '0' + text;
    }
    else{
        text = text + 1;
        button.previousElementSibling.value = text;
    }
}

//----Spinner Input Clear----//
function spinnerClear(button) {
    button.previousElementSibling.value = "";
}

//endregion

//region --------Animations--------//

//----Fade-In-Out----//
function fade(param1, param2) {
    var y = document.getElementById(param1);
    y.className += " fade-leave-active fade-leave-to";
    var z = document.getElementById(param2);
    z.className += " fade-enter-active fade-enter-to";
    setTimeout(function(){
        y.style.display = "none";
        z.style.display = "block";
        y.className = param1;
        z.className = param2;
        document.documentElement.scrollTop = 0;
    }, 500);
}

//----Slide-In-Out----//
function slide(param, param2) {
    if(currentView != param){
        var y = document.getElementById(currentView);
        var tyClassname =
        y.className += " app-animate-bottom";
        var z = document.getElementById(param);
        setTimeout(function(){
            y.style.display = "none";
            z.style.display = "block";
            z.className += " app-animate-top";
            setTimeout(function(){
                y.className = currentView;
                z.className = param;
            }, 450);
        }, 400);
        currentView = param;
    }
    document.getElementById('headerText').innerHTML = param2[0];
}

//endregion

function emptyHelper() {

}

//endregion

//region ========Nav Bar========//

//region --------Profile Pic Popup--------//
const body = document.querySelector('body'),
    profilePic = body.querySelector("#profile-picture");
window.addEventListener('click', ({ target }) => {
    var popup = document.getElementById("account-popup");
    popup.style.display = "none";
});
profilePic.addEventListener("click" , function(e){
    var popup = document.getElementById("account-popup");
    if(window.getComputedStyle(popup).display === "none"){
        e.stopPropagation();
        popup.style.display = "block";
    }else {
        popup.style.display = "none";

    }
});
//endregion

//region --------Logout--------//
function logOut()
{
    var form_data = new FormData();
    form_data.append('dp_logout' ,  'dp_logout');
    var url = '../../controller/dashboard.php';
    getLogout(
        url, // URL for the PHP file
        form_data,
        logoutSuccess,  // handle successful request
        logoutError,   // handle error
    );
}
function logoutSuccess() {
    window.location.replace("../../index.php");
    console.log("Successfully Logout");
}
function logoutError() {
    console.log("Error on Logout");
}

function getLogout(url, data, success, error) {
    var req = false;
    try{
        // most browsers
        req = new XMLHttpRequest();
    } catch (e){
        // IE
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            // try an older version
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {
                return false;
            }
        }
    }
    if (!req) return false;
    if (typeof success != 'function') success = function () {};
    if (typeof error!= 'function') error = function () {};
    req.onreadystatechange = function(){
        if(req.readyState == 4) {
            var response = req.responseText;
            //drawOutput(response);
            return req.status === 200 ?
                success(req.responseText, console.log(req.responseText)) : error(req.status, console.log(req.status));
        }
    }
    req.open("POST", url, true);
    req.send(data);
    return req;
}
//endregion

//endregion

//--------Modal Array--------//
var modalDynamicArray = {
    1: [{ //get season number
        1: 2, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Retrive Sesson ID", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Retrive" // button text
    }],
    2: [{ // update all league
        1: 6, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Update League (Change Schedule Date)", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Update" // button text
    }],
    3: [{ // delete all league
        1: 6, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Delete League", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Delete" // button text
    }],
    4: [{ // update league group
        1: 1, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Update League Group", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Update" // button text
    }],
    5: [{ // delete league group
        1: 1, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Delete League Group", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Delete" // button text
    }],
    6: [{ // update season name
        1: 1, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Update Season Name", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Update" // button text
    }],
    7: [{ // delete season name
        1: 1, //number of div
        2: "col bx bx-question-mark nav_icon flex-shrink-0 text-info fs-3 d-inline", // modal icon
        3: "Delete Season Name", //modal title
        4: "<div class='form-group'><label class='col-form-label'>",// start div body
        5: "", // Label for input
        6: "</label><input type='text' class='form-control ",
        7: "", //common class for input
        8: "' value='",
        9: "",// Value for input
        10: " name='",
        11: "", // set name attribute
        12: "'></div>",// end of div body
        13: "Delete" // button text
    }]
};

//region ========Assign League Tab========//

//--------Set Season ID--------//
function getSeasonNumber(button) {
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    if(league_group.length > 0 && season_name.length > 0){
        var resultInput = button.previousElementSibling.previousElementSibling.previousElementSibling;
        var league_group = document.getElementById('al_league_group').value;
        var season_name = document.getElementById('al_season_name').value;
        var updateModal = new bootstrap.Modal(document.getElementById('dSinglePageModal'));
        // set icon
        document.getElementById('spm_icon').className = modalDynamicArray[1][0][2];
        // set title
        document.getElementById('spm_title').innerHTML = modalDynamicArray[1][0][3];
        // set body
        var innerhelper ={
            1: [{ //League Group
                1: "League Group", //label text [modalDynamicArray==> item: 5]
                2: document.getElementById('al_league_group').value, //input value [modalDynamicArray==> item: 9]
                3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
            }],
            2: [{ //Season Name
                1: "Season Name", //label text [modalDynamicArray==> item: 5]
                2: document.getElementById('al_season_name').value, //input value [modalDynamicArray==> item: 9]
                3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
            }]
        };
        var modalInnerHTML = '';
        for(var count = 1; count <= modalDynamicArray[1][0][1]; count++)
        {
            modalInnerHTML += modalDynamicArray[1][0][4] + innerhelper[count][0][1] + modalDynamicArray[1][0][6] + "season_id" + modalDynamicArray[1][0][8] + innerhelper[count][0][2] +
                innerhelper[count][0][3]  + modalDynamicArray[1][0][10] + "season_id_" + count.toString() + modalDynamicArray[1][0][11] + modalDynamicArray[1][0][12];
        }
        document.getElementById('spm_body').innerHTML = modalInnerHTML;
        // set button text
        document.getElementById('spm_btn').setAttribute("onclick","syncData(['season_id','league_shedule','info','']); return false;");
        document.getElementById('spm_btn').innerHTML = modalDynamicArray[1][0][13];
        updateModal.show();
    }
    else{
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [ League Group, Season Name] !!!"]
        showError(message);
    }
}

//--------Set League Name--------//
function setLeagueName(button) {
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    var season_id = document.getElementById('al_season_id').value;
    if(league_group.length > 0 && season_name.length > 0 && season_id > 0){
        var seasonName = document.getElementById('al_league_group').value +'-'+ document.getElementById('al_season_name').value +'-'+ document.getElementById('al_season_id').value;
        button.previousElementSibling.previousElementSibling.value = seasonName;
    }
    else{
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [ League Group, Season Name, Season ID] !!!"]
        showError(message);
    }
}

//--------Set End Session--------//
function setEndSession(input, calander) {
    var startDate = new Date(Date.parse(document.getElementById(calander[0]).value));
    console.log(startDate);
    for(var count = 1; count < 8; count++){
        if(count===5 || count===6){
            var finishDate = addDays(startDate.toString(),13);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            var start = startDate.toLocaleDateString(undefined, options);
            var finish = finishDate.toLocaleDateString(undefined, options);
            startDate = addDays(finishDate.toString(),1);
            phaseCalculator[count] ={
                1: start.toString(),
                2: finish.toString()
            };
        }
        else{

            var finishDate = addDays(startDate.toString(),6);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            var start = startDate.toLocaleDateString(undefined, options);
            var finish = finishDate.toLocaleDateString(undefined, options);
            startDate = addDays(finishDate.toString(),1);
            phaseCalculator[count] ={
                1: start.toString(),
                2: finish.toString()
            };
            if(count===7){
                input.value = finish.toString();
            }
        }
    }
}

function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

//--------Timeline Preview--------//
function timelinePreview() {
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    var season_id = document.getElementById('al_season_id').value;
    var timeline_datepicker = document.getElementById('al_timeline_datepicker').value;

    if(league_group.length > 0 && season_name.length > 0 && timeline_datepicker.length > 0){
        if(season_id != "00"){
            var date = document.getElementById('al_timeline_datepicker').value;
            var startDate = new Date(Date.parse(date));
            for(var count = 1; count < 8; count++){
                if(count===5 || count===6){
                    var id_start = 'timeline_phase_'+count.toString()+'_start';
                    var id_finish = 'timeline_phase_'+count.toString()+'_finish';
                    var finishDate = addDays(startDate.toString(),13);
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    var start = startDate.toLocaleDateString(undefined, options);
                    var finish = finishDate.toLocaleDateString(undefined, options);
                    document.getElementById(id_start).innerHTML = start.toString();
                    document.getElementById(id_finish).innerHTML = finish.toString();
                    startDate = addDays(finishDate.toString(),1);
                }
                else{
                    var id_start = 'timeline_phase_'+count.toString()+'_start';
                    var id_finish = 'timeline_phase_'+count.toString()+'_finish';
                    var finishDate = addDays(startDate.toString(),6);
                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    var start = startDate.toLocaleDateString(undefined, options);
                    var finish = finishDate.toLocaleDateString(undefined, options);
                    document.getElementById(id_start).innerHTML = start.toString();
                    document.getElementById(id_finish).innerHTML = finish.toString();
                    startDate = addDays(finishDate.toString(),1);
                    if(count===7){
                        document.getElementById('al_timeline_end').value = finish;
                    }
                }
            }
            var button = document.getElementById('timeLinePreviewBtn');
            var panel = document.getElementById('timeLinePreview');
            var timeline = document.getElementById('timeline');
            button.className  = "accordion-button";
            panel.className =+ " collapsing";
            setTimeout(function(){
                panel.className = "accordion-collapse collapse show";
                timeline.style.display = "block";
                timeline.className += " app-animate-zoom-in";
                setTimeout(function(){
                    timeline.className = "card card-body";
                }, 100);
            },250);
        }
        else {
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! For preview please set all required field [Season ID] !!!"]
            showError(message);
        }
    }
    else{
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! For preview please set all required field [ League Group, Season Name, Season ID, Season Timelap] !!!"]
        showError(message);
    }
}

//region --------Assign League--------//
function assignLeague() {
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    var season_id = document.getElementById('al_season_id').value;
    var league_name = document.getElementById('al_league_name').value;
    var timeline_datepicker = document.getElementById('al_timeline_datepicker').value;

    setPhase(timeline_datepicker);

    if(league_group.length > 0 && season_name.length > 0 && timeline_datepicker.length > 0){
        if(season_id != "Set Season ID"){
            if(league_name.length > 0){
                dataArray = ['all_league_container'];
                syncData(['assign_league','al_league_container','insert','addPhase','assignLeaguePostAction']);
            }
            else {
                var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [League Name] !!!"]
                showError(message);
            }
        }
        else {
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [Season ID] !!!"]
            showError(message);
        }
    }
    else{
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [ League Group, Season Name, Season ID, Season Timelap] !!!"]
        showError(message);
    }
}
function setPhase(datePicker) {
    var startDate = new Date(Date.parse(datePicker));
    for(var count = 1; count < 8; count++){
        var innerArray = [];
        if(count===5 || count===6){
            var finishDate = addDays(startDate.toString(),13);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            var start = startDate.toLocaleDateString(undefined, options);
            var finish = finishDate.toLocaleDateString(undefined, options);
            startDate = addDays(finishDate.toString(),1);
            // phaseCalculator[count] ={
            //     1: start.toString(),
            //     2: finish.toString()
            // };
            innerArray.push({
                1: start.toString(),
                2: finish.toString()
            });
        }
        else{

            var finishDate = addDays(startDate.toString(),6);
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            var start = startDate.toLocaleDateString(undefined, options);
            var finish = finishDate.toLocaleDateString(undefined, options);
            startDate = addDays(finishDate.toString(),1);
            innerArray.push(start.toString(),finish.toString());
        }
        phaseCalculator.push({
            count : innerArray
        });
    }
}
function assignLeaguePostAction() {
    document.getElementById('al_league_group').value ="";
    document.getElementById('al_league_group').innerHTML ="Group Name";
    document.getElementById('al_season_name').value ="";
    document.getElementById('al_season_name').innerHTML ="Season Name";
    document.getElementById('al_season_id').value = "";
    document.getElementById('al_league_name').value = "";
    document.getElementById('al_timeline_datepicker').value = "";
    document.getElementById('al_timeline_end').value = "";
    document.getElementById('current_league_refresh').value = "current_league_refresh";
    syncData(['current_league_refresh','current_league_container','retrieve','','emptyHelper']);
}
//endregion

//endregion

//region ========Current League Tab========//

//--------League List--------//
function viewLeagueInfo(button){
    var leagueName = button.previousElementSibling.value;
    console.log(leagueName);
}

//endregion
//region ========Accordion(Leagues, League Group, Season Name)========//
//----Update League----//
function updateAllLeague(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["al_league_db_league_name_" + id,
        "al_league_db_league_group_" + id,
        "al_league_db_season_name_" + id,
        "al_league_db_season_id_" + id,
        "al_league_db_start_date_" + id,
        "al_league_db_est_end_date_" + id];
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    var startDate = new Date(Date.parse(document.getElementById(idArray[4]).getAttribute("placeholder")));
    var endDate = new Date(Date.parse(document.getElementById(idArray[5]).getAttribute("placeholder")));
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    var start = startDate.toLocaleDateString(undefined, options);
    var endDate = endDate.toLocaleDateString(undefined, options);
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[2][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[2][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[1]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        2: [{ //Season Name
            1: "Season Name", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[2]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        3: [{ //Season Name
            1: "Season ID", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[3]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        4: [{ //Season Name
            1: "League Name", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        5: [{ //Season Name
            1: "Season Timelap", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[4]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        6: [{ //Season Name
            1: "End of Seasson", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[5]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[2][0][1]; count++)
    {
        if(count===5){
            var datepicker = "<div class='form-group'><label class='col-form-label'>Season Timelap</label><div class='input-group date w-100 ' data-provide='datepicker'>" +
                "<input id='update_league_5' name='update_league_"+count.toString()+"' type='text' class='form-control update_league' value='" +
                start.toString() + "' readonly> " +
                "<span class='input-group-append'><span class='input-group-text bg-white d-block'><i class='bx bx-calendar nav_icon'></i></span></span></div></div>"
            modalInnerHTML += datepicker;
        }else if(count===6){
            var enddate = "<div class='form-group'><label class='col-form-label'>End of Seasson</label> <div class='btn-group col-sm-12'><div class='input-group'>" +
                "<input id='update_league_6'  type='text' class='form-control update_league' value='" + endDate.toString() + "' readonly='' name='update_league_6'>" +
                "</div></div></div>";
            var noQuotes = enddate.split('"').join('\'');
            modalInnerHTML += noQuotes;
        }
        else {
            modalInnerHTML += modalDynamicArray[2][0][4] + innerhelper[count][0][1] + modalDynamicArray[2][0][6] + "update_league" + modalDynamicArray[2][0][8] + innerhelper[count][0][2] +
                innerhelper[count][0][3]  + modalDynamicArray[2][0][10] + "update_league_" + count.toString() + modalDynamicArray[2][0][11] + modalDynamicArray[2][0][12];
        }
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    $("#update_league_5").on("change", function() {
        var startDate = $("#update_league_5").val();
        console.log(`You picked this ${startDate}`);
        var input = document.getElementById('update_league_6');
        setEndSession(input,(['update_league_5']));
    });
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['update_league','al_league_container','update','" + document.getElementById(idArray[0]).getAttribute('placeholder') + "', 'updateAllLeaguePostAction']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[2][0][13];
    updateModal.show();
}
function updateAllLeaguePostAction() {
    document.getElementById('current_league_refresh').value = "current_league_refresh";
    syncData(['current_league_refresh','current_league_container','retrieve','','emptyHelper']);
}


//----Delete League----//
function deleteAllLeague(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["al_league_db_league_name_" + id,
        "al_league_db_league_group_" + id,
        "al_league_db_season_name_" + id,
        "al_league_db_season_id_" + id,
        "al_league_db_start_date_" + id,
        "al_league_db_est_end_date_" + id];
    var league_group = document.getElementById('al_league_group').value;
    var season_name = document.getElementById('al_season_name').value;
    var startDate = new Date(Date.parse(document.getElementById(idArray[4]).getAttribute("placeholder")));
    var endDate = new Date(Date.parse(document.getElementById(idArray[5]).getAttribute("placeholder")));
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    var start = startDate.toLocaleDateString(undefined, options);
    var endDate = endDate.toLocaleDateString(undefined, options);
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[3][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[3][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[1]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        2: [{ //Season Name
            1: "Season Name", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[2]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        3: [{ //Season Name
            1: "Season ID", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[3]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        4: [{ //Season Name
            1: "League Name", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        5: [{ //Season Name
            1: "Season Timelap", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[4]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }],
        6: [{ //Season Name
            1: "End of Seasson", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[5]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[3][0][1]; count++)
    {
        modalInnerHTML += modalDynamicArray[3][0][4] + innerhelper[count][0][1] + modalDynamicArray[3][0][6] + "delete_league" + modalDynamicArray[3][0][8] + innerhelper[count][0][2] +
            innerhelper[count][0][3]  + modalDynamicArray[3][0][10] + "delete_league_" + count.toString() + modalDynamicArray[3][0][11] + modalDynamicArray[3][0][12];
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['delete_league','al_league_container','delete','', 'deleteAllLeaguePostAction']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[3][0][13];
    updateModal.show();
}
function deleteAllLeaguePostAction() {
    document.getElementById('current_league_refresh').value = "current_league_refresh";
    syncData(['current_league_refresh','current_league_container','retrieve','','emptyHelper']);
}

//region ----Add League Group----//
function addLeagueGroup(button) {
    var league_group = button.previousElementSibling.value;
    if(league_group.length > 0){
        syncData(['league_group','league_group_container','insert','', 'clearAddGroup']);
    }
    else {
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [Group Name] !!!"]
        showError(message);
    }
}
function clearAddGroup() {
    var form_element = document.getElementsByClassName('league_group');
    for(var count = 0; count < form_element.length; count++)
    {
        form_element[count].value = "";
    }
}
//endregion

//----Update League Group----//
function updateLeagueGroup(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["league_group_" + id];
    var updateData = document.getElementById(idArray[0]).getAttribute("placeholder");
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[4][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[4][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' " // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[4][0][1]; count++)
    {
        modalInnerHTML += modalDynamicArray[4][0][4] + innerhelper[count][0][1] + modalDynamicArray[4][0][6] + "update_league_group" + modalDynamicArray[4][0][8] + innerhelper[count][0][2] +
            innerhelper[count][0][3]  + modalDynamicArray[4][0][10] + "update_league_group" + modalDynamicArray[4][0][11] + modalDynamicArray[4][0][12];
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['update_league_group','league_group_container','update','" + updateData + "', 'emptyHelper']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[4][0][13];
    updateModal.show();
}

//----Delete League Group----//
function deleteLeagueGroup(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["league_group_" + id];
    var updateData = document.getElementById(idArray[0]).getAttribute("placeholder");
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[5][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[5][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[5][0][1]; count++)
    {
        modalInnerHTML += modalDynamicArray[5][0][4] + innerhelper[count][0][1] + modalDynamicArray[5][0][6] + "delete_league_group" + modalDynamicArray[5][0][8] + innerhelper[count][0][2] +
            innerhelper[count][0][3]  + modalDynamicArray[5][0][10] + "delete_league_group" + modalDynamicArray[5][0][11] + modalDynamicArray[5][0][12];
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['delete_league_group','league_group_container','delete','', 'emptyHelper']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[5][0][13];
    updateModal.show();
}

//region ----Add Season Name----//
function addSeasonName(button) {
    var league_group = button.previousElementSibling.value;
    if(league_group.length > 0){
        syncData(['season_name', 'season_name_container', 'insert', '', 'clearSeasonName']);
    }
    else {
        var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Error", "!!! Please set all required field [Season Name] !!!"]
        showError(message);
    }
}
function clearSeasonName() {
    var form_element = document.getElementsByClassName('season_name');
    for(var count = 0; count < form_element.length; count++)
    {
        form_element[count].value = "";
    }
}
//endregion

//----Update Season Name----//
function updateSeasonName(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["season_name_" + id];
    var updateData = document.getElementById(idArray[0]).getAttribute("placeholder");
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[6][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[6][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' " // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[6][0][1]; count++)
    {
        modalInnerHTML += modalDynamicArray[6][0][4] + innerhelper[count][0][1] + modalDynamicArray[6][0][6] + "update_season_name" + modalDynamicArray[6][0][8] + innerhelper[count][0][2] +
            innerhelper[count][0][3]  + modalDynamicArray[6][0][10] + "update_season_name" + modalDynamicArray[6][0][11] + modalDynamicArray[6][0][12];
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['update_season_name','season_name_container','update','" + updateData + "', 'emptyHelper']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[6][0][13];
    updateModal.show();
}

//----Delete Season Name----//
function deleteSeasonName(identity) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal1'));
    var id = identity.getAttribute("data-identity");
    var idArray =["season_name_" + id];
    var updateData = document.getElementById(idArray[0]).getAttribute("placeholder");
    // set icon
    document.getElementById('upletetitle_icon').className = modalDynamicArray[7][0][2];
    // set title
    document.getElementById('uplete_title').innerHTML = modalDynamicArray[7][0][3];
    // set body
    var innerhelper ={
        1: [{ //League Group
            1: "League Group", //label text [modalDynamicArray==> item: 5]
            2: document.getElementById(idArray[0]).getAttribute("placeholder"), //al_league_db_id_ //input value [modalDynamicArray==> item: 9]
            3: "' readonly" // readonly or not [modalDynamicArray==> item: 10]
        }]
    };
    var modalInnerHTML = '';
    for(var count = 1; count <= modalDynamicArray[7][0][1]; count++)
    {
        modalInnerHTML += modalDynamicArray[7][0][4] + innerhelper[count][0][1] + modalDynamicArray[7][0][6] + "delete_season_name" + modalDynamicArray[7][0][8] + innerhelper[count][0][2] +
            innerhelper[count][0][3]  + modalDynamicArray[7][0][10] + "delete_season_name" + modalDynamicArray[7][0][11] + modalDynamicArray[7][0][12];
    }
    document.getElementById('uplete_body').innerHTML = modalInnerHTML;
    // set button
    document.getElementById('uplete_btn').className = 'btn btn-warning';
    document.getElementById('uplete_btn').setAttribute("onclick","syncData(['delete_season_name','season_name_container','delete','', 'emptyHelper']); return false;");
    document.getElementById('uplete_btn').innerHTML = modalDynamicArray[7][0][13];
    updateModal.show();
}

//endregion

//region ========Sync Data========//

//syncData=> [array[1]: classname, array[2]: container, array[3]: conatiner should do? append div/ reset div/ refresh div, array[4]: sql-action=? insert/update/delete (note: info for retrieve data)]
function syncData(array)
{
    var classname = array[0];
    var container = array[1];
    var form_element = document.getElementsByClassName(classname);
    var checker = array[2];
    var form_data = new FormData();
    var form_input_array = [];
    for(var count = 0; count < form_element.length; count++)
    {
        form_data.append(form_element[count].name, form_element[count].value);
        form_input_array.push(form_element[count]);
    }
    var updateData = array[3];
    if(checker!="insert" || checker!="delete" || checker!="info"|| checker!="retrieve"){
        form_data.append(classname+'_previous' ,  updateData);
    }
    if(checker==="insert"){
        if(updateData ==="addPhase"){
            for (i=1; i <= 7; i++) {
                for (j = 1; j <= 2; j++) {
                    if(j===1){form_data.append('p'+ i.toString()+'_sd', phaseCalculator[i][j]);}
                    else {form_data.append('p'+ i.toString()+'_ed', phaseCalculator[i][j]);}
                }

            }
        }
    }

    var afterFinish = array[4];
    var url = '../../controller/dashboard.php';
    getRequest(
        url, // URL for the PHP file
        form_data, // dataset to server
        drawSuccess,  // handle successful request
        drawError,   // handle error
        container,   // set container
        checker,     // set insert/update/delete
        classname, //for single page modal only
        afterFinish // after finish method
    );
}
function getRequest(url, data, success, error, container, checker, classname, afterFinish) {
    var req = false;
    try{
        req = new XMLHttpRequest();
    } catch (e){
        // IE
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            // try an older version
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {
                return false;
            }
        }
    }
    if (!req) return false;
    if (typeof success != 'function') success = function () {};
    if (typeof error!= 'function') error = function () {};
    req.onreadystatechange = function(){
        if(req.readyState == 4) {
            var response = req.responseText;
            drawOutput(response, container, checker, classname, afterFinish);
            return req.status === 200 ?
                success(req.responseText) : error(req.status);
        }
    }
    req.open("POST", url, true);
    req.send(data);
    return req;
}
var getErrorFromUser = ["show duplicate","update duplicate","data error", "delete error", "no data"];
function drawOutput(response, container, checker, classname, afterFinish) {

    var root = document.getElementById(container);
    var responseText = responseRefresh(response);
    if(checker==='insert'){
        if(responseText==getErrorFromUser[0]){
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Duplicate Error", "!!! Duplicate Entry Detected !!!"]
            sDatabaseFeedback(message);
        }else{
            var message = ["col bx bx-check-double nav_icon flex-shrink-0 text-success fs-3","Success", "Successfully Added"]
            sDatabaseFeedback(message);
            root.insertAdjacentHTML('beforeend', responseText);
            window[afterFinish]();
        }
    }else if(checker==='update'){
        if(responseText==getErrorFromUser[1]){
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Updated Duplicate", "!!! There is already aa similar value exist !!!"]
            gDatabaseFeedback(message);
        }else if(responseText==getErrorFromUser[2]){
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Data Error", "!!! Update cannot be executed due to an error !!!"]
            gDatabaseFeedback(message);
        }else if(responseText==getErrorFromUser[4]){
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","No Data Error", "!!! Update cannot be executed, no data found !!!"]
            gDatabaseFeedback(message);
        }else{
            var message = ["col bx bx-refresh nav_icon flex-shrink-0 text-success fs-3", "Updated", "!!! Successfully Updated !!!"]
            root.innerHTML = responseText;
            window[afterFinish]();
            gDatabaseFeedback(message);
        }
    }else if(checker==='delete'){
        if(responseText==getErrorFromUser[3]){
            var message = ["col bx bx-error nav_icon flex-shrink-0 text-danger fs-3","Data Error", "!!! Delete cannot be executed due to an error !!!"]
            gDatabaseFeedback(message);
        }else{
            var message = ["col bx bx-refresh nav_icon flex-shrink-0 text-success fs-3", "Deleted", "!!! Successfully Deleted !!!"]
            gDatabaseFeedback(message);
            root.innerHTML = responseText;
            window[afterFinish]();
        }
    }else if(checker==='info'){
        retriveResult(responseText, container, classname);
    }else if(checker==='retrieve'){
        retriveResultScilent(responseText, container);
    }
}

function drawSuccess() {
    //console.log("Success");
}
function drawError() {
    console.log("Failed");
}
function responseRefresh(response) {
    var responseText = response.split('\\r').join('');
    responseText = responseText.split('\\n').join('');
    responseText = responseText.split('\\').join('');
    //responseText = responseText.substring(1);
    //responseText = responseText.substring(0, responseText.length);

    console.log(responseText);
    return responseText;
}

function retriveResult(responseText, container, classname) {
    var data = responseText.split(',');
    var form_element = document.getElementsByClassName(classname);
    for(var count = 0; count < form_element.length; count++)
    {
        form_element[count].value = data[count];
    }
    $('#dSinglePageModal').modal('toggle');
}
function retriveResultScilent(responseText, container) {
    var data = responseRefresh(responseText);
    var root = document.getElementById(container);
    root.innerHTML = data;
}

function gDatabaseFeedback(succerrMessage) {
    //document.getElementById('upleteModal1').modal('hide');
    $('#upleteModal1').modal('toggle');
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal2'));
    document.getElementById('uplete_feedback_icon').className =  succerrMessage[0];
    document.getElementById('uplete_feedback_title').innerHTML = succerrMessage[1];
    document.getElementById('uplete_feedback_messsage').innerHTML = succerrMessage[2];
    updateModal.show();
}

function sDatabaseFeedback(succerrMessage) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal2'));
    document.getElementById('uplete_feedback_icon').className =  succerrMessage[0];
    document.getElementById('uplete_feedback_title').innerHTML = succerrMessage[1];
    document.getElementById('uplete_feedback_messsage').innerHTML = succerrMessage[2];
    updateModal.show();
}

//endregion

function showError(succerrMessage) {
    var updateModal = new bootstrap.Modal(document.getElementById('upleteModal2'));
    document.getElementById('uplete_feedback_icon').className =  succerrMessage[0];
    document.getElementById('uplete_feedback_title').innerHTML = succerrMessage[1];
    document.getElementById('uplete_feedback_messsage').innerHTML = succerrMessage[2];
    updateModal.show();
}

function test() {
    $('#myModal').modal('hide');
    console.log("Hi");
}

//region ========Drag Drop========//
const dropArea = document.querySelector(".drag-area"),
    dragAreaButton = document.getElementById("chatFileUpload");
dragAreaInput = dropArea.querySelector("input");
let file; //this is a global variable and we'll use it inside multiple functions

dragAreaButton.onclick = ()=>{
    dragAreaInput.click(); //if user click on the dragAreaButton then the dragAreaInput also clicked
}

dragAreaInput.addEventListener("change", function(){
    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = this.files[0];
    dropArea.classList.add("active");
    showFile(); //calling function
});


//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
    event.preventDefault(); //preventing from default behaviour
    dropArea.classList.add("active");
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", ()=>{
    dropArea.classList.remove("active");
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
    event.preventDefault(); //preventing from default behaviour
    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = event.dataTransfer.files[0];
    showFile(); //calling function
});

function showFile(){
    let fileType = file.type; //getting selected file type
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
    if(validExtensions.includes(fileType)){ //if user selected file is an image file
        let fileReader = new FileReader(); //creating new FileReader object
        fileReader.onload = ()=>{
            let fileURL = fileReader.result; //passing user file source in fileURL variable
            // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
            let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
            dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
        }
        fileReader.readAsDataURL(file);
    }else{
        alert("This is not an Image File!");
        dropArea.classList.remove("active");
    }
}
//endregion