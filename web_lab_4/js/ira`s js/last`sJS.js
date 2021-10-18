function Validate() {
    let date = document.forms["form"]["bday"].value.split(".")
    let count = document.forms["form"]["count"].value
    let pass1 = document.forms["form"]["passwordF"].value
    let pass2 = document.forms["form"]["passwordS"].value
    if (!isNaN(count) && !Number.isInteger(+count)) {
        alert("Halves don`t count..")
        return  false
    } else if (+date[0] > 31 || +date[1] > 12 || +date[2] > new Date().getFullYear()) {
        alert("Date invalid!")
        return  false
    } else if (pass1 !== pass2) {
        alert("Passwords are different!")
        return  false
    }
    return true
}
