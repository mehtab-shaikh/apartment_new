$(document).ready(function(){
    $(".contactsDropDown").off("change").on("change",function(){
        let selectedValue=this.value;
        switch(selectedValue){
            case "Insurance":window.location.href="insurance.php";break;
            case "Cable":window.location.href="cable.php";break;
            case "Management Company":window.location.href="managementcompany.php";break;
            case "Janitorial Services":window.location.href="janitorialservices.php";break;
            case "Landscaping":window.location.href="landscaping.php";break;
            default:break;
        }
    })

    $(".votingDropDown").off("change").on("change",function(){
        let selectedValue=this.value;
        switch(selectedValue){
            case "Ballots":window.location.href="ballots.php";break;
            case "Sign-in sheets":window.location.href="signinsheets.php";break;
            case "proxies":window.location.href="proxies.php";break;
            default:break;
        }
    })
})
