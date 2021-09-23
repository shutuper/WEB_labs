function changeClass() {
    if (document.getElementById("changeArrow").classList.contains('bi-arrow-down-circle')) {
        document.getElementById("changeArrow").classList.remove('bi-arrow-down-circle');
        document.getElementById("changeArrow").classList.add('bi-arrow-up-circle');
    } else {
        document.getElementById("changeArrow").classList.remove('bi-arrow-up-circle');
        document.getElementById("changeArrow").classList.add('bi-arrow-down-circle');
    }
}

function changeMain(id) {
    const allIds = ['default', 'team_photo', 'description', 'theme', 'conclusion', 'str_1', 'str_2', 'str_3', 'str_4'];
    for (var i = 0; i < allIds.length; i++) {
        if (!document.getElementById(allIds[i]).classList.contains('d-none')) {
            document.getElementById(allIds[i]).classList.add('d-none');
            break;
        }
    }
    document.getElementById(id.value).classList.remove('d-none');
}
