var optionList = ["Sashko", "Sashka", "Ira", "Dima", "Egor", "ILoveWeb"];

function fillDataList() {
    var container = document.getElementById('my-text-box'),
        i = 0,
        len = optionList.length,
        dl = document.createElement('datalist');

    dl.id = 'dlNames';
    for (; i < len; i += 1) {
        var option = document.createElement('option');
        option.value = optionList[i];
        dl.appendChild(option);
    }
    container.appendChild(dl);
}
fillDataList();
