function myFunction() {


    const length = document.querySelector('#input').value;
    let arrayOfNumbers = [];
    let maxNum, maxNumIndex, minNum, minNumIndex
    for (let i = 0; i < length; i++) {
        const value = unique();
        if (i % 2 === 1) {
            if (maxNum === undefined) {
                maxNum = value
                minNum = value
                maxNumIndex = i
                minNumIndex = i
            } else {
                if (value < minNum) {
                    minNum = value
                    minNumIndex = i
                }
                if (value > maxNum) {
                    maxNum = value
                    maxNumIndex = i
                }
            }
        }
        arrayOfNumbers.push(value)
    }

    function unique() {
        let value = Math.floor(Math.random() * 30);
        if (arrayOfNumbers.indexOf(value) !== -1) {
            value = unique()
        }
        return value
    }

    console.log(arrayOfNumbers)
    document.getElementById("first").innerHTML = arrayOfNumbers.join(", ");

    if (length >= 4) {
        arrayOfNumbers[maxNumIndex] = minNum
        arrayOfNumbers[minNumIndex] = maxNum
    }
    document.getElementById("second").innerHTML = arrayOfNumbers.join(", ");

    document.getElementById("last").innerHTML = insertionSort(arrayOfNumbers).join(", ");

    function insertionSort(array) {
        const n = array.length
        for (let i = 0; i < n; i++) {
            let v = array[i], j = i - 1
            while (j >= 0 && array[j] > v) {
                array[j + 1] = array[j]
                j--
            }
            array[j + 1] = v
        }
        return array
    }

}
