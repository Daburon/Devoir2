function AfficherConference(idConference) {
    $.ajax({
        type: "get",
        url: "index.php/CtrlPrincipal/AfficherConference",
        data: "idConference=" + idConference,
        success: function(data) {
            $('#divConference').empty();
            $('#divConference').append(data);
        },
        error: function() {
            alert('Erreur SQL');
        }
    });
}



function ValiderVote() {

    var tabIDCONFERENCE = Array();
    var tabNBVOTES = Array();
    $("input[type=checkbox]").each(function() {
        tabIDCONFERENCE.push($(this).val());
        tabNBVOTES.push($(this).is(":checked"));
    });


    $.ajax({
        type: "get",
        url: "index.php/CtrlPrincipal/ValiderVote",
        data: "tab1=" + tabIDCONFERENCE + "&tab2=" + tabNBVOTES,
        success: function(data) {
            alert("OK");
        },
        error: function() {
            alert('Erreur SQL');
        }
    });
}